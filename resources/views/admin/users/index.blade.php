@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') List of users @endslot
            @slot('parent') Home @endslot
            @slot('active') Users @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.user.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create a user</a>
        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Email</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse ($users as $user)
                <tr class="user{{$user->id}}">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class = "text-right">
                        <form action="javascript:void(0)"  method="post">
                            {{method_field('DELETE')}}
                            @csrf
                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <a class = "btn btn-default" href="{{route('admin.user.edit', $user)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" id="{{$user->id}}" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>No users found</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right "></ul>
                    {{$users->links()}}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete', function(){
                let id = $(this).attr('id');
                // let token = $('meta[name="csrf-token"]').attr('content');
                if(confirm("Are you sure you want to Delete this User?"))
                {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"/admin/user/"+id,
                        method:'Post',
                        data:{
                            id:id,
                            // // _token:token,
                            _method:'delete'
                        },
                        cache: false,
                        success:function()
                        {
                             $('.user'+id).remove();
                            // alert('hubhhg');
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    })
                }
                else
                {
                    // alert('bhbjh');
                    return false;
                }
            });
        });
    </script>
@endsection


