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
                @else
                    <div><a href="{{ route('create') }}">Crea un nuovo libro</a> os
                        <a href="{{ route('index') }}">visualizza la lista</a>
                    </div>

                @endguest



            </div>
        </div>
    </section>
</x-main>
