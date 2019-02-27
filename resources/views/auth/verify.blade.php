@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('content.verify_email')</div>

                <div class="card-body">
                    @include('common.message')

                    @lang('content.before_verify')
                    @lang('content.not_receive'), <a href="{{ route('verification.resend') }}">@lang('content.click_request')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
