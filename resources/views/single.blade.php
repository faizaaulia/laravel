@extends('layout.master')

@section('title', 'Single Home')

@section('content')
  <h1>Welcome, ini Single Blog {{ $blog }}</h1>

  <table border="1">
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Password</th>
    </tr>
    <tbody>
      @foreach ($users as $users)
        <tr>
          <td>{{$users->id}}</td>
          <td>{{$users->username}}</td>
          <td>{{$users->password}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  @if (count($users) >= 5)
    <p>user lebih dari 5</p>
  @else
    <p>user kurang dari 5</p>
  @endif

@endsection
