<x-main>
    <x-slot name='title'>Lista libri</x-slot>
    <h1>Lista libri</h1>
    <div class="card-group">
        <x-card :book="$book">
            <p>Numero pagine: {{ $book->pages }}</p>
            <p>autore: {{ $book->author->firstName ?? 'Non assegnato' }}
                {{ $book->author->lastName ?? '' }}</p>
        </x-card>
    </div>

</x-main>
