<div class="card" name='card' style="width: 18rem;">
    <h5>{{ $book->id }}-Titolo: {{ $book->name }}</h5>
    <p>Anno: {{ $book->year }}</p>
    {{ $slot }}



</div>
