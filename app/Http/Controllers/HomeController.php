<?php

namespace CMSlaravel\Http\Controllers;

use Illuminate\Http\Request;

use CMSlaravel\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
      return view('home');
    }
}
