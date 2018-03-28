<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class PartnerController extends AdminController
{
    public function submit(Request $request) {
        return view('admin.partner.submit');
    }
    public function postSubmit(Request $request) {

        $user = auth('frontend')->user();
        $this->validate($request,[
            'abstract' => 'required',
            'paper' => 'required'
        ]);

    }
}
