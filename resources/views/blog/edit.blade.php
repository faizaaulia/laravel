@extends('layout.master')

@section('title', 'Home')

@section('content')
  <h1>Edit Blog {{$blog->title}}</h1>
  <form action="/blog/{{$blog->id}}" method="post">
    <input type="text" name="title" value="{{$blog->title}}"><br>
    <textarea name="description" rows="8" cols="80">{{$blog->description}}</textarea><br>

    <input type="submit" name="submit" value="UPDATE">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
  </form>
@endsection
