@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Admins {{$count_admins}}</span></p>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Articles {{$count_articles}}</span></p>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Users {{$count_users}}</span></p>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Editors {{$count_editors}}</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Create article</a>
                @forelse($articles as $article)
                    <div class=" border article{{$article->id}}" >
                        <p class="h4"><a href="{{route('admin.articleView', $article->id)}}">{{$article->title}} </a></p>
                        <form action="javascript:void(0)" method="post" class="text-right">
                            @csrf
                            <a class = "btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" id="{{$article->id}}"  class="btn-danger delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <p>{{$article->getUserName()}}</p>
                    </div>
                    @empty
                    <h3>No articles found</h3>
                @endforelse
                <div>
                    <ul class="pagination pull-right "></ul>
                    {{$articles->links()}}
                </div>

            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.user.index')}}">Manage Users</a>
                @foreach($users as $user)
                    <a class="list-group-item" href="{{route('admin.user.edit', $user)}}">
                        <h4 class="list-group-item-heading">{{$user->getInfo()}}</h4>
                    </a>
                @endforeach
                <div>
                    <ul class="pagination pull-right "></ul>
                    {{$users->links()}}
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete', function(){
                let id = $(this).attr('id');
                if(confirm("Are you sure you want to Delete this article?"))
                {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        url:"/admin/article/"+id,
                        method:'Post',
                        data:{
                            id:id,
                            _method:'delete'
                        },
                        cache: false,
                        success:function()
                        {
                            $('.article'+id).remove();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    })
                }
                else
                {
                    return false;
                }
            });

        });
    </script>
@endsection
