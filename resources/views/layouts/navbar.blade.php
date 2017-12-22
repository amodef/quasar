<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">

    <a class="navbar-brand" href="/home">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav mr-auto">
        @guest
            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
        @else
            <li class="nav-item dropdown">                
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-id-card pr-1"></i> Account
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-cog pr-1"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-times pr-1"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            <li class="nav-item {{ Request::is('projects*') ? 'active' : '' }}">
                <a class="nav-link" href="/projects">Projects</a>
            </li>
            <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item {{ Request::is('organisations*') ? 'active' : '' }}">
                <a class="nav-link" href="/organisations">Organisations</a>
            </li>
        @endguest
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>