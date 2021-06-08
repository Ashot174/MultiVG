@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Articles list @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create article</a>
        <table class="table table-striped " id="myTable">
            <thead>
            <th>Title</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse ($articles as $article)

                <tr class="article{{$article->id}}">

                    <td>{{$article->title}}</td>
                    <td class = "text-right">
                        <form action="javascript:void(0){{--{{route('admin.article.destroy', $article)}}--}}"{{-- id="{{$article->id}}"--}} {{--onsubmit="if(confirm('Delete?')) { return true }else {return false}"--}} method="post">
                            {{method_field('DELETE')}}
                            @csrf
                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <a class = "btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" id="{{$article->id}}" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>No articles</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right "></ul>
                    {{$articles->links()}}
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
                if(confirm("Are you sure you want to Delete this article?"))
                {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"/admin/article/"+id,
                        method:'Post',
                        data:{
                            id:id,
                            // // _token:token,
                             _method:'delete'
                        },
                        cache: false,
                        success:function()
                        {
                            $('.article'+id).remove();
                            // alert('hubhhg');
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

