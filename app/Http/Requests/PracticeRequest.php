<?php

namespace labtectoluca\Http\Requests;

use labtectoluca\Http\Requests\Request;

class PracticeRequest extends Request
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
            'title'=>'required',
            'description'=>'required',
            'url'=>'required'
        ];
    }
}
