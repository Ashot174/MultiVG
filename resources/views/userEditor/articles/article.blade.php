@extends('userEditor.layouts.app_usereditor')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$article->title}}</h1>
                <p>{!! $article->description !!}</p>
            </div>
        </div>
    </div>

@endsection
