@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- {{ $post->body }} --}}
    {{-- tanpa escape untuk rendering tag html e.g. <p> --}}
        
    <p>By. Wahyu in <a href="categories/{{ $post->category['slug'] }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>

@endsection