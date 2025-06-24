<x-main>
    <x-slot name="title">dettaglio</x-slot>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $book->name }}</h5>

            <p class="card-text">Prezzo:{{ $book->price ? $book->price : 'inestimabile' }}</p>
            <p class="card-text">Anno pubblicazione:{{ $book->year }}</p>
            <p class="card-text">Pagine:{{ $book->pages }}</p>

        </div>
</x-main>
