@extends('layouts.default')

@section('content')
  <div class="panel lead">
    <p>
      ¿Está seguro que quiere eliminar el post con título: <strong>{{ $post->title }}</strong>?
    </p>
  </div>
  <form action="{{ route('posts_delete_path', $post->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <a class="btn btn-default" href="{{ url('/') }}">
          <i class="fa fa-trash"></i> Cancelar
      </a>
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i> Eliminar
      </button>
  </form>

@endsection
