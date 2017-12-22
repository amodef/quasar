@if (session('status'))
    <div class="alert alert-dismissible alert-{{ session('status') }} fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{ session('hint') }}</strong> {{ session('message') }}
    </div>
@endif