<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
            /* Không nên giới hạn số từ password là min:8 nó sẽ khiến hacker ra pass của chúng ta dễ dàng hơn, nên hãy cho rà bao nhiêu cũng được */
        ];
        /* Có trường hợp không đặt nhập bằng email mà bằng phone chẳng hạn
         thì phải khai báo thêm một bước nữa */
        /* Ví dụ
           public function __contruct()
           {
                $this->middleware('guest')->except('logout');
           }
           public function username()
           {
                return 'username'
           }
        */

    }
}