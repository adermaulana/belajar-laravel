<style>
        #navbar {

        background-color : salmon;

    }

    #warna {
        text-decoration :none;
    }

    .text-decoration-none {
        color :salmon;
    }

</style>

@extends('layouts.main')

@section('container')
<h1 class="mb-4 mt-5">{{ $title }} </h1>

@if ($posts->count())

<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->nama }}" class="card-img-top" alt="{{ $posts[0]->category->nama }}">
  <div class="card-body text-center">
    <h3 class="card-title"><a class="text-decoration-none" href="/posts/{{ $posts[0]->slug  }}">{{ $posts[0]->title }}</a> </h3>
    <p class="mb-3">
        <small class="text-muted">    
        By <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }} </a> in<a id="warna" href="/categories/{{ $posts[0]->category->slug }}"> {{ $posts[0]->category->nama   }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
    </p>
        
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a class="text-decoration-none btn btn-dark"  href="/posts/{{ $posts[0]->slug  }}">Read More</a>

  </div>
</div>

@else
    <p class="text-center fs-4">No Posts Found.</p>
@endif


<div class="container">
    <div class="row">

        @foreach($posts->skip(1) as $post)

        <div class="col-md-4 mb-3">
             <div class="card">
                <div class="position-absolute p-2  rounded" style="background-color:rgba(0,0,0,0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->nama }}</a> </div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->nama }}" class="card-img-top" alt="{{ $post->category->nama }}">
                 <div class="card-body">
                  <h5 class="card-title">{{ $post -> title }}</h5>
                  <p class="mb-3">
                     <small class="text-muted">    
                     By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }} </a> {{ $post->created_at->diffForHumans() }}
                    </small>
                 </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post -> slug  }}" class="btn " style="background-color:rgba(250,128,114,0.7);color:white;">Read More</a>
                 </div>
            </div>
        </div>

        @endforeach

    </div>
</div>




@endsection

