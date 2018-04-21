<select name="" class="form-control select-payment" @if($user->payment_status == \App\Models\User::WAIVED) disabled
        @endif id="" data-id="{{$user->id}}">

    @foreach(\App\Models\User::$paymentText as $key => $payment)
        <option value="{{$key}}" @if($user->payment_status ==$key) selected @endif>{{$payment}}</option>
    @endforeach
</select>