@extends('layouts.default')

@section('content')
  <h1>Editar Post</h1>
  @include('partials.errors')
  <form class="" action="{{ route('post_patch_path', $post->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    <label for="title">Título</label>
    <input class="form-control" type="input" name="title" value="{{ $post->title }}">
    <br>
    <label for="body">Contenido</label>
    <textarea class="form-control" name="body" rows="8" cols="30">{{ $post->body }}</textarea>
    <br>
    <input class="btn btn-success" type="submit" name="save" value="Guardar">
  </form>
@endsection
