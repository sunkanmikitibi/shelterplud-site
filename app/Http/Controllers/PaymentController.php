<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Post;
use App\Models\User;
use App\Models\Payment;
use PharIo\Manifest\Email;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function index()
    {
        return view('payments.index');
    }

    public function pricing_page()
    {
        $plans = Plan::all();
        $footerposts = Post::latest()->limit(3)->get();
        return view('site_pages.pricing', compact('plans', 'footerposts'));
    }

    public function store(Request $request)
    {
        $formData = [
            'email' => $request->email,
            'current' => "NGN",
            'amount' => $request->amount * 100,
            'callback_url' => route('pay.callback'),
        ];

        $pay = json_decode($this->initiate_payment($formData));

        if ($pay) {
            if ($pay->status) {
                //dd($pay);
                return redirect($pay->data->authorization_url);
            } else {
                return back()->withError($pay->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }

    public function verify_payment($reference)
    {

        $chpay = curl_init();
        curl_setopt_array($chpay, [
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer " . env("PAYSTACK_SECRET_KEY"),
                "Cache-Control: no-cache"
            ],
        ]);

        $response = curl_exec($chpay);

        curl_close($chpay);

        return $response;
    }

    public function payment_callback(Request $request)
    {
        $response = json_decode($this->verify_payment($request->reference));
        if ($response) {
            if ($response->status) {

                //dd($response);
                $data = $response->data;

                $payment_email = $data->customer->email;
                $amount = $data->amount / 100;
                $pplan = Plan::where('amount', $amount)->firstOrFail();
                $puser = User::where('email', $payment_email)->firstOrFail();

                //create payment
                $payment = Payment::create(
                    [
                        'status' => $data->status,
                        'user_id' => $puser->id,
                        'plan_id' => $pplan->id,
                        'amount' => $amount,
                        'reference_number' => $data->reference,
                        'payment_date' => $data->paidAt,
                    ]
                );
                //Mail::to('<EMAIL>')->send(new NewPaymentMail());
                return view('payments.callback', compact('data'));
            } else {
                return back()->withError($response->message);
            }
        } else {
            return back()->withError("Something went Wrong...Please Try Again");
        }

        //return view('payments.callback');
    }

    public function initiate_payment($formData)
    {
        $url = "https://api.paystack.co/transaction/initialize";

        $fields_string = http_build_query($formData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer " . env("PAYSTACK_SECRET_KEY"),
            "Cache-Control: no-cache"
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
