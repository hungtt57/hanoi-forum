<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class DocumentController extends AdminController
{
    public function index()
    {
        return view('admin.participant.index');
    }

    public function datatables(Request $request)
    {
        $contacts = User::select('*')->where('type', User::PARTNER);
        $reviewers = User::select('*')->where('type', User::REVIEWER)->get();
        return \Datatables::eloquent($contacts)
            ->addColumn('reviewer', function ($user) use ($reviewers) {

                return view('admin.participant.reviewer', compact('user', 'reviewers'))->render();
            })
            ->addColumn('action', function ($post) {
//                $urlEdit = route('Backend::post@edit', ['id' => $post->id]);
//
                $urlDelete = route('Backend::participants@delete', ['id' => $post->id]);
//
                $string = '';
//
//                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';
//
//
                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }

    public function delete($id)
    {
        $post = User::where('id', $id)->where('type', User::PARTNER)->first();
        if (empty($post)) {
            return redirect()->back()->with('error', 'Participant not exist!');
        }
        $post->delete();
        return redirect()->back()->with('success', 'Success');
    }


    public function select(Request $request)
    {
        $id = $request->input('id');
        $reviewId = $request->input('reviewer_id');
        $user = User::where('id', $id)->where('type', User::PARTNER)->first();
        if (empty($user)) {
            return response([
                'status' => 0,
                'message' => 'Participant not exist',
                'data' => null
            ], 200);
        }
        $review = User::where('id', $reviewId)->where('type', User::REVIEWER)->first();
        if (empty($review)) {
            return response([
                'status' => 0,
                'message' => 'REVIEWER not exist',
                'data' => null
            ], 200);
        }
        $user->reviewer_id = $reviewId;
        $user->save();
        return response([
            'status' => 1,
            'message' => 'Success',
            'data' => null
        ], 200);
    }
}
