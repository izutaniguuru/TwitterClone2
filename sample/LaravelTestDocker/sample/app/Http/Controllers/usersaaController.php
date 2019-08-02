<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
  public function index ()
  {
    $hello = 'Hello,World!';
    $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

    return view('users', compact('hello', 'hello_array'));
  }
}
