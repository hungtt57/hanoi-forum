@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">News</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">News</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        @php $posts = App\Models\Post::where('status',1)->orderBy('created_at','desc')->get(); @endphp
                        @if($posts)
                                <article class="news-card sabbi-thumlinepost-card solitude-bg__x" id="right">
                                    <ul class="list-unstyled lst_news_list" tabindex="0">
                                        @foreach($posts as $post)
                                            <li class="lst_news_item">
                                                <h3 class="title mg_0"><a href="javascript:void(0)" class="item-post" data-id="{{$post->id}}">{{$post->title}}</a>
                                                </h3>
                                                <div>
                                                    <span class="date">{{$post->created_at->format('M d Y')}}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    {{--<a href="events.html" class="btn btn-unsolemn btn-action read-more">VIEW ALL</a>--}}
                                </article>
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-5  col-xs-8">
                        @php $posts = App\Models\Post::where('status',1)->orderBy('created_at','desc')->get(); @endphp
                        @if($posts)
                            @foreach($posts as $index => $post)
                                <div class="content-page  @if($index != 0) hide @endif" id="post-{{$post->id}}">
                                    {!! $post->content !!}
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection
@push('scripts')
    <script>
        $(document).on('click','.item-post',function () {
            $('.content-page').addClass('hide');
            var id = $(this).attr('data-id');
            $('#post-'+id).removeClass('hide');
        });
    </script>
    @endpush