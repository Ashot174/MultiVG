@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" value="@if(old('name')){{old('name')}}@else{{isset($user->name) ? $user->name : ""}} @endif" required>

<label for="">Email</label>
<input type="email" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{isset($user->email) ? $user->email : ""}} @endif" required>

<label for="">Role</label>
<select required class="form-control"  name="roles[]" multiple="">
    @include('admin.users.partials.roles', ['roles' => $roles])
</select>

<label for="">Password</label>
<input type="password" class="form-control" name="password" >

<label for="">Confirm password</label>
<input type="password" class="form-control" name="password_confirmation" >
<hr />

<input class="btn btn-primary" type="submit" value="Save">


