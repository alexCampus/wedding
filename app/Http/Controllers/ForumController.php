<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Post $post)
    {
        dd($post::find(1)->categorie());
        return view('forum');
    }

    public function onePost()
    {
        return view('onePostForum');
    }

    public function formForum(Categorie $categorie)
    {
        $cat = $categorie::all();
        return view('formForum', ['categories' => $cat]);
    }

    public function storePost(Request $request, Post $post)
    {
        $post->title        = $request->input('title');
        $post->content      = $request->input('content');
        $post->categorie_id = $request->input('categories');

        $post->save();

        return redirect('/forum?#forum');
    }
}
