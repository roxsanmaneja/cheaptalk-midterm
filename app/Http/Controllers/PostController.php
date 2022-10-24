<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('pages.dashboard', compact('posts'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            '_id' => 'required|numeric',
            'post' => 'required',
        ]);

        Post::create([
            'user_id'   => auth()->user()->id,
            'category_id' => $request->category_id,
            'post'      => $request->post
        ]);

        return redirect('/dashboard')->with('info', "Your post has been posted.");
    }

    public function getUsers() {
        $users = User::whereHas('posts')->get();
        return view('pages.users', compact('users'));
    }


    public function getPostByAuthor(User $user) {
        $posts = Post::where('user_id', $user->id)->get();
        return view('pages.authorposts', compact('posts', 'user'));
    }


}

