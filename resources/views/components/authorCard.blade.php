<div class="card" style="width: 18rem;">
    <h5>{{ $author->id }}-: Nome{{ $author->name }}</h5>
    <p>Anno: {{ $author->year }}</p>
    {{ $slot }}
</div>
