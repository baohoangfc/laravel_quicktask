@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ trans('content.A fresh verification link has been sent to your email address.') }}
    </div>
@endif
