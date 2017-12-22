@extends ('layouts.master')


@section ('content')

    <h1>Create a new project</h1>

    <form method="POST" action="/projects">

        @include('layouts.errors')

        {{ csrf_field() }}

        <div class="form-group">
            <label for="project_id">Numéro de dossier</label>
            <input type="number" class="form-control" id="project_id" name="project_id" placeholder="1xxx">
        </div>

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom du projet">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>        
        <a class="btn btn-primary" href="/projects">back</a>


    </form>

@endsection