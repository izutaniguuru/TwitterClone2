@extends('layouts.app')



@section('menubar')
  @parent

@endsection

@section('content')




  <div class="card-body">
    <meta charset="utf-8">
    <table cellpadding="0" cellspacing="0">
      <table border="5">
<link href="css/styles.css" rel="stylesheet" type="text/css">
   <table>
     <tr><th>id</th><th>name</th><th>email</th></tr>　　　
     @foreach ($items as $item)
        <tr>
  　　　　　    <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>

           @if ($item->follow == 0)
                <td>
                  <form action="/follow/{{ $item->id }}" method="post">
                   @csrf
                   @method('put')
                    <button type="submit" class="btn btn-outline-success" name="button">フォローする</button>
                  </form>
                </td>
                @else
                <td>
                  <form action="/unfollow/{{ $item->id }}" method="post">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn btn-outline-danger" name="button">フォローを外す</button>
                  </form>
                </td>
                @endif
           <?php
           // {!! Form::open(['id' => 'formTweet', 'url' => 'users/follow/', 'enctype' => 'multipart/form-data']) !!}
           //     {{Form::hidden('followId', $user->id, ['id' => 'followId'])}}
           //     <button type="submit" class="btn btn-light">
           //         {{ __('フォローする') }}
           //     </button>
           // {!! Form::close() !!}
           ?>


        </tr>

    @endforeach
  </table>

@endsection
