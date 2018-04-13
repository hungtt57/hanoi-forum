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
use App\Models\User;
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
    public function editProfile(Request $request) {
        $user = auth('backend')->user();
        return view('admin.partner.editProfile',compact('user'));
    }
    public function updateProfile(Request $request) {
        $this->validate($request, [
            'file' => 'max:5120',
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'affiliation' => 'required',
        ], [
            'file.max' => 'Max file size 5MB',
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'title.required' => 'Please enter title',
            'affiliation.required' => 'Please enter affiliation',
        ]);
        $data = $request->all();
        if(isset($data['password'])) {
            $this->validate($request, [
                'password' => 'min:6|confirmed',

            ], [

            ]);
        }
        try {

            if ($request->file('file')) {
                $data['file'] = $this->saveFile($request->file('file'));
            }
            $userId = auth('backend')->user()->id;
            $user = User::find($userId);

            if(isset($data['password']) and $data['password']) {
                $data['password'] = Hash::make($data['password']);
            }else {
                $data['password'] = $user->password;
            }
            $data['type'] = User::PARTNER;
            $data['name'] = '';
            $user->update($data);
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Server error.Try again later')->withInput(Input::all());
        }

    }
}
