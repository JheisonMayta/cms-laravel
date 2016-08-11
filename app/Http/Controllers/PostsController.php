<?php

namespace CMSlaravel\Http\Controllers;

use Illuminate\Http\Request;

use CMSlaravel\Http\Requests;

use CMSlaravel\Post;

class PostsController extends Controller
{
    public function index()
    {
      # code...
    }

    public function show($id)
    {
      $post = Post::findOrFail($id);
      return view('post', ['post'=>$post]);
    }
}
