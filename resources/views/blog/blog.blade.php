@extends('layout.master')

@section('title', 'Home')

@section('content')
  <h1>Daftar Blog</h1>
  <a href="/blog/create"><h3>Tambah Blog</h3></a>
  <table border="1">
    <thead>
      <tr>
        <td>No.</td>
        <td>Judul</td>
        <td>Deskripsi</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
      @endphp
      @foreach ($blog as $blog)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$blog->title}}</td>
          <td>{{$blog->description}}</td>
          <td>
            <a href="blog/{{ $blog->id }}"> Lihat </a>
            <a href="blog/{{ $blog->id }}/edit"> Edit </a>
            {{-- <form action="/blog/{{$blog->id}}" method="post">
              <input type="submit" name="submit" value="Hapus">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
            </form> --}}
            <a href="blog/{{ $blog->id }}"> Hapus </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
