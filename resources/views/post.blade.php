@extends('layouts.default')

@section('content')
<h1>{{$post->title}}</h1>
<h2>Author: <small>{{$post->author->name}}</small></h2>
<p>
  {{$post->body}}
</p>
@endsection
