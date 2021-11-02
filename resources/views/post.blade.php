@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- {{ $post->body }} --}}
    {{-- tanpa escape untuk rendering tag html e.g. <p> --}}
        {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>

@endsection