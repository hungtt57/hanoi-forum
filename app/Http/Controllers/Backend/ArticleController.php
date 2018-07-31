<?php

namespace App\Http\Controllers\Backend;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class ArticleController extends AdminController
{
    public function index()
    {
        return view('admin.article.index');
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ], [
            'title.required' => 'Please choose title',
            'content.required' => 'Please enter content',
        ]);

        $data = $request->all();
        $count = Article::where('title',$data['title'])->first();
        if($count) {
            return redirect()->back()->with('error', 'Article exist with title');
        }
        $article = Article::create($data);

        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $articles = Article::select('*');
        return \Datatables::eloquent($articles)
            ->editColumn('title',function ($article) {
               return Article::$typeText[$article->title];
            })
            ->addColumn('action', function ($article) {
                $urlEdit = route('Backend::article@edit', ['id' => $article->id]);

                $urlDelete = route('Backend::article@delete', ['id' => $article->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';


                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }
    public function delete(Request $request,$id) {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->back()->with('success','Success');
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.create', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'content' => 'required',

        ], [
            'content.required' => 'Please enter content',
        ]);
        $data = $request->all();
        $article = Article::findOrFail($id);

        $article->update($data);
        return redirect()->back()->with('success', 'Success');
    }
}
