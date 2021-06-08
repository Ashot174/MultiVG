@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create user @endslot
            @slot('parent') Home @endslot
            @slot('active') Users @endslot
        @endcomponent

            <form action="{{route('admin.user.store')}}" method="post" class="form-horizontal">
                @csrf

                @include('admin.users.partials.form')
            </form>
    </div>

@endsection
