@extends('layouts.main')

@section('container')
<main class="form-registration">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Register Form</h1>
    <div class="form-floating">
      <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" id="name" required >
      <label for="name">Name</label>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" id="username" required >
      <label for="username">Username</label>
        @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
      <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
  <small class="d-block text-center">Already Registered ? <a href="/login">Login</a></small>
</main>
@endsection