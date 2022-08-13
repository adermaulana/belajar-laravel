@extends('layouts.main')

@section('container')

<h1>About Me</h1>
    <h3> {{ $name }} </h3>
    <h3>{{ $email }} </h3>
    <img style="height:200px" width="200px"  class="img-thumbnail rounded-circle"  src=" img/{{ $image }} " alt="Ade Rahmat Maulana">

@endsection



