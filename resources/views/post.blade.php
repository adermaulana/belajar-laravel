<style>
    #navbar {

        background-color : salmon;

    }

    #back {
        color : salmon;
    }
</style>

@extends ('layouts.main')

@section ('container')

<h2 >{{ $postman->title }} </h2>
<h5 class="mb-3">{{ $postman->author }}</h5>
<p> {!! $postman->body !!} </p>
<a id="back" href="/posts">Back To Post</a>
@endsection