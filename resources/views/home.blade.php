@extends('layouts.default')

@section('content')
  <h1>Estos son nuestros posts:</h1>
  <ul>
    @foreach($posts as $post)
      <li>
        <a href="{{ route('post_show_path', $post->id) }}">{{$post->title}}</a> - <small>{{$post->author->name}}</small>
      </li>
    @endforeach
  </ul>
@endsection
