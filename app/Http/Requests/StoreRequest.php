<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|min:2',
            'address' => 'required|min:2',
            'description' => 'required',
            'Phone' => 'required',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name Is Missing',
            'address.required' => 'The address Is Missing',
            'Phone.required' => 'The Phone Is Missing',
            'description.required' => 'The Description Is Missing',
            'image.required' => 'You must select image of category',
        ];
    }
}
