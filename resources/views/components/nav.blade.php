<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">libreria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @auth
                    <p>Ciao,{{ Auth::user()->email }}</p>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">logout</button>
                        </div>
                    </form>
                @else
                    <a class="nav-link" aria-current="page" href="{{ route('create') }}">Crea libro</a>
                    <a class="nav-link" aria-current="page" href="{{ route('register') }}">Registrati</a>
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Accedi</a>
                @endauth






            </div>
        </div>
    </div>
</nav>
