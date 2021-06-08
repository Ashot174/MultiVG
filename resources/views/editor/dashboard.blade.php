@extends('editor.layouts.app_editor')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="jumbotron">
                    <p><span class="label label-primary">Articles {{$count_articles}}</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <a class="btn btn-block btn-default" href="{{route('editor.article.index')}}">Edit articles</a>
                @forelse($articles as $article)
                    <a class="list-group-item" href="{{route('editor.article.edit', $article)}}">
                        <h4 class="list-group-item-heading">{{$article->title}}</h4>
                    </a>
                    </a>
                @empty
                    <h3>No articles found</h3>
                @endforelse

            </div>
        </div>
    </div>
@endsection

