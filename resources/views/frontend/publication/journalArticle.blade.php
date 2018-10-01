@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/2.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header-classic page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Journal Articles</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <section class="section-journal-papers">
            <div class="container">
                <nav class="journal-papers-nav">
                    <div class="nav-meta">
                        <p><strong>Disclaimer:</strong> The papers below are intended for private viewing by the page owner or those who otherwise have legitimate access to them. No part of it may in any form or by any electronic, mechanical, photocopying, recording, or any other means be reproduced, stored in a retrieval system or be broadcast or transmitted without the prior permission of the respective publishers. If your organization has a valid subscription of the journals, click on the DOI link for the legitimate copy of the papers.</p>
                    </div>
                    <ul class="journal-papers-nav-list list-inline">
                        <li><a href="#" id="2017link" class="link-prev_def">2017-2016</a></li>
                        <li><a href="#" id="2015link" class="link-prev_def">2015-2014</a></li>
                        {{--<li><a href="#" class="link-prev_def">2013-2012</a></li>--}}

                    </ul>
                </nav><!--  /.journal-papers-nav -->
                <div class="journal-papers-mound-wrap" >
                    <div class="journal-papers-mound" id="2017">
                        <nav class="journal-papers-mound-nav">
                            <h3 class="nav-title">2017</h3>
                        </nav>
                        <div class="journal-papers-list">
                            <div class="journal-papers">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="jp-name">van der Linden, R., A. H. Fink, J.G. Pinto, and T. Phan-Van</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="journal-papers-meta">
                                            <p>The Dynamics of an Extreme Precipitation Event in Northeastern Vietnam in 2015 and Its Predictability in the ECMWF Ensemble Prediction System. <i>Wea. Forecasting,</i> <b>32</b>,  1041–1056</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="journal-papers-doi"> <a href="https://doi.org/10.1175/WAF-D-16-0142.1" target="_blank">https://doi.org/10.1175/WAF-D-16-0142.1</a></div>
                                    </div>
                                </div>
                            </div><!-- /.journal-papers -->

                        </div>
                    </div>
                    <div class="journal-papers-mound" id="2015">
                        <nav class="journal-papers-mound-nav">
                            <h3 class="nav-title">2015</h3>
                        </nav>
                        <div class="journal-papers-list">
                            <div class="journal-papers">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="jp-name">Smajgl, A., Toan, T.Q., Nhan, D.K., Ward, J., Trung, N.H. , Tri, L.Q., Tri, V.P.D., Vu, P.T.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="journal-papers-meta">
                                            <p>Responding to rising sea-levels in Vietnam’s Mekong Delta. <i> Nature Climate Change </i>, <b>5</b>, 167-174</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="journal-papers-doi"> <a href="https://doi.org/10.1038/nclimate2469" target="_blank">https://doi.org/10.1038/nclimate2469</a></div>
                                    </div>
                                </div>
                            </div><!-- /.journal-papers -->
                            <div class="journal-papers">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="jp-name">Smajgl, A., & Ward, J.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="journal-papers-meta">
                                            <p>Evaluating participatory research: Framework, methods and implementation results. <i>Journal of Environmental Management </i>, <b>157</b>, 311-319.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="journal-papers-doi"> <a href="https://doi.org/10.1016/j.jenvman.2015.04.014" target="_blank">https://doi.org/10.1016/j.jenvman.2015.04.014</a></div>
                                    </div>
                                </div>
                            </div><!-- /.journal-papers -->
                            <div class="journal-papers">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="jp-name">Tae Yong Jung</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="journal-papers-meta">
                                            <p>Climate Technology Promotion in the Republic of Korea, <i>Advances in Climate Change Research </i>, <b>Vol. 6 </b>, pp. 229-233. </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="journal-papers-doi"> <a href="https://doi.org/10.1016/j.accre.2015.10.003" target="_blank">https://doi.org/10.1016/j.accre.2015.10.003</a></div>
                                    </div>
                                </div>
                            </div><!-- /.journal-papers -->

                        </div>
                    </div>

                </div><!-- /.journal-papers-mound-wrap-->
            </div>
        </section><!-- /.section-journal-papers -->
    </main>
@endsection
@push('scripts')
    <script>
      function goToByScroll(id){
        // Reove "link" from the ID
        id = id.replace("link", "");
        // Scroll
        console.log(id);
        $('html,body').animate({
            scrollTop: $("#"+id).offset().top -115},
          'slow');
      }

      $(".link-prev_def").click(function(e) {
        // Prevent a page reload when a link is pressed
        e.preventDefault();
        // Call the scroll function
        goToByScroll($(this).attr("id"));
      });
    </script>
    @endpush