@extends ('layouts.master')


@section ('content')

<div class="row justify-content-md-center">
    <div class="col col-lg-6">
        <div class="card">

            <h4 class="card-header">Add an organisation</h4>

            <form class="form-horizontal" method="POST" action="/organisations">

                <div class="card-body">            
                    @include('organisations.form')
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                    <a class="btn btn-secondary" href="/organisations">Back</a>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection