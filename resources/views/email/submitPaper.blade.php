<style>
    .contact a {
        color: #000000 !important;
        text-decoration: underline !important;
    }
</style>
<p>Dear {{ucfirst($user->title)}} {{ucfirst ($user->last_name)}},</p>
<p>This email is to confirm that we have received your manuscript(s). A copy of your submission is as follows:</p>
@php $files = json_decode($user->paper,true); @endphp
@php $title_paper = json_decode($user->title_paper,true); @endphp
@foreach($files as $index => $file)
    <p>{{$title_paper[$index]}}</p>
    <p><a href="{{url($file)}}">{{url($file)}}</a></p>
@endforeach

<p> We look forward to welcoming you this November.</p>
<p> Regards,</p>

<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</span><br>
<a href="#" style="color: inherit;text-decoration: none;">144 Xuan Thuy road, Cau Giay district</a><br>
<span><a href="#" style="color: inherit;text-decoration: none;">Hanoi, Vietnam</a></span><br>
<span>Tel: (84) 24 39983856 </span><br>
<span class="contact">E: hanoiforum@vnu.edu.vn</span><br>
<span class="contact">W: https://hanoiforum.vnu.edu.vn</span>
