@extends('user.layouts.app_user')

@section('content')
    <div class="container">
        @forelse($articles as $article)
            <div class="row">
                <div class="col-sm-12">
                    <h2><a href="{{route('user.articleView', $article->id)}}">{{$article->title}}</a></h2>
                </div>
            </div>
        @empty
            <h2 class="text-center">No articles found</h2>
        @endforelse
        {{$articles->links()}}
    </div>
@endsection

