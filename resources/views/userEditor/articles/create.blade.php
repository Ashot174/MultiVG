@extends('userEditor.layouts.app_usereditor')

@section('content')

    <div class="container">

        @component('userEditor.components.breadcrumb')
            @slot('title') Create article @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('userEditor.article.store')}}" method="post">
            @csrf
            {{-- Form include --}}
            @include('admin.articles.partials.form' )
        </form>
    </div>

@endsection


