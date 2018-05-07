<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends AdminController
{
    public function index()
    {
        return view('admin.participant.index');
    }

    public function datatables(Request $request)
    {
        $contacts = User::select('*')->where('type', User::PARTNER);
        $reviewers = User::select('*')->where('type', User::REVIEWER)->get();
        return \Datatables::eloquent($contacts)
            ->addColumn('reviewer', function ($user) use ($reviewers) {

                return view('admin.participant.reviewer', compact('user', 'reviewers'))->render();
            })
            ->editColumn('payment_status', function ($user) {

//                return User::$paymentText[$post->payment_status];
                return view('admin.participant.payment', compact('user'))->render();
            })
            ->addColumn('status_submit', function ($user) {
                $string = 'Not submit abstract yet';
                if($user->apply == 0) {
                    $string = 'N/A';
                }
                if ($user->abstract and !$user->confirm_abstract) {
                    $string = 'submitted abstract';
                }
                if ($user->reject_abstract) {
                    $string = 'reject abstract';
                }
                if ($user->paper and $user->confirm_paper == 0) {
                    $string = 'submitted paper';
                }
                if ($user->confirm_paper == 1) {
                    $string = 'Finish';
                }
                return $string;
            })
            ->editColumn('link_cv', function ($post) {
                $string = '';
                if ($post->link_cv) {
                    $string .= '<a target="_blank" href="' . $post->link_cv . '">' . $post->link_cv . '</a>';
                }
                if ($post->file) {
                    $string .= '<a class="btn btn-primary green start" href="' . $post->file . '"
                               download="' . $post->file . '"
                               style="float: left;margin-right: 10px;margin-top: 10px">
                                <i class="fa fa-download"></i>
                                <span>Download File</span>
                                <div class="clearfix"></div>
                            </a>';
                }

                return $string;
            })
            ->editColumn('paper', function ($post) {
                if ($post->paper) {
                    return '<a class="btn btn-primary green start" href="' . $post->paper . '"
                               download="' . $post->paper . '"
                               style="float: left;margin-right: 10px;margin-top: 10px">
                                <i class="fa fa-download"></i>
                                <span>Download File</span>
                                <div class="clearfix"></div>
                            </a>';
                }
                return '';
            })
            ->editColumn('verify', function ($post) {
                $string = '';
                    if($post->verify) {
                        $string = '<a href="javascript:;void(0)" class="btn btn-primary verify" data-id="'.$post->id.'">Active</a>';
                    }else {
                        $string = '<a  href="javascript:;void(0)" class="btn btn-danger verify" data-id="'.$post->id.'">InActive</a>';
                    }
                    return $string;
            })
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::participants@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::participants@delete', ['id' => $post->id]);

                $string = '';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';

                $string .= '<a href="' . $urlDelete . '" class="btn btn-danger delete-btn">Delete</a>';


                return $string;

            })->make(true);
    }
    public function verify(Request $request) {
        $id = $request->input('id');
        $user = User::find($id);
        if($user) {
            if($user->verify ) {
                $user->verify = 0;
                $user->save();
            }else {
                $user->verify = 1;
                $user->save();
            }
            return response([
                'status' => 1,
                'message' => 'Success',
                'data' => [
                    'verify' => $user->verify
                ]
            ], 200);
        }
        return response([
            'status' => 0,
            'message' => 'Delegate not exist',
            'data' => null
        ], 200);
    }
    public function delete($id)
    {
        $post = User::where('id', $id)->where('type', User::PARTNER)->first();
        if (empty($post)) {
            return redirect()->back()->with('error', 'Delegate not exist!');
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
                'message' => 'Delegate not exist',
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

    public function selectPayment(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('payment_status');
        $user = User::where('id', $id)->where('type', User::PARTNER)->first();
        if (empty($user)) {
            return response([
                'status' => 0,
                'message' => 'Delegate not exist',
                'data' => null
            ], 200);
        }
        $user->payment_status = $status;
        $user->save();
        return response([
            'status' => 1,
            'message' => 'Success',
            'data' => null
        ], 200);
    }

    public function editProfile(Request $request, $id)
    {
        $user = User::find($id);
        return view('admin.participant.editProfile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
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

            if ($request->file('file')) {
                $data['file'] = $this->saveFile($request->file('file'));
            }
            $userId = $id;
            $user = User::find($userId);
            if ($user->type != User::PARTNER) {
                return redirect()->back()->with('error', 'You can only edit delegate')->withInput(Input::all());
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

    public function export(Request $request)
    {
        $data = $request->all();
        $model = new User();

        $data = array_only($request->all(), $model->getFillable());
        $keys = array_keys($data);

        $user = User::select($keys)->where('type', User::PARTNER)->get()->toArray();
        if (count($user)) {
            foreach ($user as $key => $value) {
                if (array_key_exists('gender', $value)) {
                    $user[$key]['Gender'] = ($value['gender'] == User::FEMALE) ? 'female' : 'male';
                    unset($user[$key]['gender']);
                }
                if (array_key_exists('paper', $value)) {
                    $user[$key]['Paper'] = ($value['paper']) ? url($value['paper']) : '';
                    unset($user[$key]['paper']);
                }
                if (array_key_exists('first_name', $value)) {
                    $user[$key]['First name'] = $value['first_name'];
                    unset($user[$key]['first_name']);
                }
                if (array_key_exists('last_name', $value)) {
                    $user[$key]['Last name'] = $value['last_name'];
                    unset($user[$key]['last_name']);
                }
                if (array_key_exists('title', $value)) {
                    $user[$key]['Title'] = $value['title'];
                    unset($user[$key]['title']);
                }
                if (array_key_exists('affiliation', $value)) {
                    $user[$key]['Affiliation'] = $value['affiliation'];
                    unset($user[$key]['affiliation']);
                }
                if (array_key_exists('email', $value)) {
                    $user[$key]['Email'] = $value['email'];
                    unset($user[$key]['email']);
                }
                if (array_key_exists('abstract', $value)) {

                    $user[$key]['Abstract'] = $value['abstract'];
                    unset($user[$key]['abstract']);
                }
                if (array_key_exists('title_of_paper', $value)) {
                    $user[$key]['Title of paper'] = $value['title_of_paper'];
                    unset($user[$key]['title_of_paper']);
                }
            }
        }
        Excel::create('list-delegates-' . Carbon::now()->toDateString(), function ($excel) use ($user) {

            $excel->sheet('sheet', function ($sheet) use ($user) {

                $sheet->fromArray($user);

            });

        })->download('xls');
        return redirect(route('Backend::participants@index'))->with('success', 'Export Success');
    }
}
