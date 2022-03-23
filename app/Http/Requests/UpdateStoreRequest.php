<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'Phone' => 'required',
            'description' => 'required',
                    ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The Name Is Missing',
            'address.required' => 'The address Is Missing',
            'Phone.required' => 'The Phone Is Missing',
            'description.required' => 'The Description Is Missing',
        ];
    }
}
