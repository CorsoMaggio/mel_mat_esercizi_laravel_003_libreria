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
    <form action="{{ route('saveBook') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Cime Tempestose" name="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Anno</label>
            <input type="text" class="form-control" value="{{ old('year') }}" id="exampleFormControlInput1"
                placeholder="es.1580" name="year">
            @error('year')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Pagine</label>
            <input type="text" value="{{ old('pages') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="ex.580" name="pages">
            @error('pages')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Prezzo</label>
            <input type="text" value="{{ old('price') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="ex.10.00" name="price">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Autore</label>
            <select class="form-select" name="author_id" aria-label="Default select example">
                <option value="" selected>seleziona un autore</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->firstName }} {{ $author->lastName }}</option>
                @endforeach


            </select>
            @error('author_id')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            @foreach ($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" name="categories[]" type="checkbox" value=""
                        id="checkDefault-{{ $category->id }}">
                    <label class="form-check-label" for="checkDefault">
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach


            @error('category')
                {{ $message }}
            @enderror
        </div>


        <button class="btn btn-primary" type="submit">invia</button>

    </form>



</x-main>
