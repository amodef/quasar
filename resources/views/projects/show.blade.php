@extends ('layouts.master')


@section ('content')
   
    <h3>{{ $project->name }}</h3>
    <p>Hours per week : {{ $project->hours() }}</p>

    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#summary"><strong>SUMMARY</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#team"><strong>TEAM</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#budget"><strong>BUDGET</strong></a>
        </li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane fade show active" id="summary">
            <p>HARD CODED. Décider des informations à afficher sur ce panneau.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fringilla, diam quis suscipit convallis, nulla lectus dapibus ipsum, vitae finibus neque magna non tellus. Vivamus vitae orci malesuada, tempus dolor quis, bibendum augue. Integer id lorem vitae tellus euismod ornare id eget ante. Cras sollicitudin maximus dapibus.</p>
        </div>

        <div class="tab-pane fade" id="team">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="card-header">Project Team</h4>   
                        <ul class="list-group list-group-flush">
                            @foreach ($project->users as $user)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-sm-10"><i class="fa fa-user fa-lg pr-1"></i> {{ $user->name }} | {{ $user->pivot->percent }}%</div>
                                        <div class="col-sm-2 text-right">
                                            <a href="#" data-toggle="modal" data-target="#removeUser{{ $user->id }}Modal">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $user->pivot->percent }}%" aria-valuenow="{{ $user->pivot->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>

                                @include ('projects.members.remove')

                            @endforeach
                        </ul>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade" id="budget">
            <p>HARD CODED. Budget à intégrer dans le futur.</p>
        </div>
    </div>

    <!-- Modal -->
    @include ('projects.members.add')

@endsection