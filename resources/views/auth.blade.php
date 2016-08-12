@extends('layouts.default')

@section('content')
  <h1>Iniciar Sesión:</h1>
  @include('partials.errors')
  <form class="" action="{{route('auth_store_path')}}" method="post">
    {{ csrf_field() }}
    <label for="email">Email:</label>
    <input class="form-control" type="text" name="email" value="">
    <label for="email">Password:</label>
    <input class="form-control" type="password" name="password" value="">
    <br>
    <input class="btn btn-primary" type="submit" value="Iniciar">
  </form>
@endsection
