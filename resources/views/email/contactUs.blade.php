<style>
    .contact a {
        color: #000000 !important;
        text-decoration: underline !important;
    }
</style>
@if($type == 1)
    <p>{{ucfirst($contact->title)}}. {{ucfirst ($contact->sur_name)}}</p>
    <p>{{$contact->question}}</p>




@else
    <p>Dear {{ucfirst($contact->title)}}. {{ucfirst ($contact->sur_name)}},</p>

    <p>{{$contact->answer}}</p>

    <p>Hope this helps. Please don't hesitate to contact us should you have any other question in the future.
    </p>
    <p>Best regards,</p>


@endif


<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Hanoi Forum Secretariat</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">R1006, Administration Building</span><br>
<span id="docs-internal-guid-bce07a37-56fd-a84c-d641-59fb31f6947b">Vietnam National University, Hanoi</span><br>
<a href="#" style="color: inherit;text-decoration: none;">144 Xuan Thuy road, Cau Giay district</a><br>
<span><a href="#" style="color: inherit;text-decoration: none;">Hanoi, Vietnam</a></span><br>
<span>Tel: (84) 24 39983856 </span><br>
<span class="contact">E: hanoiforum@vnu.edu.vn</span><br>
<span class="contact">W: https://hanoiforum.vnu.edu.vn</span>
