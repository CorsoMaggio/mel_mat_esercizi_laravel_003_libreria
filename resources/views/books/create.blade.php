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
    <form action="/save" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Mario" name="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Anno</label>
            <input type="text" class="form-control" value="{{ old('year') }}" id="exampleFormControlInput1"
                placeholder="es.Rossi" name="year">
            @error('year')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Pagine</label>
            <input type="text" value="{{ old('pages') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" name="pages">
            @error('pages')
                {{ $message }}
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">invia</button>

    </form>



</x-main>
