@extends('layout.master')

@section('title', 'Home')

@section('content')
  <h1>Tambah Blog</h1>
  <form action="/blog" method="post">
    <input type="text" name="title" value=""><br>
    <textarea name="description" rows="8" cols="80"></textarea><br>

    <input type="submit" name="submit" value="Create">

    {{ csrf_field() }}
  </form>
@endsection
