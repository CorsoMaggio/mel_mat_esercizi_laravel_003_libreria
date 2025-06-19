<x-main>
    <x-slot name='title'>Lista libri</x-slot>
    <h1>Lista libri</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->id }}-Titolo: {{ $book->name }},{{ $book->year }}</li>
        @endforeach
    </ul>

</x-main>
