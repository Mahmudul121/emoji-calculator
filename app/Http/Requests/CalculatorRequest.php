<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value1' => 'required|integer',
            'value2' => 'required|integer',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'value1.required' => 'This field is required',
            'value1.integer' => 'Value must be integer',
            'value2.required' => 'This field is required',
            'type.required' => 'This field is required',
            'value1.integer' => 'Value must be integer',
        ];
    }
}
