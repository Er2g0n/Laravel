<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->where('status', '!=', 3)->get(); /* show ra */

        return view('admin.modules.user.index', [
            'users' => $users

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $user = new User();

        $user->email = $request->email;
        $user->password = bcrypt($request->password); /* đối với password phải có mã hóa bcrypt */
        $user->status = $request->status;
        $user->level = $request->level;
        $user->full_name = $request->full_name;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'Create user succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id); /* Sử dụng findorfail thì ko cần tạo điều kiện nó có null hay không */
        /* Sửa chính mình */
        $edit_myself = null;
        if (Auth::user()->id == $id) {
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }
        if(Auth::user()->id != 1 && ($id == 1 || ($user["level"] == 1 && $edit_myself == false))){
            return redirect()->route('admin.user.index')->with('error','You haven\'t permission to edit this user');
        }
        return view('admin.modules.user.edit', [
            'id' => $id,
            'user' => $user,
            'myself' => $edit_myself,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->email = $request->email;
        /* Nếu mà không nhập pass thì vẫn giữ nguyên pass cũ, mà đổi password thì check password đó đổi đúng hay không */
        if (!empty($request->password)) {
            $request->validate([
                'password' => 'required|confirmed|min:8',
                /* khi để confirmed vào thì phải để name là password_confirmation  */
            ], [
                'password.required' => 'Please enter password',
                'password.confirmed' => 'Confirmation password doesn\'t match',
            ]);
            $user->password = bcrypt($request->password); /* đối với password phải có mã hóa bcrypt */
        }

        $user->status = $request->status;
        $user->level = $request->level;
        $user->full_name = $request->full_name;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'Update user succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        /* Xóa User rất nguy hiểm, đụng đến rất nhiều thành phần con của mình, chỉ nên ẩn hoặc cho nó status hidden */

        $user = User::findOrFail($id);

        if( ($id == 1) || (Auth::user()->id != 1 && $user["level"])){
            return redirect()->route('admin.user.index')->with('error','You haven\'t permission to delete this user');
        }
        $user->status = 3;

        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'Delete user succesfully');


    }
}