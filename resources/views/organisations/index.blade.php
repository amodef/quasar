@extends ('layouts.master')


@section ('content')

    <h2>Organisations list <a class="btn btn-primary" href="/organisations/create">add</a></h2>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($organisations as $organisation)
                <tr>
                    <th>
                        <a href="/organisations/{{ $organisation->id }}">
                            {{ $organisation->name }}
                        </a>
                    </th>
                    <th>
                        {{ $organisation->addresses->first()->city }}
                    </th>
                    <th>edit/remove</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection