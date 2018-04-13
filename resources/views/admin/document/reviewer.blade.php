<select name="" class="form-control select-reviewer" id="" data-id="{{$user->id}}">
    <option value="">Select reviewer</option>
    @foreach($reviewers as $reviewer)
        <option value="{{$reviewer->id}}"
                @if($user->reviewer_id == $reviewer->id) selected @endif>{{$reviewer->first_name. ' '.$reviewer->last_name}}</option>
    @endforeach
</select>