@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('content.verify_email')</div>

                <div class="card-body">
                    @include('common.message')

                    {{ trans('content.before_verify') }}
                    {{ trans('content.not_receive') }}, <a href="{{ route('verification.resend') }}">{{ trans('content.click_request') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
