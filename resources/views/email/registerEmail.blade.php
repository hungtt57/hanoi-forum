<style>
    .contact a {color:#000000!important; text-decoration:underline!important;}
</style>
<p>Dear {{ucfirst($user->title)}}. {{ucfirst ($user->last_name)}},</p>
<p>Welcome to Hanoi Forum 2018!</p>
<p>We&rsquo;re ready to activate your account. All we need to do is make sure this is your email address. Once your account is activated, you can log in to your account on Hanoi Forum website to manage your setting, submit your abstract, and get the most updated information from the Forum.</p>
<p>Your unique registration ID is <b>{{$user->code}}</b>. Please include it when you pay the registration fee and in all other communication with Hanoi Forum staff.</p>
<p>We look forward to welcoming you in Hanoi this November.</p>
<p>Please click verify to active account.</p>
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

<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</span><br>
<a href="#" style="color: inherit;text-decoration: none;">144 Xuan Thuy road, Cau Giay district, Hanoi, Vietnam</a><br>
<span >Tel: (84) 24 37547670 - Ext: 723</span><br>
<span class="contact">W:https://hanoiforum.vnu.edu.vn</span>
<br />
<br />
<p dir="ltr"><em>If you didn&rsquo;t </em><em>create an account on Hanoi Forum website, just ignore this email. </em></p>

&nbsp;