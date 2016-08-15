<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CourseForm extends Request
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
          "author" => "required|between:5,60",
          "name" => "required|between:5,60",
          "description" => "required|between:5,255",
          "price" => "required|between:1,15"
        ];
    }

    public function messages()
    {
      return [
          'author.between' => 'The :attribute must be between :min - :max.',
          'author.required' => 'The :attribute is required!',
          'name.between' => 'The :attribute must be between :min - :max.',
          'name.required' => 'The :attribute is required!',
          'description.between' => 'The :attribute must be between :min - :max.',
          'description.required' => 'The :attribute is required!',
          'price.between' => 'The :attribute must be between :min - :max.',
          'price.required' => 'The :attribute is required!',
      ];
    }
}
