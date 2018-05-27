@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title"> Science, technology and education for climate change response and sustainability </h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="content-page">
                            <meta charset="utf-8" />
                            <b id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Moderator (TBC)</b></h2>

                            <p dir="ltr"><b id="docs-internal-guid-701c63ca-47a6-b698-73a5-58d58dc4b616">Brief introduction: </b></p>
                            <p dir="ltr"><span id="docs-internal-guid-701c63ca-47bc-4b7c-25ee-80977d6a2b30">
                  In this session, we will look at the relationship between education and training and the mission of response to climate change. In order to increase the effectiveness of climate change response in the long-term, it is essential to educate the public and next generations about this phenomenon. This raises the question of what and how climate change can be integrated into the current curriculum from the early stages to higher levels of education. Equally important, it is desired that higher education can well equip students with knowledge and skills to be able to apply science, technological progress and advancement to solve local, community-based problems.
On the other hand, in the context of increased climate change and as our natural resources are being depleted, we need to develop more climate change mitigration and sustainable development technologies such as: carbon dioxide sequenstration, solar shades, low carbon and other green technology.
 </span></p>

                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->
            @include('frontend.panels')

        </div>

    </main>
@endsection