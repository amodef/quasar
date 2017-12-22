@extends ('layouts.master')


@section ('content')

<div class="row">
    <div class="col-sm-5">
        <div class="card">  

            <div class="card-header text-white bg-success ">
                <div class="row">
                    
                    <div class="col-8">
                        <h5>
                            {{ $organisation->name }}
                        </h5>
                        Parachèvement (HC)
                    </div>

                    <div class="col-4 text-right">                    
                        <a href="/organisations/{{ $organisation->id }}/edit" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i> <small><strong>EDIT</strong></small>
                        </a>
                    </div>

                </div>
            </div>
                    
            <div class="card-body">                
                <p><strong>EMPLOYEES</strong>
                @foreach ($organisation->users as $user)
                    <br><a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                @endforeach
                </p>

                <p><strong>ADDRESS</strong>
                    <br>{{ $organisation->addresses->first()->street }}
                    <br>{{ $organisation->addresses->first()->postcode }} {{ $organisation->addresses->first()->city }}
                    <br>{{ $organisation->addresses->first()->country }}
                </p>
           
                <p><strong>PHONE</strong>
                <br>+352 123 456 (HC)</p>
            </div>

        </div>
    </div>
</div>

@endsection