@extends('layout.master')

@section('title', 'Home')

@section('content')
  <h1>Ini Blog</h1>
  @foreach ($blog as $blog)
    <a href="blog/{{ $blog->id }}"> <li> {{ $blog->title }} </li> </a>
  @endforeach
@endsection
