<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use DB;
use Mail;
use App\Models\EmailLog;
use App\Mail\SubmitAbstract;
use Illuminate\Support\Facades\Input;
class PartnerController extends AdminController
{
    public function submit(Request $request)
    {
        $user = auth('backend')->user();
        return view('admin.partner.submit', compact('user'));
    }

    public function postSubmit(Request $request)
    {

        $user = auth('backend')->user();
        if (!$user->confirm_abstract) {
            $this->validate($request, [
                'abstract' => 'required',
                'title_of_paper' => 'required'
            ],[
                'title_of_paper.required' => 'Title of paper is required'
            ]);
            \DB::beginTransaction();
            try {

                $user->abstract = $request->input('abstract');
                $user->title_of_paper = $request->input('title_of_paper');
                $user->save();
                Mail::to($user->email)->send(new SubmitAbstract($user));
                EmailLog::create([
                    'to' => $user->email,
                    'event' => 'submitAbstract',
                    'data' => $user->toArray()
                ]);
                DB::commit();

                return redirect('/admin/submit/success');
            } catch (\Exception $ex) {
                DB::rollback();
                return redirect()->back()->with('success', 'Server error.Try again later')->withInput(Input::all());
            }

        }
        if ($user->confirm_abstract) {
            $this->validate($request, [
                'paper' => 'required'
            ]);
        }

    }
    public function submitSuccess(Request $request) {
        $user = auth('backend')->user();
        return view('admin.partner.submitSuccess',compact('user'));
    }
}
