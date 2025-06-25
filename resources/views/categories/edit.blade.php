<x-main>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>

    <x-slot name='title'>Modifica autore</x-slot>
    <h1>Modifica</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('authors.update', ['author' => $author->id]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" value="{{ $author->firstName }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Mario" name="firstName">
            @error('firstName')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cognome</label>
            <input type="text" class="form-control" value="{{ $author->lastName }}" id="exampleFormControlInput1"
                placeholder="es.Rossi" name="lastName">
            @error('lastName')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Data di nascita</label>
            <input type="date" value="{{ $author->birthDate }}" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" name="birthDate">
            @error('birthDate')
                {{ $message }}
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">invia</button>

    </form>



</x-main>
