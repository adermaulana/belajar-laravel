@extends('layouts.main')

@section('container')
<h1>{{ $title }} </h1>
@foreach ($postsy as $post)

<article class="mb-4">
    
    <h2 class="mb-3">
        
    <a style="color:salmon;" href="/posts/{{ $post -> slug  }} ">{{ $post -> title }} </a>

    </h2>
    <h5>Dibuat Oleh : {{ $post->author }} </h5>
    <p>{{ $post->excerpt }} </p>
</article> 

@endforeach

@endsection
