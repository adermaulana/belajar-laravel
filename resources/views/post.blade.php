<style>
    #navbar {

        background-color : salmon;

    }

    #back {
        color : salmon;
    }

    .warna {
        color : salmon;
    }

    .warna:hover {
        color :salmon;
    }


</style>

@extends ('layouts.main')

@section ('container')

<h2 >{{ $postman->title }} </h2>

<p class="mb-3"><a class="warna text-decoration-none" href="#">{{ $postman->user->name }}</a> in<a class="warna text-decoration-none" href="/categories/{{ $postman->category->slug }}"> {{ $postman->category->nama }}</a></p>

<p> {!! $postman->body !!} </p>

<a class="d-block" id="back" href="/posts">Back To Post</a>
@endsection