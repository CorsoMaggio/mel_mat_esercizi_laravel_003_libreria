<x-main>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}

            </div>
        @endif
    </div>

    <x-slot name='title'>Crea nuova categoria</x-slot>
    <h1>Inserisci una nuova categoria!</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Fantascienza" name="name">
            @error('firstName')
                {{ $message }}
            @enderror
        </div>


        <button class="btn btn-primary" type="submit">invia</button>

    </form>



</x-main>
