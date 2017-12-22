@extends ('layouts.master')


@section ('content')

<div class="row">
    <div class="col-sm-5">
        <div class="card">  

            <div class="card-header text-white bg-success ">
                <div class="row">
                    
                    <div class="col-8">
                        <h5>
                            {{ $user->name }}
                        </h5>
                        Project Manager (HC)
                    </div>

                    <div class="col-4 text-right">                    
                        <a href="/users/{{ $user->id }}/edit" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i> <small><strong>EDIT</strong></small>
                        </a>
                    </div>

                </div>
            </div>
                    
            <div class="card-body">                
                <p><strong>ORGANISATION</strong>
                <br><a href="/organisations/{{ $user->organisation->id }}">{{ $user->organisation->name }}</a></p>

                <p><strong>EMAIL</strong>
                <br>{{ $user->email }}</p>
           
                <p><strong>PHONE</strong>
                <br>+352 123 456 (HC)</p>
            </div>

        </div>
    </div>
</div>

@endsection