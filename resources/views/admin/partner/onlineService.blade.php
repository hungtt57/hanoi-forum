@extends('admin.layouts.master')

@section('style')

    <style>
        .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }
        .bold {
            font-weight: 700;
        }
        .col-lg-6 {
            padding-left: 0px;
        }

        .title-register {
            background: #007f49;
            padding: 5px;
            text-align: center;
            color: white;
        }

        .file-input-new .btn-primary.btn-file {
            background-color: #007f49;
        }

        .presentation input {
            position: inherit !important;
            margin-left: 10px !important;
        }

        .presentation .radio-inline {
            padding-left: 0px !important;
        }

        .programBook .radio-inline,
        .attendingForum .radio-inline,
        .presentationForum .radio-inline {
            margin-top: -3px !important;
            padding-top: 0px;
        }

        .table-participant {

        }
    </style>
    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <h3>Online service form </h3>

    @include('admin.flash_message')
    <form action="{{url('admin/partner/edit')}}" class="form-horizontal" method="POST"
          enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-body">
                    {{ csrf_field() }}

                    <div class="form-group">

                        <div class="col-md-12 attendingForum">
                            Will you be attending the forum?
                            <label class="radio-inline"><input type="radio" name="attendingForum" value="1"
                                                               @if(old('attendingForum',@$form->attendingForum) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="attendingForum" value="0"
                                                               @if(old('attendingForum',@$form->attendingForum) == 0) checked @endif>No</label>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12 presentationForum">
                            Will you have a presentation at the forum?
                            <label class="radio-inline"><input type="radio" name="presentationForum" value="1"
                                                               @if(old('presentationForum',@$form->presentationForum) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="presentationForum" value="0"
                                                               @if(old('presentationForum',@$form->presentationForum) == 0) checked @endif>No</label>
                        </div>
                    </div>

                    <div class="form-group presentation">
                        <div class="col-md-9">
                            <label class="radio-inline">It is an oral presentation <input type="radio"
                                                                                          name="presentation" value="1"
                                                                                          @if(old('presentation',@$form->presentation) == 1) checked @endif></label>
                            <label class="radio-inline"> or a poster presentation <input type="radio"
                                                                                         name="presentation" value="0"
                                                                                         @if(old('presentation',@$form->presentation) == 0) checked @endif></label>
                        </div>
                    </div>

                    <div class="form-group programBook">
                        <div class="col-md-12">
                            Do you and your co-author(s) (if any) accept the abstract of your presentation
                            to be included in the forum’s program book?
                            <label class="radio-inline"><input type="radio" name="programBook" value="1"
                                                               @if(old('programBook',@$form->programBook) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="programBook" value="0"
                                                               @if(old('programBook',@$form->programBook) == 0) checked @endif>No</label>
                        </div>
                    </div>

                    <h4 class="page-title title-register">PERSONAL INFORMATION</h4>
                    {{--<p>Full name (as appears on passport)</p>--}}
                    <div class="form-group">
                        <label class=" col-md-3 ">First name*</label>
                        <div class="col-md-6">
                            <input type="text" name="first_name" tabindex="2"
                                   class="form-control"
                                   value="{{old('first_name',@$form->first_name)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Sur name*</label>
                        <div class="col-md-6">
                            <input type="text" name="last_name" tabindex="2"
                                   class="form-control"
                                   value="{{old('last_name',@$form->last_name)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Gender</label>
                        <div class="col-md-6">
                            <label class="radio-inline"><input type="radio" name="gender" value="2"
                                                               @if(old('gender',@$form->gender) == 2) checked @endif>Male</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="1"
                                                               @if(old('gender',@$form->gender) == 1) checked @endif>Female</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="0"
                                                               @if(@$form->gender == 0) checked @endif>Not specify</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Date of Birth (dd/mm/yy)</label>
                        <div class="col-md-6">
                            <input type="text" name="birthday"
                                   class="form-control datepicker"
                                   value="{{old('birthday',@$form->birthday)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Title and/or Academic title</label>
                        <div class="col-md-6">
                            <input type="text" name="title"
                                   class="form-control"
                                   value="{{old('title',@$form->title)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Position</label>
                        <div class="col-md-6">
                            <input type="text" name="position"
                                   class="form-control"
                                   value="{{old('position',@$form->position)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Institution (s)</label>
                        <div class="col-md-6">
                            <input type="text" name="institution"
                                   class="form-control"
                                   value="{{old('institution',@$form->institution)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Office/Home phone</label>
                        <div class="col-md-6">
                            <input type="text" name="home_phone"
                                   class="form-control"
                                   value="{{old('home_phone',@$form->home_phone)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Mobile phone</label>
                        <div class="col-md-6">
                            <input type="text" name="mobile_phone"
                                   class="form-control"
                                   value="{{old('mobile_phone',@$form->mobile_phone)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Nationality</label>
                        <div class="col-md-6">
                            @php $nations = \App\Models\Country::orderBy('nicename','desc')->get(); @endphp
                            <select class="form-control select2" name="nationality" id="nationality">
                                @foreach($nations as $nation)
                                    <option value="{{$nation->iso}}"
                                            @if($nation->iso === @$form->nationality) selected @endif>{{$nation->nicename}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Passport number</label>
                        <div class="col-md-6">
                            <input type="text" name="passport_number"
                                   class="form-control"
                                   value="{{old('passport_number',@$form->passport_number)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Issue date (dd/mm/yy)</label>
                        <div class="col-md-6">
                            <input type="text" name="issue_date "  autocomplete="off"
                                   class="form-control datepicker"
                                   value="{{old('issue_date',@$form->issue_date)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Expire date (dd/mm/yy)</label>
                        <div class="col-md-6">
                            <input type="text" name="expire_date"
                                   class="form-control datepicker" autocomplete="off"
                                   value="{{old('expire_date',@$form->expire_date)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Postal address</label>
                        <div class="col-md-10">
                            <div class="col-md-6">
                                Address 1: <input type="text" name="address1"
                                                     class="form-control"
                                                     value="{{old('address1',@$form->address1)}}">
                            </div>
                            <div class="col-md-6">
                                Dept./Floor: <input type="text" name="floor"
                                                     class="form-control"
                                                     value="{{old('floor',@$form->floor)}}">
                            </div>
                            <div class="col-md-12">
                                Address 2: <input type="text" name="address1"
                                                     class="form-control"
                                                     value="{{old('address2',@$form->address2)}}">
                            </div>
                            <div class="col-md-6">
                                City: <input type="text" name="city"
                                                  class="form-control"
                                                  value="{{old('city',@$form->city)}}">
                            </div>
                            <div class="col-md-6">
                                State/Province: <input type="text" name="state"
                                                  class="form-control"
                                                  value="{{old('state',@$form->state)}}">
                            </div>
                            <div class="col-md-6">
                                Country: <input type="text" name="country"
                                                  class="form-control"
                                                  value="{{old('country',@$form->country)}}">
                            </div>
                            <div class="col-md-6">
                                Postal Code: <input type="text" name="postal_code"
                                                  class="form-control"
                                                  value="{{old('postal_code',@$form->postal_code)}}">
                            </div>
                        </div>

                    </div>

                    <h4 class="page-title title-register">TRAVEL INFORMATION</h4>
                    <h4 class="bold">FLIGHTS</h4>
                    <h4 class="bold">FOR PARTICIPANTS WHOSE AIR TICKETS ARE COVERED BY HANOI FORUM</h4>
                    <p>Please be advised that we will suggest and book the flights upon your expected dates below</p>
                    <div class="form-group">

                            <label for="" class="col-md-3">  Your expected date of arrival: </label>
                            <div class="col-md-6">
                                <input type="text"  class="form-control datepicker" autocomplete="off" value="{{old('date_of_arrival',@$form->date_of_arrival)}}" name="date_of_arrival">
                            </div>


                    </div>
                    <div class="form-group">
                            <label for="" class="col-md-3">  Your expected date of departure: </label>
                            <div class="col-md-6">
                                <input type="text"  class="form-control datepicker"  autocomplete="off" name="date_of_departure"  value="{{old('date_of_departure',@$form->date_of_departure)}}" >
                            </div>

                    </div>
                    <h4 class="">FOR OTHER PARTICIPANTS</h4>
                    <p>Please be advised that you will need to book and pay for your own air ticket. Please facilitate our airport transfer arrangement by providing us with your flight details.</p>
                    <div class="form-group" style="margin-bottom: 0px !important;">
                        <div class="col-md-2"></div>
                        <label class="col-md-5">Arrival</label>
                        <label class="col-md-5">Departure</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Date</label>
                        <div class="col-md-5"><input type="text"  class="form-control datepicker"  autocomplete="off"  name="other_date_of_arrival"  value="{{old('other_date_of_arrival',@$form->other_date_of_arrival)}}" ></div>
                        <div class="col-md-5"><input type="text"  class="form-control datepicker"  autocomplete="off"  name="other_date_of_departure"  value="{{old('other_date_of_departure',@$form->other_date_of_departure)}}" ></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Time</label>
                        <div class="col-md-5"><input type="text"  class="form-control" name="other_time_of_arrival"  value="{{old('other_time_of_arrival',@$form->other_time_of_arrival)}}" ></div>
                        <div class="col-md-5"><input type="text"  class="form-control" name="other_time_of_departure"  value="{{old('other_time_of_departure',@$form->other_time_of_departure)}}" ></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Flight number</label>
                        <div class="col-md-5"><input type="text"  class="form-control" name="other_flight_number_arrival"  value="{{old('other_flight_number_arrival',@$form->other_flight_number_arrival)}}" ></div>
                        <div class="col-md-5"><input type="text"  class="form-control" name="other_flight_number_departure"  value="{{old('other_flight_number_departure',@$form->other_flight_number_departure)}}" ></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Name of the airport</label>
                        <div class="col-md-5"><input type="text"  class="form-control" name="other_name_airport_arrival"  value="{{old('other_name_airport_arrival',@$form->other_name_airport_arrival)}}" >
                        (where you will depart)</div>
                        <div class="col-md-5"><input type="text"  class="form-control" name="other_name_airport_departure"  value="{{old('other_name_airport_departure',@$form->other_name_airport_departure)}}" >
                            (where you will arrive)</div>
                    </div>


                    <h4 class="page-title title-register">Accommodation & Meals</h4>
                    <h4 class=""><b>FOR PARTICIPANTS WHOSE ACCOMMODATION ARE PROVIDED BY HANOI FORUM.</b> Hanoi Forum will be pleased to cover expenses for 3 nights (8, 9 and 10 November 2018) at <b>JW Marriott Hotel Hanoi </b>(No.8 Do Duc Duc street, Nam Tu Liem district, Hanoi)</h4>

                    <div class="form-group">

                        <label class="control-label col-md-3" style="text-align: left">Your special request on accommodation:</label>
                        <div class="controls col-md-6">
                            @foreach(\App\Models\User::$room as $key => $value)
                                @if($key != 4)
                                    <p>
                                        <label class="radio-inline">
                                            <input type="radio" name="room" value="{{$key}}"
                                                   @if(old('room',@$form->room) == $key) checked
                                                    @endif
                                            > {{$value}}
                                        </label>
                                    </p>
                                @endif

                            @endforeach

                        </div>
                    </div>


                    <div class="form-group">

                        <label class="control-label col-md-3" style="text-align: left">Your special request on meals</label>
                        <div class="controls col-md-6">
                            @foreach(\App\Models\User::$indicateText as $key => $value)
                                @if($key != 4)
                                    <p>
                                        <label class="radio-inline" style="padding-left: 0px">
                                            <input type="checkbox"

                                                   @if(old('indicate.'.$key.'.id') == $key and old('indicate.'.$key.'.id') != null) checked
                                                   @else
                                                   @if(isset($form))
                                                   @if(is_array($form->indicate) and isset($form->indicate[$key])) checked
                                                   @endif

                                                   @endif
                                                   @endif
                                                   name="indicate[{{$key}}][id]" value="{{$key}}"

                                            > {{$value}}
                                        </label>
                                    </p>
                                @endif
                                @if($key == 4)
                                    <p>
                                        <label class="radio-inline" style="width: 100%;padding-left: 0px">
                                            <input type="checkbox"
                                                   @if(old('indicate.'.$key.'.id') == $key and old('indicate.'.$key.'.id') != null) checked
                                                   @else
                                                   @if(isset($form))
                                                   @if(is_array($form->indicate) and isset($form->indicate[$key])) checked
                                                   @endif
                                                   @endif

                                                   @endif

                                                   name="indicate[{{$key}}][id]" value="{{$key}}"
                                            >
                                            Others (Please specify) : <input type="text"
                                                                             @if(isset($form))
                                                                             @if(is_array($user->indicate) && isset($user->indicate[$key]))  value="{{old('indicate.'.$key.'.content',$user->indicate[$key]['content'])}}"  @endif
                                                                             @else
                                                                             value="{{old('indicate.'.$key.'.content]')}}"
                                                                             @endif

                                                                             name="indicate[{{$key}}][content]">
                                        </label>
                                    </p>

                                @endif
                            @endforeach

                        </div>

                    </div>

                    {{--//---------------}}
                    <h4 class="page-title title-register">Visa issue</h4>
                    <p>Please refer to the link below to see whether you are exempted from visa to Vietnam
                        <a href="https://lanhsuvietnam.gov.vn/Lists/BaiViet/B%C3%A0i%20vi%E1%BA%BFt/DispForm.aspx?List=dc7c7d75-6a32-4215-afeb-47d4bee70eee&ID=306">https://lanhsuvietnam.gov.vn/Lists/BaiViet/B%C3%A0i%20vi%E1%BA%BFt/DispForm.aspx?List=dc7c7d75-6a32-4215-afeb-47d4bee70eee&ID=306</a>
                    </p>
                    <div class="form-group">

                        <div class="col-md-12 attendingForum">
                            Do you need our help to obtain visa?
                            <label class="radio-inline"><input type="radio" name="obtain_visa" value="1"
                                                               @if(old('obtain_visa',@$form->obtain_visa) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="obtain_visa" value="0"
                                                               @if(old('obtain_visa',@$form->obtain_visa) == 0) checked @endif>No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 attendingForum">
                            If yes, where do you want to get your visa?
                            <label class="radio-inline"><input type="radio" name="where_visa" value="1"
                                                               @if(old('where_visa',@$form->where_visa) == 1) checked @endif>At Vietnamese Embassy/Consulate in your home country </label>
                            <label class="radio-inline"><input type="radio" name="where_visa" value="0"
                                                               @if(old('where_visa',@$form->where_visa) == 0) checked @endif>At Noi Bai airport (visa upon arrival) </label>
                        </div>
                    </div>
                    {{-------}}
                    <h4 class="page-title title-register">Other information</h4>
                    <div class="form-group">
                        <div class="col-md-12 attendingForum">
                            Will you be joining Hanoi half-day city tour (Morning of 9 November 2018)?
                            <label class="radio-inline"><input type="radio" name="join_hanoi" value="1"
                                                               @if(old('join_hanoi',@$form->join_hanoi) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="join_hanoi" value="0"
                                                               @if(old('join_hanoi',@$form->join_hanoi) == 0) checked @endif>No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 attendingForum">
                            Will you be accompanying with another person?
                            <label class="radio-inline"><input type="radio" name="accompanying_other" value="1"
                                                               @if(old('accompanying_other',@$form->accompanying_other) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="accompanying_other" value="0"
                                                               @if(old('accompanying_other',@$form->accompanying_other) == 0) checked @endif>No</label>
                        </div>
                        If yes, please provide the information in the page below.
                    </div>
                    <h4 class="page-title title-register">FOR ACCOMPANYING PERSON(S)</h4>
                    <p>Please be advised that the accompanying person will be responsible for all his/her own expenses</p>


                    <div class="form-group">
                        <label class=" col-md-3 ">First name*</label>
                        <div class="col-md-6">
                            <input type="text" name="accom_first_name"
                                   class="form-control"
                                   value="{{old('accom_first_name',@$form->accom_first_name)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Sur name*</label>
                        <div class="col-md-6">
                            <input type="text" name="accom_last_name"
                                   class="form-control"
                                   value="{{old('accom_last_name',@$form->accom_last_name)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Gender</label>
                        <div class="col-md-6">
                            <label class="radio-inline"><input type="radio" name="accom_gender" value="2"
                                                               @if(old('accom_gender',@$form->accom_gender) == 2) checked @endif>Male</label>
                            <label class="radio-inline"><input type="radio" name="accom_gender" value="1"
                                                               @if(old('accom_gender',@$form->accom_gender) == 1) checked @endif>Female</label>
                            <label class="radio-inline"><input type="radio" name="accom_gender" value="0"
                                                               @if(@$form->accom_gender == 0) checked @endif>Not specify</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Date of Birth (dd/mm/yy)</label>
                        <div class="col-md-6">
                            <input type="text" name="accom_birthday"
                                   class="form-control  datepicker"  autocomplete="off"
                                   value="{{old('accom_birthday',@$form->accom_birthday)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Nationality</label>
                        <div class="col-md-6">
                            @php $nations = \App\Models\Country::orderBy('nicename','desc')->get(); @endphp
                            <select class="form-control select2" name="accom_nationality">
                                @foreach($nations as $nation)
                                    <option value="{{$nation->iso}}"
                                            @if($nation->iso === @$form->accom_nationality) selected @endif>{{$nation->nicename}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Passport number</label>
                        <div class="col-md-6">
                            <input type="text" name="accom_passport_number"
                                   class="form-control"
                                   value="{{old('accom_passport_number',@$form->accom_passport_number)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Issue date (dd/mm/yy)</label>
                        <div class="col-md-6">
                            <input type="text" name="accom_issue_date"
                                   class="form-control datepicker"  autocomplete="off"
                                   value="{{old('accom_issue_date',@$form->accom_issue_date)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-md-3 ">Expire date (dd/mm/yy)</label>
                        <div class="col-md-6">
                            <input type="text" name="accom_expire_date"
                                   class="form-control datepicker"  autocomplete="off"
                                   value="{{old('accom_expire_date',@$form->accom_expire_date)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 attendingForum">
                            Do you also attend Hanoi Forum 2018?
                            <label class="radio-inline"><input type="radio" name="accompanying_attend" value="1"
                                                               @if(old('accompanying_attend',@$form->accompanying_attend) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="accompanying_attend" value="0"
                                                               @if(old('accompanying_attend',@$form->accompanying_attend) == 0) checked @endif>No</label>
                        </div>
                    </div>
                    <p>If yes, please clarify which sessions you will be attending (Please tick all available)</p>
                    <div class="form-group">
                        <div class="col-md-12">
                            Opening ceremony & Welcome Address (9 Nov) <input type="checkbox" name="event_1" value="1"
                                                                              @if(old('event_1',@$form->event_1) == 1) checked @endif>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            Keynote speeches (9 Nov)    <input type="checkbox" name="event_2" value="1"
                                                                              @if(old('event_2',@$form->event_2) == 1) checked @endif>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            Panel 1 (10 Nov)   <input type="checkbox" name="panel_1" value="1"
                                                               @if(old('panel_1',@$form->panel_1) == 1) checked @endif>
                        </div>
                        <div class="col-md-4">
                            Panel 2 (10 Nov)   <input type="checkbox" name="panel_2" value="1"
                                                               @if(old('panel_2',@$form->panel_2) == 1) checked @endif>
                        </div>
                        <div class="col-md-4">
                            Panel 3 (10 Nov)   <input type="checkbox" name="panel_3" value="1"
                                                               @if(old('panel_3',@$form->panel_3) == 1) checked @endif>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            Panel 4 (10 Nov)   <input type="checkbox" name="panel_4" value="1"
                                                      @if(old('panel_4',@$form->panel_4) == 1) checked @endif>
                        </div>
                        <div class="col-md-4">
                            Panel 5 (10 Nov)   <input type="checkbox" name="panel_4" value="1"
                                                      @if(old('panel_4',@$form->panel_4) == 1) checked @endif>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            Policy Dialogues and Closing ceremony (10 Nov) <input type="checkbox" name="event_3" value="1"
                                                               @if(old('event_3',@$form->event_3) == 1) checked @endif>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12 attendingForum">
                            Do you need our help to obtain visa?
                            <label class="radio-inline"><input type="radio" name="accom_obtain_visa" value="1"
                                                               @if(old('accom_obtain_visa',@$form->accom_obtain_visa) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="accom_obtain_visa" value="0"
                                                               @if(old('accom_obtain_visa',@$form->accom_obtain_visa) == 0) checked @endif>No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 attendingForum">
                            If yes, where do you want to get your visa?
                            <label class="radio-inline"><input type="radio" name="accom_where_visa" value="1"
                                                               @if(old('accom_where_visa',@$form->accom_where_visa) == 1) checked @endif>At Vietnamese Embassy/Consulate in your home country </label>
                            <label class="radio-inline"><input type="radio" name="accom_where_visa" value="0"
                                                               @if(old('accom_where_visa',@$form->accom_where_visa) == 0) checked @endif>At Noi Bai airport (visa upon arrival) </label>
                        </div>
                    </div>
                    <p style="color:red">Please attach your photo and a copy of your passports. Please also attach a photo of and a copy of the accompanying person(s).</p>
                </div>

            </div>
        </div>
        </div>

        <div class="form-actions">
            <div class="row" style="text-align: center">


                {{--<button type="button" class="btn default">Reset</button>--}}

            </div>
        </div>
    </form>




@endsection
@push('scripts')
    <script src="/assets/js/fileinput.min.js"></script>

    <script type="application/javascript">
      $(function () {
        //Date picker
        $('.datepicker').datepicker({
          autoclose: true,
          format: 'dd/mm/yyyy'
        })

//        $('input[name="apply"]').change(function () {
//          var value = $(this).val();
//
//          if (value == 1) {
//            $('.applyContainer').removeClass('hide');
//          } else {
//            $('.applyContainer').addClass('hide');
//          }
//        });
        $('input[name=need_support]').change(function () {
          var value = $(this).val();
//
          if (value == 1) {
            $('#kindSupport').removeClass('hide');
          } else {
            $('#kindSupport').addClass('hide');
          }
        });
        $("#file").fileinput({
          'showUpload': false,
          'showRemove': false,
          'previewFileType': 'any',
          'showCaption': false,
          'showUploadedThumbs': false,
        });
        $("#image").fileinput({
            @if(isset($user) and $user->image)
            'initialPreview': [
              '<img src="{{ $user->image }}" class="kv-preview-data file-preview-image" style="width:auto;height:160px;">'
            ],
            @endif
            'showUpload': false,
          'showRemove': false,
          'previewFileType': 'any',
          'showCaption': false,
          'showUploadedThumbs': false,
          'allowedFileTypes': ['image']
        });

      });
    </script>


@endpush