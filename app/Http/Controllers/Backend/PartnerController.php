<?php

namespace App\Http\Controllers\Backend;

use App\Mail\SubmitPaper;
use App\Models\OnlineService;
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
use Hash;

class PartnerController extends AdminController
{
    public function dashboard()
    {
        $user = auth('backend')->user();
        return view('admin.partner.dashboard', compact('user'));
    }

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
//                'title_of_paper' => 'required',
//                'abstract_panel' => 'required'
            ], [
//                'title_of_paper.required' => 'Title of paper is required',
//                'abstract_panel.required' => 'Submission to panel session is required'
            'abstract.required' => 'Abstract file is required'
            ]);
            \DB::beginTransaction();
            try {
                $abstract_panel = $request->input('abstract_panel');
                $panelAbstract = $request->input('panel_of_abstract',[]);
                $files = $request->file('abstract', []);
                $titleAbstract = $request->input('title_abstract', []);
                $abstract = [];
                $title_of_abstract = [];
                $panel_of_abstract = [];
                foreach ($files as $index => $file) {
                    $ta = (isset($titleAbstract[$index])) ? $titleAbstract[$index] : '';
                    $title_of_abstract[] = $ta;
                    $panelItem =  (isset($panelAbstract[$index])) ? $panelAbstract[$index] : '';
                    $panel_of_abstract[] = $panelItem;
                    $filename = $panelItem .'_'. $index . '_' . str_slug($user->first_name) . str_slug($user->last_name) . '_' . str_slug($ta);
                    $abstract[] = $this->saveFile($file, null, $filename);

                }
                $user->abstract = json_encode($abstract);
                $user->title_abstract = json_encode($title_of_abstract);
                $user->panel_of_abstract = json_encode($panel_of_abstract);

                $user->reject_abstract = null;
                $user->abstract_panel = $abstract_panel;
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
                return redirect()->back()->with('error', 'Server error.Try again later')->withInput(Input::all());
            }

        }
