<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use Hash;
use App\Models\Document;

class ReviewerController extends AdminController
{
    public function index()
    {
        return view('admin.reviewer.index');
    }

    public function create()
    {
        return view('admin.reviewer.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'email.required' => 'Please enter email',

        ]);

        $data = $request->all();
        $data['name'] = '';
        $data['type'] = User::REVIEWER;
        $data['password'] = Hash::make($data['password']);
        $post = User::create($data);

        return redirect()->back()->with('success', 'Success');
    }

    public function datatables(Request $request)
    {
        $posts = User::select('*')->where('type', User::REVIEWER);
        return \Datatables::eloquent($posts)
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::reviewer@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::reviewer@delete', ['id' => $post->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';


                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }

    public function delete($id)
    {
        $post = User::where('id', $id)->where('type', User::REVIEWER)->first();
        if (empty($post)) {
            return redirect()->back()->with('error', 'Reviewer not exist!');
        }
        $post->delete();
        return redirect()->back()->with('success', 'Success');
    }

    public function edit($id)
    {
        $reviewer = User::findOrFail($id);
        return view('admin.reviewer.create', compact('reviewer'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'confirmed',

        ], [
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',

        ]);
        $data = $request->all();
        $post = User::findOrFail($id);
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $post->password;
        }
        $post->update($data);
        return redirect()->back()->with('success', 'Success');
    }


    public function reviewParticipants(Request $request)
    {
        return view('admin.review_partner.index');
    }

    public function reviewParticipantsDatatables(Request $request)
    {
        $user = auth('backend')->user();
        $contacts = User::select('*')->where('type', User::PARTNER)->where('reviewer_id', $user->id);
        return \Datatables::eloquent($contacts)
            ->addColumn('action', function ($post) {

                $urlDelete = route('Backend::reviewParticipants@review', ['id' => $post->id]);

                $string = '';
                if ($post->abstract and !$post->confirm_abstract) {
                    $string .= '<a href="' . $urlDelete . '" class="btn btn-primary">Review abstract</a>';
                    return $string;
                }
                if ($post->paper and $post->confirm_paper == 0) {
                    $string .= '<a href="' . $urlDelete . '" class="btn btn-primary">Review paper</a>';
                    return $string;
                }

                return $string;

            })->make(true);
    }

    public function review(Request $request, $id)
    {
        $user = auth('backend')->user();
        $participant = User::select('*')->where('type', User::PARTNER)->where('reviewer_id', $user->id)->where('id', $id)->first();
        return view('admin.review_partner.review', compact('participant'));
    }


    //confirm
    public function confirm(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);
        $id = $request->input('id');
        $user = User::find($id);
        if (!$user->confirm_abstract) {
            $user->comment_abstract = $request->input('comment');
            $user->confirm_abstract = 1;
            $user->save();
            $userLogin = auth('backend')->user();
            $sub = $request->input('sub');
//            $document = Document::firstOrCreate(['user_id' => $user->id]);
            Document::create([
                'user_id' => $user->id,
                'subcommittee_id' => $sub,
                'reviewer_id' => $userLogin->id,
                'abstract' => $user->abstract,
                'title_of_paper' => $user->title_of_paper
            ]);
            return redirect('admin/review-participants')->with('success', 'Review success');
        }
        if ($user->confirm_abstract and !$user->confirm_paper) {
            $user->comment_paper = $request->input('comment');
            $user->confirm_paper = 1;
            $user->save();
            $userLogin = auth('backend')->user();
            $sub = $request->input('sub');
            Document::create([
                'user_id' => $user->id,
                'subcommittee_id' => $sub,
                'reviewer_id' => $userLogin->id,
                'paper' => $user->paper,
            ]);
            return redirect('admin/review-participants')->with('success', 'Review success');
        }
        return redirect('admin/review-participants')->with('success', 'Review success');
    }

    public function reject(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);
        $id = $request->input('id');
        $user = User::find($id);
        if (!$user->confirm_abstract) {
            $user->reject_abstract = $request->input('reject_reason');
            $user->save();
        }
        if ($user->confirm_abstract and !$user->confirm_paper) {
            $user->reject_paper = $request->input('reject_reason');
            $user->save();
        }
        return redirect('admin/review-participants')->with('success', 'Reject success');
    }
}
