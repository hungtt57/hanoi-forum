<?php

namespace App\Http\Controllers\Backend;

use App\Mail\SendContactEmail;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use Mail;
use App\Models\EmailLog;
use DB;
class ContactUsController extends AdminController
{
    public function index()
    {
        return view('admin.contactUs.index');
    }

    public function datatables(Request $request)
    {
        $contacs = Contact::select('*');
        return \Datatables::eloquent($contacs)
            ->editColumn('status',function ($contact) {
                return ($contact->status) ? 'Processed' : 'Not Process';
            })
            ->addColumn('action', function ($contact) {
//
                if($contact->status == 0) {
                    $string = '<button type="button" class="btn btn-info answer-question" data-toggle="modal" data-id="'.$contact->id.'" data-target="#answer-modal">Answer</button>';
                    return $string;
                }
                return '';

            })->make(true);
    }
    public function answer(Request $request) {
//        $data = $request->all();
        $content = $request->input('answer');
        $id = $request->input('id');
        if(empty($content)) {
            return response([
                'status' => 0,
                'message' => ' Please enter content',
                'data' => null
            ],200);
        }
        \DB::beginTransaction();
        try {
            $contact = Contact::find($id);
            if(empty($contact)) {
                return response([
                    'status' => 0,
                    'message' => 'Online question not exist',
                    'data' => null
                ],200);
            }
            $contact->status = 1;
            $contact->answer = $content;
            $contact->save();
            Mail::to($contact->email)->send(new SendContactEmail($contact));
            EmailLog::create([
                'to' => $contact->email,
                'event' => 'contactUs',
                'data' => $contact->toArray()
            ]);
            DB::commit();
            $count  = Contact::where('status',0)->count();
            return response([
                'status' => 1,
                'message' => 'Success',
                'data' => [
                    'count' => $count
                ]
            ],200);
        }catch (\Exception $ex) {
            return response([
                'status' => 0,
                'message' => 'Server error',
                'data' => null
            ],200);
        }

    }
}
