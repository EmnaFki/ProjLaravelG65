<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $art->designation }}</h5>
        <p class="card-text">{{ $art->prix }} TND</p>
        <a href="{{ route('shop.show', ['slug' => $art->slug, 'article' => $art->id]) }}" class="btn btn-primary">
            Lire la suite</a>
    </div>
</div>
