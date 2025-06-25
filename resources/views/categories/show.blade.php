<x-main>
    <x-slot name='title'>Indice categoria</x-slot>
    <h1>Indice autore: {{ $author->firstName }} {{ $author->lastName }}</h1>
    <div class="card-group">
        <x-authorCard :author="$author">
            <p>Anno di nascita: {{ $author->birthDate }}</p>
            <h6>Lista libri:</h6>
            @foreach ($author->books as $book)
                <p> Titolo:<a href="{{ route('show', ['book' => $book->id]) }}">{{ $book->name }}</a></p>
            @endforeach

        </x-authorCard>
    </div>

</x-main>
