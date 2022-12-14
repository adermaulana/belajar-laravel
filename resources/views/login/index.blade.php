@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin">
            <img style="margin:auto; display:block;" src="img/{{ $image }}"  width="100px" class="img-thumbnail mt-3" alt="">
            <h1 class="h3 mb-3 fw-normal text-center mt-3">Please Login</h1>

          <form>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Login</button>
          </form>
          <small class="d-block text-center">Not Registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection