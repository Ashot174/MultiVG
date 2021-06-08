@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Edit user @endslot
            @slot('parent') Home @endslot
            @slot('active') Users @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.user.update', $user)}}" method="post">
            {{method_field('PUT')}}
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.users.partials.form')
        </form>
    </div>

@endsection
