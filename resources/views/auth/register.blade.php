@extends('layouts.app')

@section('title', 'Welcome My Friend')

@section('content')
<div class="card my-5 mx-auto" style="width: 40%;">
  <div class="card-body">
    <h5 class="card-title text-center">Sign Up</h5>
    @if (session()->has('error_message'))
      <div class="alert alert-danger">
        {{ session()->get('error_message') }}
      </div>
    @endif
    <form action='{{ url("register") }}' method="POST" class="form-control">
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
          </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
          </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="password" name="password_confirmation">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary mx-auto">Sign Up</button>
        </div>
        
    </form>
  </div>
</div>
@endsection