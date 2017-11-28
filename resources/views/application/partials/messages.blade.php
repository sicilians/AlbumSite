@if (Session::has('success-message'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ request()->session()->get('success-message') }}
    </div>
@endif

@if (Session::has('error-message'))
    <div class="alert alert-danger">
        <strong>Oh no!</strong> {{ request()->session()->get('error-message') }}
    </div>
@endif