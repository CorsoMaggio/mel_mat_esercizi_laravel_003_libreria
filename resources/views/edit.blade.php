<x-main>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>

    <x-slot name='title'>Crea nuovo libro</x-slot>
    <h1>Inserisci un nuovo libro!</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('update', ['book' => $book->id]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" value="{{ $book->name }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Divina Commedia" name="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Anno</label>
            <input type="text" class="form-control" value="{{ $book->year }}" id="exampleFormControlInput1"
                placeholder="anno pubblicazione" name="year">
            @error('year')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Pagine</label>
            <input type="text" value="{{ $book->year }}" class="form-control" id="exampleFormControlInput1"
                placeholder="numero pagine" name="pages">
            @error('pages')
                {{ $message }}
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">aggiorna</button>

    </form>



</x-main>
