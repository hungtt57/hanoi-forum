<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Hash;

class AdminController extends Controller
{


    public function saveFile($file,$old = null, $name = null)
    {
        $filename = $name . md5(time()) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/files/attachments/', $filename);

        if ($old) {
            @unlink(public_path($old));
        }
        return '/files/attachments/' . $filename;
    }
    public function saveImage($file, $old = null, $name = null)
    {

        $filename = $name . md5(time()) . '.' . $file->getClientOriginalExtension();
        Image::make($file->getRealPath())->save(public_path('files/' . $filename));

        if ($old) {
            @unlink(public_path($old));
        }
        return '/files/' . $filename;
    }


    public function index()
    {
        if(auth('backend')->user()->type == User::ADMIN) {
            return view('admin.admin.index');
        }
        if(auth('backend')->user()->type == User::PARTNER) {
            return redirect('admin/partner/edit');
            return view('admin.partner.index');
        }
        if(auth('backend')->user()->type == User::REVIEWER) {
            return redirect('admin/review-participants');

        }
        abort(403);
    }

    public function create()
    {
        return view('admin.admin.create');
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
        $data['type'] = User::ADMIN;
        $data['password'] = Hash::make($data['password']);
        $post = User::create($data);

        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $posts = User::select('*')->where('type', User::ADMIN);
        return \Datatables::eloquent($posts)
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::admin@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::admin@delete', ['id' => $post->id]);

                $string = '';


                if (auth('backend')->user()->id != $post->id) {
                    $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';
                    $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';
                }


                return $string;

            })->make(true);
    }

    public function delete($id)
    {
        $post = User::where('id', $id)->where('type', User::ADMIN)->first();
        if (empty($post)) {
            return redirect()->back()->with('error', 'Admin not exist!');
        }
        $post->delete();
        return redirect()->back()->with('success', 'Success');
    }

    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.admin.create', compact('admin'));
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
