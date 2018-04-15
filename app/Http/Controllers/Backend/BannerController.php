<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use Jenssegers\Agent\Agent;

class BannerController extends AdminController
{
    public function index()
    {
        return view('admin.banner.index');
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required'
        ], [

            'image.required' => 'Image is required'
        ]);

        $data = $request->all();

        if($request->file('image')) {
            $data['image'] = $this->saveImageAndBlur($request->file('image'));
        }


        $banner = Banner::create($data);
        cache()->forget('banners');
        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $banners = Banner::select('*');
        return \Datatables::eloquent($banners)
            ->
            editColumn('image',function ($banner) {
                if($banner->image) {

                        return '<img src="'.$banner->image. '" style="max-width: 150px;max-height: 200px">';

                }
                return '';
            })
            ->addColumn('action', function ($banner) {
                $urlEdit = route('Backend::banner@edit', ['id' => $banner->id]);

                $urlDelete = route('Backend::banner@delete', ['id' => $banner->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';


                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }
    public function delete($id) {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        cache()->forget('banners');
        return redirect()->back()->with('success','Success');
    }
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.create', compact('banner'));
    }

    public function update(Request $request, $id)
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'content' => 'required',
//
//        ], [
//            'title.required' => 'Please enter title',
//            'content.required' => 'Please enter content',
//        ]);
        $data = $request->all();
        $banner = Banner::findOrFail($id);
        $data['status'] = ($request->input('status') == 'on') ? 1 : 0;
        if ($request->file('image')) {
            $data['image'] = $this->saveImageAndBlur($request->file('image'));
        }
        $banner->update($data);
        cache()->forget('banners');
        return redirect()->back()->with('success', 'Success');
    }
}
