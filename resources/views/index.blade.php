<x-main>
    <x-slot name='title'>Lista libri</x-slot>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>
    <h1>Lista libri</h1>
    <div class="card-group">
        @foreach ($books as $book)
            <x-card :book="$book">
                <a href="{{ route('show', ['book' => $book]) }}">Dettagli</a>
                <a href="{{ route('edit', ['book' => $book]) }}">Modifica</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $book->id }}">
                    Elimina
                </button>

                <!-- Modal -->
                <div class="modal fade" id="{{ $book->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" action="{{ route('destroy', ['book' => $book->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                sicuro di voler eliminare <b>"{{ $book->name }}"</b>?

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">elimina</button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-card>
        @endforeach
    </div>

</x-main>
