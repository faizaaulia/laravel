<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
      $blog = Blog::all();

      return view('blog', ['blog' => $blog]);
    }

    public function show($id)
    {
      //insert
      // DB::table('user')->insert([
      //   ['username' => 'rahma', 'password' => 'rahma'],
      //   ['username' => 'rahma', 'password' => 'rahma']
      // ]);

      //update
      // DB::table('user')->where('id', '3')->update(
      //   ['username' => 'putra', 'password' => 'putra']
      // );

      //delete
      // DB::table('user')->where('id', '3')->delete();

      $blog = Blog::find($id);
      
      return view('single', ['blog' => $blog]);
    }
}
