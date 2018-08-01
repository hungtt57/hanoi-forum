<div style="width: 200px">
<select name="" class="form-control select-paper-panel" id="" data-id="{{$user->id}}">

        <option value="">Please choose panel</option>
        @foreach(\App\Models\User::$panelText as $key => $value)
            <option value="{{$key}}" @if($key == old('paper_panel',@$user->paper_panel)) selected @endif>{{$value}}</option>
        @endforeach
</select>
</div>