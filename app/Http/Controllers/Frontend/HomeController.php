<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function register()
    {
        return view('frontend.register');
    }
    public function postRegister(Request $request) {
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->all();
        if(User::where('email',$data['email'])->count()) {
            return redirect()->back()->with('error','Email exist');
        }
        $data['password'] = Hash::make( $data['password']);
        $data['type'] = User::PARTNER;
        $data['name'] = '';
        $user = User::create($data);
        return redirect()->back()->with('success','Regiter Successful');
    }
}
