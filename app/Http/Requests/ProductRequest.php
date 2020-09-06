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
            /*name,description,URL,Date,Change-Date,Company_id,description-short,seen,orde,commen,state,slug*/
            'name'=>'required|max:250',
            'description'=>'required',
            'description_'=>'required|max:250',
            'img'=>'required|max:15000|',
        ];
    }
    public function attributes()
    {
        return [
            'img' => 'تصویر'
        ];
    }
}