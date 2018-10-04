<table>
    <tr>
        @if(in_array('first_name',$keys))
            <td>First name</td>
        @endif
        @if(in_array('last_name',$keys))
            <td>Last name</td>
        @endif
        @if(in_array('title',$keys))
            <td>Title</td>
        @endif
        @if(in_array('affiliation',$keys))
            <td>Affiliation</td>
        @endif
        @if(in_array('email',$keys))
            <td>Email</td>
        @endif
        @if(in_array('abstract',$keys))
            @for($i = 0 ; $i < $countAbstract; $i ++)
                <td>Abstract {{$i}}</td>
                <td>Abstract title {{$i}}</td>
                <td>Abstract panel {{$i}}</td>
            @endfor
        @endif
        @if(in_array('paper',$keys))
            @for($i = 0 ; $i < $countPaper; $i ++)
                <td>Paper {{$i}}</td>
                <td>Paper title {{$i}}</td>
            @endfor
        @endif
        @if(in_array('nationality',$keys))
            <td>Nationality</td>
        @endif
        @if(in_array('know',$keys))
            @for($i = 0 ; $i < 7; $i ++)
                <td>Source of info {{$i}}</td>
            @endfor
        @endif
    </tr>
    <tbody>

    @foreach($users as $k => $user)

        <tr>
            @if(in_array('first_name',$keys))
                <td>{{$user['first_name']}}</td>
            @endif

            @if(in_array('last_name',$keys))
                <td>{{$user['last_name']}}</td>
            @endif
            @if(in_array('title',$keys))
                <td>{{$user['title']}}</td>
            @endif
            @if(in_array('affiliation',$keys))
                <td>{{$user['affiliation']}}</td>
            @endif
            @if(in_array('email',$keys))
                <td>{{$user['email']}}</td>
            @endif
            @if(in_array('abstract',$keys))
                @for($i = 0 ; $i < $countAbstract; $i ++)
                    <td>{{(isset($user['Abstract ' . $i])) ? $user['Abstract ' . $i] : ''}}</td>
                    <td>{{(isset($user['Abstract title ' . $i])) ? $user['Abstract title ' . $i] : ''}}</td>
                    <td>{{(isset($user['Abstract panel ' . $i])) ? $user['Abstract panel ' . $i] : ''}}</td>
                @endfor
            @endif
            @if(in_array('paper',$keys))
                @for($i = 0 ; $i < $countPaper; $i ++)
                    <td>{{(isset($user['Paper ' . $i])) ? $user['Paper ' . $i] : ''}}</td>
                    <td>{{(isset($user['Paper title ' . $i])) ? $user['Paper title ' . $i] : ''}}</td>
                @endfor
            @endif
            @if(in_array('nationality',$keys))
                <td>{{$user['Nationality']}}</td>
            @endif
                @if(in_array('know',$keys))
                    @for($i = 0 ; $i < 7; $i ++)
                        <td>{{(isset($user['Source of info' . $i])) ? $user['Source of info' . $i] : ''}}</td>
                    @endfor
                @endif
        </tr>
    @endforeach


    </tbody>
</table>