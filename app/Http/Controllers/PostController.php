<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PostController extends Controller
{
    public function Dashboard() {
        $posts = DB::table('post')->get();
        return view('dashboard', [
            'posts' => $posts
        ]);
    }

    public function Profile() {
        return view('profile');
    }

    // create & store
    public function CreatePost() {
        return view('createpost');
    }

    public function Store(Request $request) {
        $posts = new Post;
        $posts->judul = $request->judul;
        $posts->deskripsi = $request->deskripsi;
        $posts->save();
        $isSave = $posts->save();

        return redirect('/post/create',);
    }

    // Update
    public function Edit($id) {
        $posts = Post::find($id);
        return view('update', [
            'posts' => $posts
        ]);
    }

    public function Update(Request $request, $id) {
        $posts = Post::find($id);
        $posts->judul = $request->judul;
        $posts->deskripsi = $request->deskripsi;
        $posts->save();
        
        return redirect('/');
    }

    // delete
    public function Delete($id) {
        $posts = Post::find($id);
        $posts->delete();
        
        return redirect('/');
    }
}