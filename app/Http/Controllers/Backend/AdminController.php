<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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
}