//        if ($user->confirm_abstract) {
//            $this->validate($request, [
//                'paper' => 'required'
//            ]);
//            \DB::beginTransaction();
//            try {
//
//                if ($request->file('paper')) {
//                    $data['paper'] = $this->saveFile($request->file('paper'));
//                }
//
//                $user->reject_paper = null;
//                $user->save();
//                Mail::to($user->email)->send(new SubmitAbstract($user));
//                EmailLog::create([
//                    'to' => $user->email,
//                    'event' => 'submitPaper',
//                    'data' => $user->toArray()
//                ]);
//                DB::commit();
//
//                return redirect('/admin/submit/success');
//            } catch (\Exception $ex) {
//                DB::rollback();
//                return redirect()->back()->with('success', 'Server error.Try again later')->withInput(Input::all());
//            }
//        }

    }

    public function postSubmitPaper(Request $request)
    {
        $user = auth('backend')->user();

        $this->validate($request, [
            'paper' => 'required',
//            'title_of_full_paper' => 'required',
//                'paper_panel' => 'required'
        ], [
//            'title_of_full_paper.required' => 'Title of paper is required',
                'paper.required' => 'Full-text paper is required'
        ]);
        \DB::beginTransaction();
        try {

            $paper_panel = $request->input('paper_panel');
            $title_of_full_paper = $request->input('title_of_full_paper');
            $abstract = [];
            $files = $request->file('paper', []);

            $titlePaper = $request->input('title_paper', []);
            $title_of_abstract = [];
            foreach ($files as $index => $file) {
                $ta = (isset($titlePaper[$index])) ? $titlePaper[$index] : '';
                $filename = $paper_panel . $index . '_' . str_slug($user->first_name) . str_slug($user->last_name) . '_' . str_slug($ta);
                $abstract[] = $this->saveFile($file, null, $filename);
                $title_of_abstract[] = $ta;
            }
            $user->paper = json_encode($abstract);
            $user->title_paper = json_encode($title_of_abstract);
            $user->title_of_full_paper = $title_of_full_paper;
            $user->reject_paper = null;
//                $user->paper_panel = $paper_panel;
            $user->save();
            Mail::to($user->email)->send(new SubmitPaper($user));
            EmailLog::create([
                'to' => $user->email,
                'event' => 'submitPaper',
                'data' => $user->toArray()
            ]);
            DB::commit();

            return redirect('/admin/submit/success-paper');
        } catch (\Exception $ex) {
            DB::rollback();

            return redirect()->back()->with('error', 'Server error.Try again later')->withInput(Input::all());
        }


//

    }

    public function submitPaper(Request $request)
    {
        $user = auth('backend')->user();
        return view('admin.partner.submitPaper', compact('user'));
    }

    public function submitSuccess(Request $request)
    {
        $user = auth('backend')->user();
        return view('admin.partner.submitSuccess', compact('user'));
    }

    public function submitSuccessPaper(Request $request)
    {
        $user = auth('backend')->user();
        return view('admin.partner.submitSuccessPaper', compact('user'));
    }

    public function editProfile(Request $request)
    {
        $user = auth('backend')->user();
        return view('admin.partner.editProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
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
        if (isset($data['password'])) {
            $this->validate($request, [
                'password' => 'min:6|confirmed',

            ], [

            ]);
        }
        try {
            $check = true;
            if (count($data['know'])) {
                foreach ($data['know'] as $key => $value) {

                    if (isset($value['id'])) {
                        $d[$value['id']] = [
                            'id' => $value['id'],
                            'content' => (isset($value['content'])) ? $value['content'] : ''
                        ];
                        $check = false;
                    } else {
                        continue;
                    }
                }

            }
            if ($check == true) {
                return redirect()->back()->with('error', 'Please answer all the required fields ')->withInput(Input::all());
            }
            $data['know'] = $d;
            $indicate = [];
            $check = true;
            if (count($data['indicate'])) {
                foreach ($data['indicate'] as $key => $value) {

                    if (isset($value['id'])) {
                        $indicate[$value['id']] = [
                            'id' => $value['id'],
                            'content' => (isset($value['content'])) ? $value['content'] : ''
                        ];
                        $check = false;
                    } else {
                        continue;
                    }
                }

            }
            if ($check == true) {
                return redirect()->back()->with('error', 'Please answer all the required fields ')->withInput(Input::all());
            }
            $data['indicate'] = $indicate;


            $userId = auth('backend')->user()->id;
            $user = User::find($userId);
            if ($request->file('file')) {
                $data['file'] = $this->saveFile($request->file('file'), $user->file);
            }
            if ($request->file('image')) {
                $data['image'] = $this->saveImage($request->file('image'), $user->image);
            }


            if (isset($data['password']) and $data['password']) {
                $data['password'] = Hash::make($data['password']);
            } else {
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

    public function listDelegates(Request $request)
    {
        if (auth('backend')->user()->verify == 0) {
            abort(403);
        }
        return view('admin.partner.listDelegates');
    }

    public function listDelegatesData(Request $request)
    {
        $contacts = User::select('*')->where('type', User::PARTNER)->where('share_info', 1);
        return \Datatables::eloquent($contacts)
            ->editColumn('link_cv', function ($post) {
                $string = '';
                if ($post->link_cv) {
                    $string .= '<a target="_blank" href="' . $post->link_cv . '">' . $post->link_cv . '</a>';
                }

                return $string;
            })
            ->editColumn('cv', function ($post) {
                if ($post->file) {
                    return '<a class="btn btn-primary green start" href="' . $post->file . '"
                               download="' . $post->file . '"
                               style="float: left;margin-right: 10px;margin-top: 10px">
                                <i class="fa fa-download"></i>
                                <span>Download File</span>
                                <div class="clearfix"></div>
                            </a>';
                }
                return '';
            })
            ->make(true);
    }
    public function onlineService(Request $request) {
        $accountId = auth('backend')->user()->id;
        $form = OnlineService::where('account_id',$accountId)->first();
        return view('admin.partner.onlineService',compact('form'));
    }
    public function postOnlineService(Request $request) {
        $data = $request->all();
        $data['account_id'] = auth('backend')->user()->id;
        $online = OnlineService::firstOrCreate(['account_id' =>   $data['account_id'] ]);
        $online->update($data);
        return redirect()->back()->with('success','Success');
    }

}
