@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Climate change evidence and security</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="content-page">
                            <h2><br />
                                <meta charset="utf-8" />
                                <b id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Moderator (TBC)</b></h2>

                            <p dir="ltr"><b id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Brief introduction: </b></p>

                            <p dir="ltr"><span id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">In this session, we will discuss concrete evidence on the impacts of climate change on ecosystems: mountainous ecosystems, riverine ecosystems, coastal ecosystems, marine ecosystems, and the impacts on human society in different aspects such as water supply, water resource security, energy sustainability, environment sustainability, ecosystem sustainability and government fragility. Also, we will look at various topics on climate measurement processes: methodologies and technologies of climate measurement processes, paleoclimatology, climate change assessment, environmental change, sea level change, floods, drought, forest fires, hurricanes, other climate extremes and disasters, climate change impact and vulnerability, climate change resilience.</span></p>

                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->
            @include('frontend.panels')

        </div>

    </main>
@endsection