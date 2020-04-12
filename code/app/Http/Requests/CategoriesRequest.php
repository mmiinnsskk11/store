<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'name' => ['required', 'min:2', 'max:100', "unique:category,name,{$this->category},id"],
            'description' => ['required', 'min:2', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Обязательное поля для заполнения',
            'min' => 'Минимальное колличество символов должно быть :min',
            'max' => 'Максимальное колличество символов должно быть :max',
            'unique' => 'Должно быть уникальное название'
        ];
    }
}
