@extends ('layouts.master')


@section ('content')

<div class="row justify-content-md-center">
    <div class="col col-lg-6">
        <div class="card">

            <h4 class="card-header">Add a new user</h4>

            <form class="form-horizontal" method="POST" action="/users">
            
                <div class="card-body">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="form-control-label">Name*</label>
                        <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ isset($user) ? $user->name : old('name') }}" autofocus>

                        @if ($errors->has('name'))
                            <div class="form-control-feedback text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-control-label">Email Address*</label>
                        <input id="email" type="email" class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <div class="form-control-feedback text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="organisation">Organisation</label>
                        <select id="organisation" class="form-control {{ $errors->has('organisation_id') ? 'is-invalid' : '' }}" name="organisation_id">
                            <option></option>
                            @foreach ($organisations as $organisation)
                                <option value="{{ $organisation->id }}">
                                    {{ $organisation->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('organisation_id'))
                            <div class="form-control-feedback text-danger">{{ $errors->first('organisation_id') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-control-label">Password*</label>
                        <input id="password" type="password" class="form-control  {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password">

                        @if ($errors->has('password'))
                            <div class="form-control-feedback text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="form-control-label">Confirm Password*</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>

                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                    <a class="btn btn-secondary" href="/users">Back</a>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection