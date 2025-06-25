<x-main>
    <x-slot name='title'>Lista libri</x-slot>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>
    <div class="d-flex justify-content-between">
        <h1>Lista libri</h1>
        <div><a href="{{ route('create') }}" class="btn btn-success">Crea libro</a></div>

    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>

                    <td> {{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td><a class="btn btn-info" href="{{ route('show', ['book' => $book]) }}">Dettagli</a>
                        <a class="btn btn-warning" href="{{ route('edit', ['book' => $book]) }}">Modifica</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#{{ $book->id }}">
                            Elimina
                        </button>
                        <div class="modal fade" id="{{ $book->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">elimina</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            <!-- Modal -->


        </tbody>
    </table>




    <!-- Button trigger modal -->







</x-main>
