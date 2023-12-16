<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:categories,name,'.$this->id 
            /* id là route ben web, trường hợp nếu ko đụng vô tên, chỉ update phần khác thì nó vẫn cho phép làm */
        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Please enter category name',
            // 'name.unqiue' => 'Category name is exists. Please enter other category name'
        ];
    }
}
