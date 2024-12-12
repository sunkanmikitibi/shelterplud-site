<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InteriorApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|min:3|max:20',
            'phone' => 'required',
            'email' => 'required|email',
            'location_id' => 'required|integer',
            'city' => 'required',
            'budget' => 'required',
            'vendor_id' => 'required',
            'type_of_apartment' => 'required',
            'possession_timeline' => 'required',
            'scope_of_work' => 'required',
            'comments' => 'sometimes'
        ];
    }
}
