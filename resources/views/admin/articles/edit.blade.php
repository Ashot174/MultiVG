@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Edit article @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
            {{method_field('PUT')}}
            @csrf
            {{-- Form include --}}
            @include('admin.articles.partials.form' )
          {{--  <input type="hidden" name="modified_by" value="{{$id}}">--}}

        </form>
    </div>

@endsection
