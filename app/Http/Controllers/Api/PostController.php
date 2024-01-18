<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $service = new PostService();
        $posts = $service->listall();
        return PostResource::collection($posts);
    }

    public function create()
    {
    }

    public function store(StorePostRequest $request)
    {
        $service = new PostService(); 
        $posts = $service->store($request);
        
        return new PostResource($posts);
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update(StorePostRequest $request)
    {
        $service = new PostService(); 
        $posts = $service->store($request);
        
        return new PostResource($posts);
    }

    public function destory(Request $request)
    {
        $service = new PostService(); 
        // $posts = $service->store($request);

        return response(null, 204);
    }
}
