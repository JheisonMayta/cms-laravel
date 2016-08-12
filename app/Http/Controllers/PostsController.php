<?php

namespace CMSlaravel\Http\Controllers;

use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

use CMSlaravel\Http\Requests;
use CMSlaravel\Post;

class PostsController extends Controller
{

    // CREATE ----------------------------------------------
    public function create()
    {
      return view('posts.create');
    }

    // READ ------------------------------------------------
    public function show($id)
    {
      $post = Post::findOrFail($id);
      return view('post', ['post'=>$post]);
    }

    // UPDATE ----------------------------------------------
    public function edit($id)
    {
      $post = Post::findOrFail($id);

      return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
      $post = Post::findOrFail($id);
      $post->title = $request->get('title');
      $post->body = $request->get('body');
      $post->author_id = \Auth::id();
      $post->save();
      return redirect()->route('post_show_path', $post->id);
    }
    # Comentario
    // DELETE ----------------------------------------------
    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      return view('posts.delete', ['post'=> $post]);
    }

    public function delete($id)
    {
      Post::destroy($id);
      return redirect('/');
    }

    public function store(Request $request)
    {
      $validator = \Validator::make($request->all(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      if ($validator->fails()) {
        return redirect()->route('post_create_path')->withErrors($validator)->withInput();
      }

      $post = new Post;
      $post->title = $request->get('title');
      $post->body = $request->get('body');
      $post->author_id = \Auth::id();
      $post->save();

      return redirect()->route('post_show_path', $post->id);
    }

}
