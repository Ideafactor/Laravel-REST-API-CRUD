<?php

namespace App\Services;

use App\Models\Post;

class PostService {
    public function __construct()
    {   
    }

    public function listall()
    {
        return Post::all();
    }

    public function store($request)
    {
        return Post::create($request->all());
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function update($request, Post $post)
    {
        return $post->update($request->all());
    }

    public function destory(Post $post)
    {
        return $post->delete();
    }
}