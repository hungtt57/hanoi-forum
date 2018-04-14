@php $banners =  Cache::rememberForever('banners', function() {
                        return  \App\Models\Banner::orderBy('order', 'DESC')->get();
                     }); @endphp
@if($banners)
    <style>

    </style>
    <div class="sabbi-site-header-meta">
        <div class="site-hmsl-content text-center mt_60">
            <div class="seq seq--kawsa" id="sequence">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        @php $posts = App\Models\Post::where('status',1)->orderBy('created_at','desc')->limit(5)->get(); @endphp
                        @foreach($banners as $banner)

                            <li class="seq-step{{$banner->id}}" id="step{{$banner->id}}"
                                style="background:url({{$banner->image}});background-repeat: no-repeat;background-size: cover;background-position: center center;">
                                <div class="bg-blend"></div>
                                @if($loop->index == 0)
                                    @if($posts)
                                        @if($posts->first())
                                <div class="seq-content" >

                                    <h3 style="font-size: 25px" class="seq-title font-2 tt_up" data-seq="">{{ $posts->first()->title }}</h3>
                                    {{--<div class="seq-meta" data-seq="">--}}
                                        {{--<p class="seq-meta-text">Congratulations Dr Rushmore : his research to develop a new detection strategy for cancer has received a new National Health and Medical Research Council </p>--}}
                                    {{--</div>--}}
                                    <a href="{{url('post').'/'.str_slug($posts->first()->title).'-'.$posts->first()->id}}" class="btn-link btn-more">READ MORE</a>
                                </div>
                                            @endif
                                        @endif
                                    @endif

                                @if($loop->index == 1)
                                    @if($posts)
                                        @if($posts[1])

                                    <div class="seq-content" >

                                        <h3 style="font-size: 25px" class="seq-title font-2 tt_up" data-seq="">{{ $posts[1]->title }}</h3>
                                        {{--<div class="seq-meta" data-seq="">--}}
                                            {{--<p class="seq-meta-text">Congratulations Dr Rushmore : his research to develop a new detection strategy for cancer has received a new National Health and Medical Research Council </p>--}}
                                        {{--</div>--}}
                                        <a href="{{url('post').'/'.str_slug($posts[1]->title).'-'.$posts[1]->id}}" class="btn-link btn-more">READ MORE</a>
                                    </div>
                                            @endif
                                            @endif
                                @endif

                            </li>
                        @endforeach
                    </ul>
                    <div class="sec-navigate-wrap pos-y_center">
                        <button type="button" class="seq-next" style="background-color: transparent"></button>
                        <button type="button" class="seq-prev" style="background-color: transparent"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif