@extends('layout.master')

@section('title', 'Single Home')

@section('content')

  <h1> {{ $blog->title }} </h1>
  <p> {{ $blog->description }} </p>
  <br>
  <a href="{{$blog->id}}/edit"> Edit Blog {{$blog->title}}</a>
@endsection
