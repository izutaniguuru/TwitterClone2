<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\followuser;

class UsersController extends Controller
{
    public function index(Request $reqest)
    {
        $items = User::all();
        return view('Users.index',['items' => $items]);
    }
}
