<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class PostController extends AdminController
{
    public function index()
    {
        return view('admin.post.index');
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
//            'image' => 'required'
        ], [
            'title.required' => 'Please enter title',
            'content.required' => 'Please enter content',
//            'image.required' => 'Vui lòng chọn ảnh đại diện'
        ]);

        $data = $request->all();

        $data['status'] = ($request->input('status') == 'on') ? 1 : 0;
        if($request->file('image')) {
            $data['image'] = $this->saveImage($request->file('image'));
        }


        $post = Post::create($data);

        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $posts = Post::select('*');
        return \Datatables::eloquent($posts)
            ->editColumn('status', function ($post) {
                if ($post->status == 1) {
                    return '<label class="label label-success">Show</label>';
                } else {
                    return '<label class="label label-danger">Hide</label>';
                }
            })
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::post@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::post@delete', ['id' => $post->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';


                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.create', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ], [
            'title.required' => 'Please enter title',
            'content.required' => 'Please enter content',
        ]);
        $data = $request->all();
        $post = Post::findOrFail($id);
        $data['status'] = ($request->input('status') == 'on') ? 1 : 0;
        if ($request->file('image')) {
            $data['image'] = $this->saveImage($request->file('image'));
        }
        $post->update($data);
        return redirect()->back()->with('success', 'Success');
    }
}
