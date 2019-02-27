@extends('layouts.app')

@section('content')
    <div class="panel-body">

        @include('common.errors')

        @include('tasks.create')

        <!-- Current Tasks -->
        @include('tasks.show')

    </div>
@endsection
