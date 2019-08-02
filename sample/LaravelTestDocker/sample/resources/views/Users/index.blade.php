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
           <td><button type="button"class="follow">follow
           </button></td>
        </tr>

    @endforeach
  </table>

@endsection
