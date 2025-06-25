<x-main>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>

    <x-slot name='title'>Crea nuovo autore</x-slot>
    <h1>Inserisci un nuovo autore!</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('authors.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" value="{{ old('firstName') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Mario" name="firstName">
            @error('firstName')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cognome</label>
            <input type="text" class="form-control" value="{{ old('lastName') }}" id="exampleFormControlInput1"
                placeholder="es.Rossi" name="lastName">
            @error('lastName')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Data di nascita</label>
            <input type="date" value="{{ old('birthDate') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" name="birthDate">
            @error('birthDate')
                {{ $message }}
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">invia</button>

    </form>



</x-main>
