@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Climate change response</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div>

                            <meta charset="utf-8" />
                            <b id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Moderator (TBC)</b></h2>

                            <p dir="ltr"><span id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Brief introduction: </span></p>
                                <span id="docs-internal-guid-701c63ca-47b4-fc6c-969a-fbbff7ba725b">In this session, we will focus on climate change response, adaptation, mitigation for fields and areas/regions, building climate resilient economic, disaster and climate-resilient communities, cities, and developing livelihood, infrastructure towards sustainable development. We even go further to understanding deeper nature and ecosystem-based climate change response and to exploring into technology such as models of low- carbon to transform climate change challenges into opportunities to develop a more resilient, ecosystem-based development.</span>

                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->
            @include('frontend.panels')
        </div>

    </main>
@endsection