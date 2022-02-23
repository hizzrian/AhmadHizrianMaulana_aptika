@section('container')
@extends('layouts.main')

@if(session()->has('loginError'))
<div class="alert alert-danger">
    {{ session()->get('loginError') }}
</div>
@endif
<main class="form-signin">
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
  <!-- <small class="d-block text-center">Not Registered ? <a href="/register">Register now</a></small> -->
</main>
@endsection