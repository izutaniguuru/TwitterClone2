<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowUserController extends Controller
{
  public function index(Request $reqest)
  {
      $followuser = User::all();
      return view('Users.index',['items' => $items]);
  }

  public function store(Request $request)
      {
          $followedUser = User::findOrFail($request->input('id'));
          FollowUser::firstOrCreate([
              'user_id' => Auth::id(),
              'followed_user_id' => $followedUser->id,
          ]);
          return response()->json(['result' => true]);
      }

      public function destroy($id)
      {
          $followedUser = User::findOrFail($id);
          $user = Auth::user();
          $user->followUsers()->detach($followedUser->id);
          return response()->json(['result' => true]);
      }


      public function update(Request $request) {

            //ログイン中のユーザーのid を取得
            dd(Auth::id());

            return redirect()->route('home');
        }



}
