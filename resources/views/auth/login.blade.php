@extends('layouts.app')

@section('title', 'Welcome My Friend')

@section('content')
<div class="card text-center my-5 mx-auto" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
    @if (session()->has('error_message'))
      <div class="alert alert-danger">
        {{ session()->get('error_message') }}
      </div>
    @endif
    <form action='{{ url("login") }}' method="POST" class="form-control">
      @csrf
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <a href="{{ url('login') }}" type="submit" class="btn btn-primary">Login</a>
    </form>
  </div>
</div>
@endsection