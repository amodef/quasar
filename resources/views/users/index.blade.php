@extends ('layouts.master')


@section ('content')

    <h2>Users list <a class="btn btn-primary" href="/users/create">add</a></h2>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>                    
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>
                        <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                    </th>
                    <th>
                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection