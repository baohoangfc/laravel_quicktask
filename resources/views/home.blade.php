@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('content.dashbroad')</div>

                <div class="card-body">
                    @include('common.message')

                    @lang('content.msg_login')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
