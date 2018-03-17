<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
        return view('admin.post.index');
    }
    public function create() {
        return view('admin.post.create');
    }
    public function store(Request $request) {
//        $this->validate($request,[
//            ''
//        ],[
//
//        ]);
        $data = $request->all();
        dd($data);
    }
}
