<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
      //insert biasa
      // $blog = new Blog;
      // $blog->title = 'Judul Blog Tiga';
      // $blog->description = 'Isi dari "Judul Blog Tiga" yaaa';
      // $blog->save();

      //insert mass assignment
      // Blog::create([
      //   'title' => 'Judul Blog Lima',
      //   'description' => 'Isi dari "Judul Blog Lima" yaaa'
      // ]);

      //updated
      // $blog = Blog::where('title', 'Judul Blog Lima')->first();
      // //kalo update dipilih dulu mana yg mau diupdate, terus ditaruh di variabel
      // $blog->title = 'Judul Blog Enam';
      // $blog->description = 'Isi dari "Judul Blog Enam" yaaa';
      // $blog->save();

      //update mass assignment
      // Blog::find(6)->update([
      //   'title' => 'Judul Blog Enam lalala',
      //   'description' => 'Isi dari "Judul Blog Enam" yaaalalala'
      // ]);

      //delete
      // $blog = Blog::find(6);
      // $blog->delete();

      //delete ke dua
      // Blog::destroy(5);

      //restore soft deleted
      //Blog::withTrashed()->restore();

      $blog = Blog::all();

      return view('blog/blog', ['blog' => $blog]);
    }

    public function create()
    {
      return view('blog/create');
    }

    public function store(Request $request)
    {
      Blog::create([
        'title' => $request->title,
        'description' => $request->description
      ]);

      return redirect('blog');
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

      $blog = Blog::findOrFail($id); //kalo pake find() tampilan errornya banyak, kalo findOrFail error "Not Found"

      return view('blog/single', ['blog' => $blog]);
    }

    public function edit($id)
    {
      $blog = Blog::find($id);

      return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
      Blog::find($id)->update([
        'title' => $request->title,
        'description' => $request->description
      ]);
      return redirect('blog/' . $id);
    }

    public function destroy($id)
    {
      Blog::destroy($id);
      return redirect('blog');
    }
}
