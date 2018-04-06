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
                        @foreach($banners as $banner)

                            <li class="seq-step{{$banner->id}}" id="step{{$banner->id}}"
                                style="background:url({{$banner->image}});background-repeat: no-repeat;background-size: cover;background-position: center center;">
                                <div class="bg-blend"></div>

                            </li>
                        @endforeach
                    </ul>
                    <div class="sec-navigate-wrap pos-y_center">
                        <button type="button" class="seq-next"></button>
                        <button type="button" class="seq-prev"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif