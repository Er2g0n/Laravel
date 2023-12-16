<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:products,name', /* unique coi nó có trùng name trông bảng products hay không  */
            'price' => 'required|numeric', /* chọn kiểu bắt buộc nhập là number là số */
            'description' => 'required',
            'image'=> 'required|mimes:jpg,bmp,png,jpeg', /* sử dụng mimes và các loại hình */
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Please enter product name',
            'name.unque' => 'Product name is exist. Please choose other product name',

            'price.required' => 'Please enter product price',
            'price.numeric' => 'Please, price is number',

            'description.required' => 'Please enter product description',

            'image.required'=> 'Please enter product image',
            'image.mimes' => 'Images must be jpg,bmp,png,jpeg'
        ];
    }
}
