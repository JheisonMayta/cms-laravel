<?php

namespace CMSlaravel\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use CMSlaravel\Http\Requests;

class AuthController extends Controller
{
    public function index()
    {
      return view('auth');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if (!auth()->attempt($request->only(['email', 'password']))) {
        return redirect()->route('auth_show_path')->withErrors('No encontramos al usuario');
      }

      return 'Autenticado';
    }

    public function destroy()
    {
      auth()->logout();
      return redirect()->route('auth_show_path');
    }
}
