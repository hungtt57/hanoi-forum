<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Document;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class DocumentController extends AdminController
{
    public function index()
    {
        return view('admin.document.index');
    }

    public function datatables(Request $request)
    {

        $documents =Document::select('*');
        return \Datatables::eloquent($documents)
            ->addColumn('reviewer', function ($document)  {
                $review = $document->reviewer;
                if($review) {
                    return $review->first_name.' '.$review->last_name;
                }
                return '';
            })
            ->addColumn('participant', function ($document)  {
                $review = $document->reviewer;
                if($review) {
                    return $review->first_name.' '.$review->last_name;
                }
                return '';
            })
            ->addColumn('subcommittee', function ($document)  {
                $subcommittee = $document->subcommittee;
                if($subcommittee) {
                    return $subcommittee->name;
                }
                return '';
            })
            ->editColumn('paper', function ($document)  {
                if($document->paper) {
                    return   '<a class="btn btn-primary green start" href="'.$document->paper.'"
                               download="'.$document->paper.'"
                               style="float: left;margin-right: 10px;margin-top: 10px">
                                <i class="fa fa-download"></i>
                                <span>Download File</span>
                                <div class="clearfix"></div>
                            </a>';
                }
                return '';
            })
            ->addColumn('action', function ($post) {
//                $urlEdit = route('Backend::post@edit', ['id' => $post->id]);
//
                $urlDelete = route('Backend::document@delete', ['id' => $post->id]);
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
        $post = Document::where('id',$id)->first();
        if (empty($post)) {
            return redirect()->back()->with('error', 'Document not exist!');
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
