<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\RegisterEmail;
use App\Mail\ResetPassword;
use App\Mail\SendContactEmail;
use App\Models\Contact;
use App\Models\EmailLog;
use App\Models\Post;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;

class HomeController extends AdminController
{
    public function newPassword(Request $request) {
        $code = $request->input('code');
        if(empty($code)) {
            return redirect('/')->with('error','Something went wrong');
        }
        $user = User::where('code_password', $code)->first();
        if(empty($user)) {
            return redirect('admin/login')->with('error','User do not exist');
        }
        return view('admin.auth.newPassword',compact('user'));
    }
    public function postNewPassword(Request $request) {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);
        $code = $request->input('code');
        if(empty($code)) {
            return redirect('/')->with('error','Something went wrong');
        }
        $password = $request->input('password');
        $user = User::where('code_password', $code)->first();
        if(empty($user)) {
            return redirect('admin/login')->with('error','User do not exist');
        }
       $user->password= Hash::make($password);
        $user->code_password = '';
        $user->save();
        return redirect('admin/login')->with('success','Change password successfully');
    }
    public function forgotPassword(Request $request){
        return view('admin.auth.forgotPassword');
    }
    public function postForgotPassword(Request $request) {
        $email = $request->input('email');
        if(empty($email)) {
            return redirect()->back()->with('error','Please enter email');
        }
        $user = User::where('email', $email)->first();
        if(empty($user)) {
            return redirect()->back()->with('error','User do not exist');
        }
        $code = str_random(5);
        $code= md5($code.time());
        $user->code_password = $code;
        $user->save();
        Mail::to($user->email)->cc('hanoiforum@vnu.edu.vn')->send(new ResetPassword($user));
        return redirect()->back()->with('success','Please check your email to reset password');
    }
    public function sendEmailReminder(Request $request)
    {
        $id = 1; // điền 1 mã id bất kỳ của user trong bảng users
        $user = User::findOrFail(16);
        Mail::to($user->email)->cc('hin1471994@gmail.com')->send(new RegisterEmail($user));


    }

    public function index()
    {
        return view('frontend.home');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'file' => 'max:5120',
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'affiliation' => 'required',
            'confirm' => 'required'
        ], [
            'file.max' => 'Max file size 5MB',
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'title.required' => 'Please enter title',
            'affiliation.required' => 'Please enter affiliation',
            'confirm.required' => 'Please answer all the required fields '
        ]);
        $data = $request->all();
        \DB::beginTransaction();
        try {
            if (User::where('email', $data['email'])->count()) {
                return redirect()->back()->with('error', 'Email exist')->withInput(Input::all());
            }
            if ($request->file('file')) {
                $data['file'] = $this->saveFile($request->file('file'));
            } else {
                unset($data['file']);
            }
            $data['password'] = Hash::make($data['password']);
            $data['type'] = User::PARTNER;
            $data['name'] = '';
            $data['status'] = 0;
            $code = '';
            $count = 1;
            $data['title'] = rtrim($data['title'], '.');
            do {
                $code = str_random(5);
                $count = User::where('code', $code)->count();
            } while ($count);
            $data['code'] = $code;
            $d = [];
            $check = true;
            if (count($data['know'])) {
                foreach ($data['know'] as $key => $value) {

                    if(isset($value['id'])) {
                        $d[$value['id']] = [
                            'id' => $value['id'],
                            'content' => (isset($value['content'])) ? $value['content'] : ''
                        ];
                        $check = false;
                    }else {
                        continue;
                    }
                }

            }
            if($check == true) {
                return redirect()->back()->with('error', 'Please answer all the required fields ')->withInput(Input::all());
            }
            $data['know'] = $d;
            $indicate = [];
            $check = true;
            if (count($data['indicate'])) {
                foreach ($data['indicate'] as $key => $value) {

                    if(isset($value['id'])) {
                        $indicate[$value['id']] = [
                            'id' => $value['id'],
                            'content' => (isset($value['content'])) ? $value['content'] : ''
                        ];
                        $check = false;
                    }else {
                        continue;
                    }
                }

            }
            if($check == true) {
                return redirect()->back()->with('error', 'Please answer all the required fields ')->withInput(Input::all());
            }
            $data['indicate'] = $indicate;
            $user = User::create($data);
            Mail::to($user->email)->cc('hanoiforum@vnu.edu.vn')->send(new RegisterEmail($user));
            EmailLog::create([
                'to' => $user->email,
                'event' => 'register',
                'data' => $user->toArray()
            ]);
            DB::commit();
            if ($data['apply'] == 1) {
                return redirect()->back()->with('success', '<p>Thank you for your registration. An automatic confirmation has been sent to your email address. You should check your junk mail in case you do not receive it. Please click on the provided link in the email to activate your account. Please contact us directly at hanoiforum@vnu.edu.vn if you do not receive a confirmation within 24 hours.</p>
<p>After the verification, you can log into your account and submit your abstract.</p>
')->with('hideform', 'yes');
            } else {
                return redirect()->back()->with('success', '
<p>Thank you for your registration. An automatic confirmation has been sent to your email address. You should check your junk mail in case you do not receive this email. Please click on the provided link in the email to activate your account. Please contact us directly at hanoiforum@vnu.edu.vn if you do not receive a confirmation within 24 hours. </p>

<p>After the verification, you can log into your account, and manage your information and setting. </p>

')->with('hideform', 'yes');
            }

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'Server error.Try again later')->withInput(Input::all());
        }


    }

    public function contactUs(Request $request)
    {
        return view('frontend.contactUs');
    }

    public function postContactUs(Request $request)
    {
        \DB::beginTransaction();
        try {
            $this->validate($request, [
                'email' => 'required|email|max:255',
                'first_name' => 'required',
                'sur_name' => 'required',
                'title' => 'required',
            ]);
            $data = $request->all();

            $contact = Contact::create($data);

            Mail::to('hanoiforum@vnu.edu.vn')->send(new SendContactEmail($contact,1));
            EmailLog::create([
                'to' => 'hanoiforum@vnu.edu.vn',
                'event' => 'contactUs',
                'data' => $contact->toArray()
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Thank you for contacting us. Your request has been recorded. We will try to get back to you as soon as we can. ');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'Server error.Try again later')->withInput(Input::all());
        }

    }

    public function vefiryEmail(Request $request)
    {
        $code = $request->input('code');
        $user = null;
        if ($code) {
            $user = User::where('code', $code)->first();
            $user->update(['status' => 1]);
        }

        return view('frontend.verifyEmail', compact('user'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function hanoiForum2018()
    {
        return view('frontend.hanoiForum2018');
    }


    public function hanoi()
    {
        return view('frontend.hanoiForum');
    }

    public function program()
    {
        return view('frontend.program');
    }

    public function publication()
    {
        return view('frontend.publication');
    }

    public function organizers()
    {
        return view('frontend.organizers');
    }

    public function steeringCommittee()
    {
        return view('frontend.steeringCommittee');
    }

    public function OrganizingCommittee()
    {
        return view('frontend.organizingCommittee');
    }

    public function academicCommittee()
    {
        return view('frontend.academicCommittee');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function climateChangeEvidenceAndSecurity(Request $request)
    {
        return view('frontend.panel.climateChangeEvidenceAndSecurity');
    }

    public function humanImpactClimate(Request $request)
    {
        return view('frontend.panel.humanImpactClimate');
    }

    public function climateChangeResponse(Request $request)
    {
        return view('frontend.panel.climateChangeResponse');
    }

    public function policyAndGovernance(Request $request)
    {
        return view('frontend.panel.policyAndGovernance');
    }

    public function scienceTechnology(Request $request)
    {
        return view('frontend.panel.scienceTechnology');
    }

    public function detailPost(Request $request, $slug, $id)
    {
        $post = Post::where('id', $id)->where('status', 1)->first();
        if (empty($post)) {
            abort(404);
        }
        return view('frontend.post', compact('post'));
    }

    public function sponsor(Request $request)
    {
        return view('frontend.sponsor');
    }

    public function faq(Request $request)
    {
        return view('frontend.faq');
    }

    public function importantDates(Request $request)
    {
        return view('frontend.importantDates');
    }

    public function forumProgram(Request $request)
    {
        return view('frontend.forumProgram');
    }

    public function keynoteSpeakers(Request $request)
    {
        return view('frontend.keynoteSpeakers');
    }

    public function visa(Request $request)
    {
        return view('frontend.visa');
    }

    public function transportation(Request $request)
    {
        return view('frontend.transportation');
    }

    public function registration(Request $request)
    {
        return view('frontend.registration');
    }

    public function hne(Request $request) {
        return view('frontend.hanoiex');
    }
    public function aboutandaroudvietnam(Request $request) {
        return view('frontend.aboutvietnam');
    }
    public function accommodation(Request $request) {
        return view('frontend.accommodation');
    }
    public function forumSiteInfo(Request $request) {
        return view('frontend.forumSiteInfo');
    }

    public function policy1() {
        return view('frontend.policy1');
    }
    public function policy2() {
        return view('frontend.policy2');
    }

    public function publicationBook() {
        return view('frontend.publication.books');
    }
    public function publicationJournalArticle () {
        return view('frontend.publication.journalArticle');
    }
}

