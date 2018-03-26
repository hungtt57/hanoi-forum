<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class ParticipantController extends AdminController
{
    public function index()
    {
        return view('admin.participant.index');
    }

    public function datatables(Request $request)
    {
        $contacs = Contact::select('*');
        return \Datatables::eloquent($contacs)
            ->addColumn('action', function ($post) {
//                $urlEdit = route('Backend::post@edit', ['id' => $post->id]);
//
//                $urlDelete = route('Backend::post@delete', ['id' => $post->id]);
//
//                $string = '';
//
//                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';
//
//
//                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';

                $string = '';
                return $string;

            })->make(true);
    }

}
