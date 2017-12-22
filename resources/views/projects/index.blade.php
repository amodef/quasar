@extends ('layouts.master')


@section ('content')

    <h2>Projects list <a class="btn btn-primary" href="/projects/create">add</a></h2>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->project_id }}</th>
                    <th>
                        <a href="/projects/{{ $project->id }}">{{ $project->name }}</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection