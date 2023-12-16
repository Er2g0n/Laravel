<?php

namespace App\Http\Requests\Admin\Product;

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
            'name' => 'required|unique:products,name,'.$this->id, /* unique coi nó có trùng name trông bảng products hay không, và nhớ né coi chừng trùng  */
            'price' => 'required|numeric', /* chọn kiểu bắt buộc nhập là number là số */
            'description' => 'required',
            /* Đối với phần có hình ko nên check validation ở trong phần update */
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Please enter product name,',
            'name.unque' => 'Product name is exist. Please choose other product name',

            'price.required' => 'Please enter product price',
            'price.numeric' => 'Please, price is number',

            'description.required' => 'Please enter product description',
        ];
    }
}
