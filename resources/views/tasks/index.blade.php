@extends('layouts.app')

@section('content')
    <div class="panel-body">

        @include('common.errors')
        @include('common.message')

        @include('tasks.create')

        @if (count($tasks) > config('setting.number_default'))
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('content.current_task')
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>@lang('content.task')</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE']) !!}
                                            {!! Form::submit( trans('content.btn_delete'), ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
