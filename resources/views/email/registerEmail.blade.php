<style>
    .contact a {color:#000000!important; text-decoration:underline!important;}
</style>
{{--@if($user->apply == 0)--}}
{{--<p>Dear {{ucfirst($user->title)}} {{ucfirst ($user->last_name)}},</p>--}}
{{--<p>Welcome to Hanoi Forum 2018!</p>--}}
{{--<p>Please click on the button <strong>Verify</strong> below to activate your account.</p>--}}
{{--<p>Once your account is activated, you can log in on Hanoi Forum website to manage your setting and get the most updated information from the Forum. </p>--}}
{{--<p>Your unique registration ID is <b>{{$user->code}}</b>. Please include it in all communication with Hanoi Forum staff.</p>--}}
{{--<p>We look forward to welcoming you in Hanoi this November.</p>--}}
{{--<p align="center">--}}
    {{--<a href="{{url('verify-email').'?code='.$user->code}}">--}}
        {{--<button class="verify" style=" color: #fff;--}}
        {{--width: 100px;--}}
        {{--background-color: #36c6d3;--}}
        {{--border-color: #2bb8c4;--}}
        {{--display: inline-block;--}}
        {{--margin-bottom: 0;--}}
        {{--font-weight: 400;--}}
        {{--text-align: center;--}}
        {{--vertical-align: middle;--}}
        {{--touch-action: manipulation;--}}
        {{--cursor: pointer;--}}
        {{--border: 1px solid transparent;--}}
        {{--white-space: nowrap;--}}
        {{--padding: 6px 12px;--}}
        {{--font-size: 14px;--}}
        {{--line-height: 1.42857;--}}
        {{--border-radius: 4px;--}}
        {{---webkit-user-select: none;--}}
        {{---moz-user-select: none;--}}
        {{---ms-user-select: none;--}}
        {{--user-select: none;">Verify </button>--}}
    {{--</a>--}}
{{--</p>--}}

{{--<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</span><br>--}}
{{--<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</span><br>--}}
{{--<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</span><br>--}}
{{--<a href="#" style="color: inherit;text-decoration: none;">144 Xuan Thuy road, Cau Giay district</a><br>--}}
{{--<span><a href="#" style="color: inherit;text-decoration: none;">Hanoi, Vietnam</a></span><br>--}}
{{--<span>Tel: (84) 24 39983856 </span><br>--}}
{{--<span class="contact">E: hanoiforum@vnu.edu.vn</span><br>--}}
{{--<span class="contact">W: https://hanoiforum.vnu.edu.vn</span>--}}
{{--<br />--}}
{{--<br />--}}
{{--<p dir="ltr"><em>If you didn&rsquo;t </em><em>create an account on Hanoi Forum website, just ignore this email. </em></p>--}}
{{--@else--}}
    {{--<p>Dear {{ucfirst($user->title)}}. {{ucfirst ($user->last_name)}},</p>--}}
    {{--<p>Welcome to Hanoi Forum 2018!</p>--}}
    {{--<p>Please click on the button <strong>Verify</strong> below to activate your account.</p>--}}

    {{--<p>Once your account is activated, you can log in on Hanoi Forum website to manage your setting, submit your abstract, and get the most updated information from the Forum.</p>--}}
    {{--<p>Your unique registration ID is <b>{{$user->code}}</b>. Please include it in all communication with Hanoi Forum staff. </p>--}}

    {{--<p>We look forward to welcoming you in Hanoi this November.</p>--}}

    {{--<p align="center">--}}
        {{--<a href="{{url('verify-email').'?code='.$user->code}}">--}}
            {{--<button class="verify" style=" color: #fff;--}}
        {{--width: 100px;--}}
        {{--background-color: #36c6d3;--}}
        {{--border-color: #2bb8c4;--}}
        {{--display: inline-block;--}}
        {{--margin-bottom: 0;--}}
        {{--font-weight: 400;--}}
        {{--text-align: center;--}}
        {{--vertical-align: middle;--}}
        {{--touch-action: manipulation;--}}
        {{--cursor: pointer;--}}
        {{--border: 1px solid transparent;--}}
        {{--white-space: nowrap;--}}
        {{--padding: 6px 12px;--}}
        {{--font-size: 14px;--}}
        {{--line-height: 1.42857;--}}
        {{--border-radius: 4px;--}}
        {{---webkit-user-select: none;--}}
        {{---moz-user-select: none;--}}
        {{---ms-user-select: none;--}}
        {{--user-select: none;">Verify </button>--}}
        {{--</a>--}}
    {{--</p>--}}

    {{--<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</span><br>--}}
    {{--<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</span><br>--}}
    {{--<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</span><br>--}}
    {{--<a href="#" style="color: inherit;text-decoration: none;">144 Xuan Thuy road, Cau Giay district</a><br>--}}
    {{--<span><a href="#" style="color: inherit;text-decoration: none;">Hanoi, Vietnam</a></span><br>--}}
    {{--<span>Tel: (84) 24 39983856</span><br>--}}
    {{--<span class="contact">E: hanoiforum@vnu.edu.vn</span><br>--}}
    {{--<span class="contact">W: https://hanoiforum.vnu.edu.vn</span>--}}
    {{--<br />--}}
    {{--<br />--}}
    {{--<p dir="ltr"><em>If you didn&rsquo;t </em><em>create an account on Hanoi Forum website, just ignore this email. </em></p>--}}
{{--@endif--}}

<p>Dear {{ucfirst($user->title)}} {{ucfirst ($user->last_name)}},</p>
<p>Welcome to Hanoi Forum 2018! Thank you for your registration.</p>
<p>Please click on the button <strong>Verify</strong> below to activate your account.</p>
<p>Your unique registration ID is <b>{{$user->code}}</b>. Please include it in all communication with Hanoi Forum staff.</p>
<p>Please visit our website regularly for the most updated information about the program.</p>
<p>We look forward to welcoming you in Hanoi this November!</p>
<p align="center">
    <a href="{{url('verify-email').'?code='.$user->code}}">
        <button class="verify" style=" color: #fff;
        width: 100px;
        background-color: #36c6d3;
        border-color: #2bb8c4;
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;">Verify </button>
    </a>
</p>

<p>Cordially,</p>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</span><br>
<a href="#" style="color: inherit;text-decoration: none;">144 Xuan Thuy road, Cau Giay district</a><br>
<span><a href="#" style="color: inherit;text-decoration: none;">Hanoi, Vietnam</a></span><br>
<span>Tel: (84) 24 39983856</span><br>
<span class="contact">E: hanoiforum@vnu.edu.vn</span><br>
<span class="contact">W: https://hanoiforum.vnu.edu.vn</span>
<br />
<br />
<p dir="ltr"><em>If you didn&rsquo;t </em><em>create an account on Hanoi Forum website, just ignore this email. </em></p>