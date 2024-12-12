<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Subscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    

    
    public function handle(Request $request, Closure $next): Response
    {

        $user = Auth::user();

        $subscriber = Payment::where('user_id', '==', $user->id);

        if(!$subscriber) {
            return redirect()->route('subscription');
        }

        return $next($request);
    }
}
