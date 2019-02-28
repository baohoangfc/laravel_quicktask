{!! Form::open(['route' => 'tasks.index', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
    <div class="form-group">
        {{ Form::label('task-name', trans('content.task'), ['class' => 'col-sm-3 control-label']) }}

        <div class="col-sm-6">
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            {!! Form::submit( trans('content.add_task'), ['class' => 'btn btn-default']) !!}
        </div>
    </div>
{!! Form::close() !!}
