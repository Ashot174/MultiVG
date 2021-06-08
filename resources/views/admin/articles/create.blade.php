@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create article @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
            @csrf
            {{-- Form include --}}
            @include('admin.articles.partials.form' )
            {{--<input type="hidden" name="created_by" value="{{$id}}">--}}

        </form>
    </div>

@endsection
