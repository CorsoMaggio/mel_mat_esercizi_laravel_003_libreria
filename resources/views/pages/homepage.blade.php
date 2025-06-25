<x-main>
    <x-slot name="title">Homepage</x-slot>
    <section>
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-body-emphasis">Benvenuti nella homepage!</h1>
                @guest
                    <p class="col-lg-8 mx-auto lead">
                        Esplora i nostri prodotti oppure
                    </p>
                    <div><a href="{{ route('login') }}">Accedi</a> o
                        <a href="{{ route('register') }}">Registrati</a>
                    </div>
                @else
                    <div>
                        <a class="btn btn-secondary" href="{{ route('create') }}">Crea un nuovo libro</a>
                        oppure
                        <a class="btn btn-secondary" href="{{ route('authors.create') }}">Crea un nuovo autore</a>
                    </div>
                    <br>
                    <div>
                        <a class="btn btn-secondary" href="{{ route('index') }}">visualizza la lista dei libri</a>
                        oppure
                        <a class="btn btn-secondary"href="{{ route('authors.index') }}">visualizza la lista degli autori</a>

                    </div>


                @endguest
            </div>
        </div>
    </section>
    @guest
        <section>

            <div>
                <h2>Lista libri disponibili</h2>
                <div class="card-container-fluid d-flex">
                    @foreach ($books as $book)
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->name }}</h5>
                                <p class="card-text">Prezzo:{{ $book->price ? $book->price : 'inestimabile' }}</p>
                                <a href="{{ route('detail', ['book' => $book]) }}" class="btn btn-primary">Dettagli</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endguest










</x-main>
