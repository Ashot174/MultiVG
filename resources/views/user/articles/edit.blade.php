@extends('user.layouts.app_user')

@section('content')

    <div class="container">

        @component('user.components.breadcrumb')
            @slot('title') Edit article @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('user.article.update', $article)}}" method="post">
            {{method_field('PUT')}}
            @csrf
            {{-- Form include --}}
            @include('admin.articles.partials.form' )
        </form>
    </div>

@endsection
