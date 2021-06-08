@foreach ($roles as $role)
    <option  value="{{$role->id}}"

        @isset($user->id)
            @foreach($user->roles as $role_user)
                @if ($role->id == $role_user->id)
                    selected="selected"
                @endif
            @endforeach
        @endisset
    >
        {{$role->name}}
    </option>
@endforeach
