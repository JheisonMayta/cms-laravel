<?php

namespace CMSlaravel\Http\Controllers;

use Illuminate\Http\Request;

use CMSlaravel\Http\Requests;

use CMSlaravel\Post;

class HomeController extends Controller
{
    public function index()
    {
      $posts = Post::with('author')->get();
      return view('home', ['posts' => $posts]);
    }
}
