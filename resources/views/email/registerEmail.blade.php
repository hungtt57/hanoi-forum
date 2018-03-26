
<p><strong>Welcome email after registration</strong></p>
<p>Dear {{$user->title}}.{{$user->last_name}},</p>
<p>Welcome to Hanoi Forum 2018!</p>
<p>We&rsquo;re ready to activate your account. All we need to do is make sure this is your email address. Once your account is activated, you can log in to your account on Hanoi Forum website to manage your setting, submit your abstract, and get the most updated information from the Forum.</p>
<p>Your unique registration ID is <b>{{$user->code}}</b>. Please include it when you pay the registration fee and in all other communication with Hanoi Forum staff.</p>
<p>We look forward to welcoming you in Hanoi this November.</p>
<p>Please click verify to active account</p>
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

<p dir="ltr"><b id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</b></p>
<p dir="ltr"><b id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</b></p>
<p dir="ltr"><b id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</b></p>

<p dir="ltr"><b id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">144 Xuan Thuy, Cau Giay</b></p>

<p dir="ltr"><b id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Tel: (84) 24 37547670 - Ext: 723</b></p>

<p dir="ltr"><b id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">W: https://hanoiforum.vnu.edu.vn</b></p>

<p dir="ltr"><em>If you didn&rsquo;t </em><em>create an account on Hanoi Forum website, just ignore this email. </em></p>
<br />
&nbsp;