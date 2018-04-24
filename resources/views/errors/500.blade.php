@extends('admin')

@section('content')
    <h1 class="page-title"> 500 Page Option 1
        <small>500 page option 1</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 page-500">
            <div class=" number font-red"> 500 </div>
            <div class=" details">
                <h3>Oops! Có cái gì đó bị sai.</h3>
                <p> Chúng tôi đang cố gắng sửa chữa ngay lập tức. Hãy quay lại sau nhé.
                    <br/> </p>
                <p>
                    <a href="{{ url('/') }}" class="btn red btn-outline">Về trang chủ </a>
                    <br> </p>
            </div>
        </div>
    </div>
@endsection