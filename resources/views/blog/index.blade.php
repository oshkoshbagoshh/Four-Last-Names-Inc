@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 class="display-4">Blog Posts</h1>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-outline-primary" id="shuffle-posts">
                    <i class="fas fa-random"></i> Shuffle
                </button>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Sort By
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?sort=latest">Latest</a></li>
                        <li><a class="dropdown-item" href="?sort=oldest">Oldest</a></li>
                        <li><a class="dropdown-item" href="?sort=title">Title</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="posts-container">
            @foreach ($posts as $post)
                <div class="col-md-6 mb-4 post-card">
                    <div class="card h-100">
                        @if ($post->image)
                            <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                            @if ($post->tags)
                                <div class="mb-2">
                                    @foreach ($post->tags as $tag)
                                        <span class="badge bg-secondary me-1">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                            @endif
                            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('shuffle-posts').addEventListener('click', function() {
                const container = document.getElementById('posts-container');
                const cards = Array.from(container.getElementsByClassName('post-card'));

                for (let i = cards.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    container.appendChild(cards[j]);
                }
            });
        </script>
    @endpush
@endsection
