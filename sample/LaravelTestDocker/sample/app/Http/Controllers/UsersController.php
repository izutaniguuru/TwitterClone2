<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\followuser;
use App\Auth;

class UsersController extends Controller
{
    public function index(Request $reqest)
    {
        $items = User::all();
        return view('Users.index',['items' => $items]);
    }

    public function follow($id)
      {
        User::where('id',$id)->update(['follow'=> 1]);
        return redirect('/users');
      }
      public function unfollow($id)
      {
        User::where('id',$id)->update(['follow'=> 0]);
        return redirect('/users');
      }


    public function form_post(Request $request) {

        //ポストデータすべての取得
        $post_data = $request::all();

        return view('test.form_post',compact('post_data'));
    }
}
