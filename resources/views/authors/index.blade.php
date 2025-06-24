<x-main>
    <x-slot name='title'>Lista autori</x-slot>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>
    <h1>Lista autori</h1>
    <div class="card-group">
        @foreach ($authors as $author)
            <x-authorCard :author="$author">
                <a href="{{ route('authors.show', ['author' => $author]) }}">Dettagli</a>
                <a href="{{ route('authors.edit', ['author' => $author]) }}">Modifica</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $author->id }}">
                    Elimina
                </button>

                <!-- Modal -->
                <div class="modal fade" id="{{ $author->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" action="{{ route('destroy', ['author' => $author->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                sicuro di voler eliminare <b>"{{ $author->firstName }} {{ $author->lastName }}"</b>?

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">elimina</button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-authorCard>
        @endforeach
    </div>

</x-main>
