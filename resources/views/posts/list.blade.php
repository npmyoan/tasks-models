<div>
    @forelse ($posts as $post)
        <div class="card">
            <div class="card-title">
                {{ $post->title }}
            </div>
            <div class="card-body">
                {{ $post->content }}
            </div>
        </div>
    @empty
        <h2>No existen post</h2>
    @endforelse
</div>
