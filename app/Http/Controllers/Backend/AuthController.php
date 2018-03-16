<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
class AuthController extends Controller
{
    public $redirectUrl = '/admin';
    public function getLogin(Request $request) {
        return view('admin.auth.login');
    }
    public function postLogin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $account = User::where('email',$email)->first();
        if(empty($account)) {
            return redirect()->back()->with('error','Không tồn tại tài khoản');
        }
        if(Hash::check($password,$account->password)) {
            auth('backend')->login($account, true);
            return redirect($this->redirectUrl)->with('success', 'Đăng nhập thành công');
        } else {
            return redirect()->back()->with('error', 'Sai mật khẩu');
        }

    }
    public function logout(Request $request) {
        auth('backend')->logout();

        return redirect('/');
    }
}
