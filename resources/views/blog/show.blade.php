@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="breadcrumb-item active">{{ $post->title }}</li>
                    </ol>
                </nav>

                <article class="blog-post">
                    @if ($post->image)
                        <img src="{{ $post->image }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
                    @endif

                    <h1 class="display-4 mb-4">{{ $post->title }}</h1>

                    <div class="metadata mb-4">
                        <span class="text-muted">
                            <i class="fas fa-calendar"></i>
                            {{ $post->created_at->format('F j, Y') }}
                        </span>
                        @if ($post->tags)
                            <div class="mt-2">
                                @foreach ($post->tags as $tag)
                                    <span class="badge bg-secondary me-1">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="content">
                        {!! $post->content !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
