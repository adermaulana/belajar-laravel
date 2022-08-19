<style>
        #navbar {

        background-color : salmon;

    }

    #warna {
        text-decoration :none;
    }

</style>

@extends('layouts.main')

@section('container')
<h1>{{ $title }} </h1>
@foreach ($postsy as $post)

<article class="mb-5 border-bottom pb-4">
    
    <h2 class="mb-1">
    <a style="color:salmon;" href="/posts/{{ $post -> slug  }} ">{{ $post -> title }} </a>
    </h2>
    <p class="mb-3">By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }} </a> in<a id="warna" href="/categories/{{ $post->category->slug }}"> {{ $post->category->nama   }}</a></p>
    
    <p>{{ $post->excerpt }} </p>

    <a class="text-decoration-none" href="/posts/{{ $post -> slug  }}">Read More..</a>
</article> 

@endforeach

@endsection

