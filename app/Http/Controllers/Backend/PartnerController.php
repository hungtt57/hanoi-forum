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
            ]);
            \DB::beginTransaction();
            try {

                $user->abstract = $request->input('abstract');
                $user->save();
                Mail::to($user->email)->send(new SubmitAbstract($user));
                EmailLog::create([
                    'to' => $user->email,
                    'event' => 'submitAbstract',
                    'data' => $user->toArray()
                ]);
                DB::commit();

                return redirect('/admin/submit')->with('success', 'Successful submision! A confirmation has been sent to your email address.');
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
}
