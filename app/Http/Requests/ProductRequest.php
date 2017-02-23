<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
          'name'=>'string | required',
          'price' => 'numeric | min:0 | required', 
          'description' => 'string | required',
          'tags' => 'required | array:string',
          'salesman_id' => 'integer | required | min:1'
        ];
    }
}
