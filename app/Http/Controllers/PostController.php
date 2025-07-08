<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(private PostService $postService){}
    public function index()
    {
        $data = $this->postService->getAllPost();
        return response()->json(['data'=> $data],200);
    }
    public function store(StorePostRequest $request)
    {
        $post = $this->postService->createPost($request->validated());
        return response()->json(["data" => $post],200);
    }
}
