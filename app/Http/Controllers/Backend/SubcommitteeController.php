<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Subcommittee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class SubcommitteeController extends AdminController
{
    public function index()
    {
        return view('admin.subcommittee.index');
    }


    public function create()
    {
        return view('admin.subcommittee.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',

        ], [
            'name.required' => 'Please enter title',

        ]);

        $data = $request->all();

        Subcommittee::create($data);

        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $posts = Subcommittee::select('*');
        return \Datatables::eloquent($posts)
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::subcommittee@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::subcommittee@delete', ['id' => $post->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';


                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }
    public function delete($id) {
        $post = Subcommittee::findOrFail($id);
        $post->delete;
        return redirect()->back()->with('success','Success');
    }
    public function edit($id)
    {
        $subcommittee = Subcommittee::findOrFail($id);
        return view('admin.subcommittee.create', compact('subcommittee'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',

        ], [
            'name.required' => 'Please enter title',
        ]);

        $data = $request->all();
        $data['name']  = trim($data['name']);
        if(Subcommittee::where('name',$data['name'])->where('id','!=',$id)->count()) {
            return redirect()->back()->with('error','Name exist');
        }
        $subcommittee = Subcommittee::findOrFail($id);

        $subcommittee->update($data);
        return redirect()->back()->with('success', 'Success');
    }

}
