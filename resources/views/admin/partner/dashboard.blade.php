@extends('admin.layouts.master')

@section('style')

    <style>
        .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }

        .col-lg-6 {
            padding-left: 0px;
        }

    </style>
    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="row">
        @if (session()->has('welcome'))
            <div class="alert alert-success">
                <p>Welcome! This is your personal account on Hanoi Forum website. You can use the navigation panel on your left-hand side to, among others, manage your profile, submit your abstract, and get connected with other delegates.</p>

                <p>    Should you have any question, you may want to read our <a href="{{url('faq')}}">FAQs</a>  or contact us
                    <a href="{{url('contact-us')}}">here</a>.</p>

                <p>    Thank you for your interest in Hanoi Forum!</p>
            </div>
        @endif

        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    @if($user->image)
                        <img class="profile-user-img img-responsive img-circle" src="{{$user->image}}"
                             alt="User profile picture">
                    @else
                        <img class="profile-user-img img-responsive img-circle" src="{{url('backend/no_image.png')}}"
                             alt="User profile picture">
                    @endif
                    <h3 class="profile-username text-center">{{ucfirst($user->title)}}
                        . {{ucfirst ($user->last_name)}}</h3>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body ">
                    {{--<p class="text-black">Payment status: {{\App\Models\User::$paymentText[$user->payment_status]}}</p>--}}
                    @if(!$user->abstract)
                        <p class="text-black">Submission status: You have not yet submitted an abstract. </p>
                        @else
                        <p class="text-black">Submission status: You have submitted an abstract. Notification of the result will be announced by July 15, 2018. </p>
                    @endif
                    @if($user->reject_abstract)
                        <p class="text-red">{{$user->reject_abstract}}</p>
                    @endif
                    @if($user->comment_abstract)
                        <p class="text-aqua">{{$user->comment_abstract}}</p>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>

        </div>
        <!-- /.col -->
    </div>

@endsection
@push('scripts')
    <script src="/assets/js/fileinput.min.js"></script>

    <script type="application/javascript">
      $(function () {
        $('input[name="apply"]').change(function () {
          var value = $(this).val();

          if (value == 1) {
            $('.applyContainer').removeClass('hide');
          } else {
            $('.applyContainer').addClass('hide');
          }
        });
        $("#file").fileinput({
          'showUpload': false,
          'showRemove': false,
          'previewFileType': 'any',
          'showCaption': false,
          'showUploadedThumbs': false,
        });

      });
    </script>


@endpush