@extends('layouts.default')

@section('content')
  <a class="btn btn-primary" href="{{ route('post_create_path') }}">Crear Post</a>
  <hr>
  <h1>Estos son nuestros posts:</h1>
  <ul class="list-unstyled">
    @foreach($posts as $post)
      <li>
        <a href="{{ route('post_show_path', $post->id) }}">{{$post->title}}</a> - <small>{{$post->author->name}}</small> - [<a href="{{ route('posts_delete_path', $post->id) }}">Eliminar</a>]
      </li>
    @endforeach
  </ul>
@endsection
