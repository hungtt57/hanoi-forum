<?php

namespace App\Http\Controllers\Backend;

use App\Mail\SendEmailAbstract;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Mail;
use App\Models\EmailLog;
use DB;
class ParticipantController extends AdminController
{
    public function sendEmail(Request $request, $id)
    {
        $user = User::find($id);
        if (empty($user->abstract)) {
            return redirect()->back()->with('error', 'User do not submit abstract');
        }
        \DB::beginTransaction();
        try {
            Mail::to($user->email)->cc('hanoiforum@vnu.edu.vn')->send(new SendEmailAbstract($user));
            EmailLog::create([
                'to' => $user->email,
                'event' => 'send email abstract',
                'data' => $user->toArray()
            ]);
            $user->send_email_abstract = 1;
            $user->save();
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'Server error.Try again later')->withInput(Input::all());
        }

        return redirect()->back()->with('success', 'Success');
    }

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
            })->addColumn('paper_panel', function ($user) {
                if($user->paper)  {
                    return view('admin.participant.paper_panel', compact('user'))->render();
                }
               return '';
            })

//            ->editColumn('payment_status', function ($user) {
//
////                return User::$paymentText[$post->payment_status];
//                return view('admin.participant.payment', compact('user'))->render();
//            })
            ->addColumn('status_submit', function ($user) {
                $string = 'Not submit abstract yet';
                if ($user->apply == 0) {
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
                $string .=' <div style="max-width: 200px">';
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
                $string.= '</div>';

                return $string;
            })
            ->editColumn('paper', function ($post) {
                if ($post->paper) {
                    $string = '';
                    $files = json_decode($post->paper,true);
                    foreach ($files as $file) {
                        $string.='<a class="btn btn-primary green start" href="' . $file . '"
                               download="' .$file. '"
                               style="float: left;margin-right: 10px;margin-top: 10px">
                                <i class="fa fa-download"></i>
                                <span>Download File</span>
                                <div class="clearfix"></div>
                            </a>';
                    }

                }
                return '';
            })
            ->editColumn('verify', function ($post) {
                $string = '';
                if ($post->verify) {
                    $string = '<a href="javascript:;void(0)" class="btn btn-primary verify" data-id="' . $post->id . '">Active</a>';
                } else {
                    $string = '<a  href="javascript:;void(0)" class="btn btn-danger verify" data-id="' . $post->id . '">InActive</a>';
                }
                return $string;
            })
            ->addColumn('action', function ($post) {
                $urlEdit = route('Backend::participants@edit', ['id' => $post->id]);

                $urlDelete = route('Backend::participants@delete', ['id' => $post->id]);
                $urlSendEmail = route('Backend::participants@sendEmail', ['id' => $post->id]);
                $string = '';
                $string .= '<a  href="' . $urlSendEmail . '" class="btn btn-primary">Send Email</a>';

                $string .= '<a  href="' . $urlEdit . '" class="btn btn-info">Edit</a>';

                $string .= '<a href="#" data-url="'.$urlDelete.'" class="btn btn-danger delete-part">Delete</a>';


                return $string;

            })->make(true);
    }

    public function verify(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        if ($user) {
            if ($user->verify) {
                $user->verify = 0;
                $user->save();
            } else {
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

    public function delete(Request $request,$id)
    {
        $post = User::where('id', $id)->where('type', User::PARTNER)->first();
        if (empty($post)) {
            if($request->ajax()) {
                return response([
                    'status' => 0,
                    'message' => 'Delegate not exist'
                ]);
            }
            return redirect()->back()->with('error', 'Delegate not exist!');
        }
        $post->delete();
        if($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Delegate not exist'
            ]);
        }
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

 public function selectPaperPanel(Request $request)
    {
        $id = $request->input('id');
        $panel = $request->input('panel');
        $user = User::where('id', $id)->where('type', User::PARTNER)->first();
        if (empty($user)) {
            return response([
                'status' => 0,
                'message' => 'Delegate not exist',
                'data' => null
            ], 200);
        }

        $user->paper_panel = $panel;
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
        if (count($keys) == 0) {
            return redirect()->back()->with('error', 'Please choose field to export');
        }
        $user = User::select($keys)->orderBy('updated_at', 'desc');
        if ($request->input('id')) {
            $user = $user->whereIn('id', $request->input('id'));
        }
        if($request->input('start_time')) {
            $time = Carbon::createFromFormat('d/m/Y',$request->input('start_time'));
            $user = $user->where('created_at','>=',$time);
        }
        if($request->input('end_time')) {
            $time = Carbon::createFromFormat('d/m/Y',$request->input('end_time'));
            $user = $user->where('created_at','<=',$time);
        }

        $user = $user->where('type', User::PARTNER)->get()->toArray();

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
                    if ($value['abstract'] and str_contains($value['abstract'], '/files/attachments/')) {
                        $user[$key]['Abstract'] = url($value['abstract']);
                    } else {
                        $user[$key]['Abstract'] = $value['abstract'];
                    }

                    unset($user[$key]['abstract']);
                }
                if (array_key_exists('title_of_paper', $value)) {
                    $user[$key]['Title of paper'] = $value['title_of_paper'];
                    unset($user[$key]['title_of_paper']);
                }
                if (array_key_exists('abstract_panel', $value)) {
                    $user[$key]['Submission to panel'] = isset(User::$panelText[$value['abstract_panel']]) ? User::$panelText[$value['abstract_panel']] : '';
                    unset($user[$key]['abstract_panel']);
                }
                if (array_key_exists('nationality', $value)) {
                    $country = Country::where('iso', $value['nationality'])->first();
                    if ($country) {
                        $user[$key]['Nationality'] = $country->nicename;
                    }


                    unset($user[$key]['nationality']);
                }
                if (array_key_exists('know', $value)) {
                    $knowUser = $value['know'];

                    foreach (User::$knowText as $k => $know) {
                        $user[$key]['Source of info' . $k] = '';

                        if (isset($knowUser[$k])) {
                            $user[$key]['Source of info' . $k] = $know;
                            if ($k == 7) {
                                $user[$key]['Source of info' . $k] = $knowUser[$k]['content'];
                            }
                        }
                    }
                    unset($user[$key]['know']);
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
