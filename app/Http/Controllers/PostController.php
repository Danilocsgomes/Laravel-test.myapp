<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostController extends Controller
{
    public function index(): Collection
    {
        return Post::all();
    }

    public function show(Post $post): Post
    {
        $post->load('user');
        //dd($post->user);
        return $post;
    }
}
