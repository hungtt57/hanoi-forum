<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\RegisterEmail;
use App\Models\Contact;
use App\Models\EmailLog;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Input;
use Mail;
use DB;
class HomeController extends AdminController
{
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
        ], [
            'file.max' => 'Max file size 5MB',
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'title.required' => 'Please enter title',
            'affiliation.required' => 'Please enter affiliation',
        ]);
        $data = $request->all();
        \DB::beginTransaction();
        try {
            if (User::where('email', $data['email'])->count()) {
                return redirect()->back()->with('error', 'Email exist')->withInput(Input::all());
            }
            if ($request->file('file')) {
                $data['paper'] = $this->saveFile($request->file('file'));
            }
            $data['password'] = Hash::make($data['password']);
            $data['type'] = User::PARTNER;
            $data['name'] = '';
            $data['status'] = 0;
            $code = '';
            $count = 1;
            do {
                $code = str_random(5);
                $count = User::where('code', $code)->count();
            } while ($count);
            $data['code'] = $code;
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
<p>After the verification, you can log into your account, and manage your information and setting.</p><p>Registration fee is USD100 and includes access to all sessions and side events, welcome dinner, refreshments during the conference and conference materials. Registration fee will automatically be waived to delegates with accepted abstracts.</p>
');
            } else {
                return redirect()->back()->with('success', '<p>Thank you for your registration. An automatic confirmation has been sent to your email address. You should check your junk mail in case you do not receive this email. Please click on the provided link in the email to activate your account. Please contact us directly at hanoiforum@vnu.edu.vn if you do not receive a confirmation within 24 hours.</p>

<p>After the verification, you can log into your account, and manage your information and setting.</p>

<p>You can pay the registration fee until October 20, 2018 by logging onto your account. The registration fee is USD100 and includes access to all sessions and side events, welcome dinner, refreshments during the event, and the event materials.</p>
');
            }

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('success', 'Server error.Try again later')->withInput(Input::all());
        }


    }

    public function contactUs(Request $request)
    {
        return view('frontend.contactUs');
    }

    public function postContactUs(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'first_name' => 'required',
            'sur_name' => 'required',
            'title' => 'required',
        ]);
        $data = $request->all();

        Contact::create($data);
        return redirect()->back()->with('success', 'Thank you for contacting us. Your request has been recorded. We will try to get back to you as soon as we can. ');
    }

    public function vefiryEmail(Request $request)
    {
        $code = $request->input('code');
        if ($code) {
            $user = User::where('code', $code)->update(['status' => 1]);
        }

        return view('frontend.verifyEmail');
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
}

