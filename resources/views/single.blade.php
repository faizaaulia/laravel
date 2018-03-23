@extends('layout.master')

@section('title', 'Single Home')

@section('content')
  <h1>Welcome, ini Single Home {{ $blog }}</h1>

  @if($blog > 5)
    <p>id home lebih dari 5</p>
  @else
    <p>id home kurang dari 5</p>
  @endif
@endsection
