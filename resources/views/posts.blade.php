@extends('layouts.main')

@section('container')

@foreach ($postsy as $post)

<article class="mb-4">
    <h2 class="mb-3">
        
    <a style="color:salmon;" href="/posts/{{ $post -> id  }} ">{{ $post -> title }} </a>

    </h2>
    <h5>Dibuat Oleh : {{ $post->author }} </h5>
    <p>{{ $post->excerpt }} </p>
</article> 

@endforeach

@endsection

