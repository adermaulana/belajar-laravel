<style>
    #navbar {

        background-color : salmon;

    }

    #back {
        color : salmon;
    }
</style>

@extends('layouts.main')

@section('container')
<h1> Post Category : {{ $category }} </h1>
@foreach ($posts as $post)

<article class="mb-4">
    
    <h2 class="mb-3">
        
    <a style="color:salmon;" href="/posts/{{ $post -> slug  }} ">{{ $post -> title }} </a>

    </h2>
    <h5>Dibuat Oleh : {{ $post->author }} </h5>
    <p>{{ $post->excerpt }} </p>
</article> 

@endforeach

@endsection

