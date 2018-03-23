<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog');
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

      $users = DB::table('user')->get();

      return view('single', ['blog' => $id, 'users' => $users]);
    }
}
