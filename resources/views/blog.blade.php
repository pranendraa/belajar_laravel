@extends('layouts.main')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
    <h1 class="mb-5">{{ $title }}</h1>

=======
    
>>>>>>> 178970435b1bac7323e867e03ac941084553d809
=======
    
>>>>>>> 178970435b1bac7323e867e03ac941084553d809
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-5">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        in <a href="/categories/{{ $post->category->slug}}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- <h5>By : {{ $post["author"] }}</h5> --}}
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More..</a>
    </article>
    @endforeach

@endsection