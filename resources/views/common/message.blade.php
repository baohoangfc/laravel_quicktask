@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ trans('content.fresh_verify') }}
    </div>
@endif

@if (session('add_success'))
    <div class="alert alert-success" role="alert">
      <p>{{ session('add_success') }}</p>
    </div>
@endif

@if (session('add_fail'))
    <div class="alert alert-danger" role="alert">
      <p>{{ session('add_fail') }}</p>
    </div>
@endif

@if (session('delete_success'))
    <div class="alert alert-success" role="alert">
      <p>{{ session('delete_success') }}</p>
    </div>
@endif

@if (session('delete_fail'))
    <div class="alert alert-danger" role="alert">
      <p>{{ session('delete_fail') }}</p>
    </div>
@endif
