<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisbursementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'amount' => 'required|numeric|min:1000|max:20000',
            'reference' => 'required|string',
            'narration' => 'required',
            "destination_bank_code" => 'required',
            "destination_account_number" =>  'required',
            'currency' => 'required',
            "source_account_number" => 'required'
        ];
    }

}