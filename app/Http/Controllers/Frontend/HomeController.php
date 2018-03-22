<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class HomeController extends AdminController
{
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
            'affiliation.required' => 'Please enter Affiliation',
        ]);
        $data = $request->all();

        try {
            if (User::where('email', $data['email'])->count()) {
                return redirect()->back()->with('error', 'Email exist');
            }
            if ($request->file('file')) {
                $data['file'] = $this->saveFile($request->file('file'));
            }
            $data['password'] = Hash::make($data['password']);
            $data['type'] = User::PARTNER;
            $data['name'] = '';
            $user = User::create($data);
            return redirect()->back()->with('success', 'Registration successful ');
        } catch (\Exception $ex) {
            return redirect()->back()->with('success', 'Server error.Try again');
        }


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
    public function steeringCommittee() {
        return view('frontend.steeringCommittee');
    }
    public function OrganizingCommittee() {
        return view('frontend.organizingCommittee');
    }
    public function academicCommittee() {
        return view('frontend.academicCommittee');
    }
    public function news()
    {
        return view('frontend.news');
    }

    public function climateChangeEvidenceAndSecurity(Request $request) {
        return view('frontend.panel.climateChangeEvidenceAndSecurity');
    }
    public function humanImpactClimate(Request $request) {
        return view('frontend.panel.humanImpactClimate');
    }
    public function climateChangeResponse(Request $request) {
        return view('frontend.panel.climateChangeResponse');
    }
    public function policyAndGovernance(Request $request) {
        return view('frontend.panel.policyAndGovernance');
    }
    public function scienceTechnology(Request $request) {
        return view('frontend.panel.scienceTechnology');
    }

    public function detailPost(Request $request,$slug,$id) {
        $post = Post::where('id',$id)->where('status',1)->first();
        if(empty($post)) {
            abort(404);
        }
        return view('frontend.post',compact('post'));
    }
    public function sponsor(Request $request) {
        return view('frontend.sponsor');
    }



    public function importantDates(Request $request) {
        return view('frontend.importantDates');
    }

    public function forumProgram(Request $request) {
        return view('frontend.forumProgram');
    }

    public function keynoteSpeakers(Request $request) {
        return view('frontend.keynoteSpeakers');
    }
}

