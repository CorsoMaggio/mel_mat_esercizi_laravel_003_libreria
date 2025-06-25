<x-main>
    <x-slot name='title'>Lista libri</x-slot>
    <h1>Lista libri</h1>
    <div class="card-group">
        <x-card :book="$book">
            <p>Numero pagine: {{ $book->pages }}</p>
            <p>autore: {{ $book->author->firstName ?? 'Non assegnato' }}
                {{ $book->author->lastName ?? '' }}</p>
            <div>
                @foreach ($book->categories as $category)
                    <span class="badge text-bg-info">{{ $category->name }}</span>
                @endforeach
            </div>


        </x-card>
    </div>

</x-main>
