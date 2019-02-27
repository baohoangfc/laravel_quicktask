@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('content.btn_login')</div>

                <div class="card-body">
                    @include('common.errors')

                    {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}

                        <div class="form-group row">
                            {{ Form::label('email', trans('content.email_address'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('email', old('email'), ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'name', 'required' => 'required', 'autofocus' => 'autofocus']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password', trans('content.btn_password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'id' => 'password', 'required' => 'required']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {{ Form::checkbox('remember', old('remember') ? 'checked' : '', true, ['class' => ['form-check-input'] ,'id' => 'remember'] )}}

                                    {{ Form::label('remember', trans('content.remember_me'), ['class' => 'form-check-label']) }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit( trans('content.btn_login'), ['class' => 'btn btn-primary']) !!}

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ trans('content.forgot_pw') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
