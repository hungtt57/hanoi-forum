@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Humans impact climate</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div>
                            <h2><br/>
                                <meta charset="utf-8"/>
                            </h2>
                            <b id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Moderator (TBC)</b></h2>

                            <p dir="ltr"><span id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Brief introduction: </span></p>
                            <p dir="ltr"><span id="docs-internal-guid-701c63ca-47ab-4116-da9a-970accbb7902">
                                    In this session, we will distinguish climate change and human impacts on natural and social systems and also discuss the synergistic impacts by climate change and human activities, such as land-use change, natural resource exploitations, greenhouse gas emissions, and environmental pollution.
                                </span></p>


                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->
            @include('frontend.panels')

        </div>

    </main>
@endsection