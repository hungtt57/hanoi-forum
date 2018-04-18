@php $banners =  Cache::rememberForever('banners', function() {
                        return  \App\Models\Banner::orderBy('order', 'DESC')->limit(2)->get();
                     });
$agent = new \Jenssegers\Agent\Agent();

@endphp

@if($banners)
    <style>

    </style>
    <div class="sabbi-site-header-meta">
        <div class="site-hmsl-content text-center mt_60">
            <div class="seq seq--kawsa" id="sequence">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        @php $posts = App\Models\Post::where('status',1)->orderBy('created_at','desc')->limit(2)->get(); @endphp
                        @foreach($banners as $banner)

                            @if(!$agent->isMobile())
                            <li class="seq-step{{$banner->id}}" id="step{{$banner->id}}"
                                style="background:url({{$banner->image}});background-repeat: no-repeat;background-size: cover;background-position: center center;">
                                @else
                                @php $name = basename($banner->image); @endphp
                                <li class="seq-step{{$banner->id}}" id="step{{$banner->id}}"
                                    style="background:url({{'/files/blur-'.$name}});background-repeat: no-repeat;background-size: cover;background-position: center center;">
                                    @endif
                                <div class="bg-blend"></div>
                                @if($loop->index == 0)
                                    @if($posts)
                                        @if($posts->first())
                                <div class="seq-content" >
                                    <a href="{{url('post').'/'.str_slug($posts->first()->title).'-'.$posts->first()->id}}" style="border-bottom: none !important;" class="btn-link btn-more">
                                    <h3 style="font-size: 25px;border-bottom: none !important;" class="seq-title font-2 tt_up" data-seq="">{{ $posts->first()->title }}</h3>
                                    {{--<div class="seq-meta" data-seq="">--}}
                                        {{--<p class="seq-meta-text">Congratulations Dr Rushmore : his research to develop a new detection strategy for cancer has received a new National Health and Medical Research Council </p>--}}
                                    {{--</div>--}}
                                    <p  class="btn-link btn-more" style="border-bottom: none !important;">READ MORE</p>
                                    </a>
                                </div>
                                            @endif
                                        @endif
                                    @endif

                                @if($loop->index == 1)
                                    @if($posts)
                                        @if($posts[1])

                                    <div class="seq-content" >
                                        <a href="{{url('post').'/'.str_slug($posts[1]->title).'-'.$posts[1]->id}}"  style="border-bottom: none !important;"  class="btn-link btn-more">
                                        <h3 style="font-size: 25px;border-bottom: none !important;" class="seq-title font-2 tt_up" data-seq="">Announcing Hanoi Forum 2018</h3>
                                        <div class="seq-meta" data-seq="">
                                            {{--<p class="seq-meta-text">HANOI, Vietnam – Vietnam National University, Hanoi (VNU) and Korea Foundation for Advanced Studies (KFAS) will co-host Hanoi Forum 2018, an international academic conference on climate change response and sustainable development, on November 8- 10, 2018 in Hanoi, Vietnam.</p>--}}
                                        </div>
                                        <p  class="btn-link btn-more" style="border-bottom: none !important;">READ MORE</p>
                                        </a>
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