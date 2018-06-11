@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Important Dates</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Important Dates</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="content-page">
                        <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                            <div class="col-md-12">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <td style="width:321px;">
                                            <p>Deadline for abstracts:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
                                        </td>
                                        <td style="width:255px;">
                                            <p>30 June 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:321px;">
                                            <p>Notification of abstract review results:</p>
                                        </td>
                                        <td style="width:255px;">
                                            <p>15 July 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:321px;">
                                            <p>Deadline for full papers:</p>
                                        </td>
                                        <td style="width:255px;">
                                            <p>15 September 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:321px;">
                                            <p>Forum dates:</p>
                                        </td>
                                        <td style="width:255px;">
                                            <p>8 - 10 November 2018</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection