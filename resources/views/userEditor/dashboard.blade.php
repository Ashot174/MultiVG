@extends('userEditor.layouts.app_usereditor')

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
                <a class="btn btn-block btn-default" href="{{route('userEditor.article.create')}}">Create article</a>
                <div class="container">
                    @forelse($articles as $article)
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>
                                    <a href="{{route('userEditor.articleView', $article->id)}}">{{$article->title}}</a>
                                    <a class = "btn btn-default col-2" href="{{route('userEditor.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
                                </h3>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center">No articles found</h2>
                    @endforelse
                    {{$articles->links()}}
                </div>

            </div>
        </div>
    </div>
@endsection


