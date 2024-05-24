<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:10',
            'email'=>'required',
            'age'=>'required'
        ];
    }
    public function message(){
        return [
            'name'=>'name field is required',
            'email'=>'email is must required',
            'age'=>'age filed is required'

        ];
        
    }
}
