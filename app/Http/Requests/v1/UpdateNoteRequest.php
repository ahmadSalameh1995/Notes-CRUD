<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNoteRequest extends FormRequest
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
        $method=$this->method();
        if($method=='put'){
            return [
                'title' =>['required'],
                'text' =>['required']
            ];
        }else{
            return [
                'title' =>['required','sometimes'],
                'text' =>['required','sometimes']

            ];
        }


    }
}
