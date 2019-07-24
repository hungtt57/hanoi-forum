@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/3.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">About</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <section class="section-journal-papers">
            <div class="container">
                <nav class="journal-papers-nav">
                    <div class="nav-meta">
                        <p><strong>Delegates' CV</strong>  </p>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <input class="form-control" placeholder="Search ..." id="filter-name">
                            </div>
                        </div>

                    </div>

                </nav><!--  /.journal-papers-nav -->
                <div class="journal-papers-mound-wrap">
                    <div class="journal-papers-mound">

                        <div class="journal-papers-list">

                            <div class="journal-papers">
                                <div class="row">

                                    @foreach($cvs as $cv)
                                    <div class="col-sm-3 list-champion" id="champion-{{ $cv->id }}">
                                        <div class="journal-papers-meta">
                                            <span class="tags" tag="{{ $cv->id }}" type="4" style="display:none">{{ $cv->first_name.' '.$cv->last_name }},{{ strtolower($cv->first_name.' '.$cv->last_name) }}</span>
                                            <p>{{ ucfirst($cv->title).' '. $cv->first_name.' '.$cv->last_name }} <a href="/pdfs/{{ $cv->pdf_cv }}.pdf" class="pdf-link" target="_blank">PDF</a></p>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div><!-- /.journal-papers -->


                        </div>
                    </div>
                </div><!-- /.journal-papers-mound-wrap-->
            </div>
        </section>

    </main>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            $("#filter-name").keyup(function (event) {
                var str = $(this).val();
                if (str == '') {
                    showAll();
                } else {
                    searchFilter(str);
                }
            });


            function searchFilter(str) {
                str = str.toLowerCase();
                var items = Array();
                var champions = Array();


                $('.tags').each(function () {
                    var title = $(this).html();
                    title = title.toLowerCase();

                    var pos = title.search(str);
                    if (pos >= 0) {
                        var id = $(this).attr('tag');
                        if (champions.length > 0 && champions.indexOf(id) >= 0) {
                            items[id] = id;
                        }
                        if (champions.length <= 0) {
                            items[id] = id;
                        }

                    }
                });
                if (str == '') {
                    items = champions;
                }

                if (items.length > 0) {
                    $('.list-champion').each(function () {
                        $(this).css('display', 'none');
                    });

                    for (id in items) {
                        $('#champion-' + id).css('display', '');
                    }

                } else {
                    $('.list-champion').each(function () {
                        $(this).css('display', 'none');
                    });
                }
            }

            function showAll() {
                $('.list-champion').each(function () {
                    $(this).css('display', '');
                });
            }
        });
    </script>
    @endpush