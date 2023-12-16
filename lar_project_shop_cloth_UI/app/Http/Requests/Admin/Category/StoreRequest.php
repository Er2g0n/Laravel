<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;  /* bật lên true thì mới store được */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:categories,name'
        ];
    }
    // public function attributes():array //dùng attribute thay đổi một phần message
    // {
    //     return [
    //         'name' => 'category name'
    //     ];
    // }

    public function messages():array //dùng messages thay đổi cả  message
    {
        return [
            'name.required' => 'Please enter category name :V',
            'name.unique' =>  'Category name is exists. Please enter other category name'
        ];
    }
}
