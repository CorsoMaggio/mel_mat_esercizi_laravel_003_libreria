<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">libreria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @auth

                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao,{{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <div class="col-auto">
                                        <button type="submit" class="dropdown-item">logout</button>

                                    </div>
                                </form>
                            </li>
                            <li><a class="dropdown-item" aria-current="page" href="{{ route('create') }}">Crea libro</a>
                            </li>
                            <li><a class="dropdown-item" aria-current="page" href="{{ route('index') }}">Lista libri</a>




                        </ul>
                    </div>
                @else
                    <a class="nav-link" aria-current="page" href="{{ route('register') }}">Registrati</a>
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Accedi</a>
                @endauth






            </div>
        </div>
    </div>
</nav>
