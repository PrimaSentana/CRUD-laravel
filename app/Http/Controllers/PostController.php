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

    public function delete($id) {
        $posts = Post::find($id);
        $posts->delete();
        
        return redirect('/');
    }
}