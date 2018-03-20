<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class HomeController extends AdminController
{
    public function index()
    {
        return view('frontend.home');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function postRegister(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'file' => 'max:5120'
        ], [
            'file.max' => 'Max file size 5MB'
        ]);
        $data = $request->all();

        try {
            if (User::where('email', $data['email'])->count()) {
                return redirect()->back()->with('error', 'Email exist');
            }
            if ($request->file('file')) {
                $data['file'] = $this->saveFile($request->file('file'));
            }
            $data['password'] = Hash::make($data['password']);
            $data['type'] = User::PARTNER;
            $data['name'] = '';
            $user = User::create($data);
            return redirect()->back()->with('success', 'Regiter Successful');
        } catch (\Exception $ex) {
            return redirect()->back()->with('success', 'Server error.Try again');
        }


    }


    public function about()
    {
        return view('frontend.about');
    }

    public function program()
    {
        return view('frontend.program');
    }

    public function publication()
    {
        return view('frontend.publication');
    }

    public function organizers()
    {
        return view('frontend.organizers');
    }

    public function news()
    {
        return view('frontend.news');
    }
}
