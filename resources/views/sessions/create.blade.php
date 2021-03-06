@extends('layouts.master')

@section('content')

<form class="form-signin" method="POST" action="/login" >
    @csrf
    
    <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="logo" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">log in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

</form>
@include('layouts.errors')

@endsection