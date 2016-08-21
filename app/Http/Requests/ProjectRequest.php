<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class ProjectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() ? true:false;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>"required|min:3|max:50",
            'desc'=>"required|min:10|max:150",
            'duedate'=>"required"
        ];
    }
}
