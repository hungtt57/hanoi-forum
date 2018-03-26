<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use Hash;

class ReviewerController extends AdminController
{
    public function index()
    {
        return view('admin.reviewer.index');
    }

    public function create()
    {
        return view('admin.reviewer.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'email.required' => 'Please enter email',

        ]);

        $data = $request->all();
        $data['name'] = '';
        $data['type'] = User::REVIEWER;
        $data['password'] = Hash::make($data['password']);
        $post = User::create($data);

        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $posts = User::select('*')->where('type', User::REVIEWER);
        return \Datatables::eloquent($posts)
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::reviewer@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::reviewer@delete', ['id' => $post->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';


                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }

    public function delete($id)
    {
        $post = User::where('id', $id)->where('type', User::REVIEWER)->first();
        if (empty($post)) {
            return redirect()->back()->with('error', 'Reviewer not exist!');
        }
        $post->delete();
        return redirect()->back()->with('success', 'Success');
    }

    public function edit($id)
    {
        $reviewer = User::findOrFail($id);
        return view('admin.reviewer.create', compact('reviewer'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'confirmed',

        ], [
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',

        ]);
        $data = $request->all();
        $post = User::findOrFail($id);
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $post->password;
        }
        $post->update($data);
        return redirect()->back()->with('success', 'Success');
    }

}
