<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin () {
        /* check nếu mà đã đăng nhập rồi thì return vào trang admin luôn */
        if(Auth::check()){
            return redirect()->back();
        }
        return view('auth.login'); /* trả về file login trong file auth */
    }

    /* Login sẽ push form, nên phải có và ta sẽ tạo request   */
    public function login (LoginRequest $request){

        /* Bước Xác thật login */
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            /* chỉ cho phép những người là admin, trong trường hợp này do mình đã set admin là 1, 2 là member, 3 là delete */
            'status' => 1
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.category.index'); /* Nếu xác thực đúng thì sẽ vô thẳng trang này, do chưa có trang dashboard nên để cho nó vô tạm trang này  */
        }
        /* Nếu nhập không đúng sẽ return lại về trang login */
        return redirect()->back();
    }
}
