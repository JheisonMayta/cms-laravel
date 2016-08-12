@extends('layouts.default')

@section('content')
  @include('partials.errors')
  <form class="" action="{{ route('post_store_path') }}" method="post">
    {{ csrf_field() }}
    <label for="title">Título</label>
    <input class="form-control" type="input" name="title" value="{{ old('title') }}">
    <br>
    <label for="body">Contenido</label>
    <textarea class="form-control" name="body" rows="8" cols="30">{{ old('body') }}</textarea>
    <br>
    <input class="btn btn-success" type="submit" name="save" value="Guardar">
  </form>
@endsection
