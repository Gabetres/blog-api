<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(private PostService $postService){}
    public function index()
    {
        $data = $this->postService->getAllPost();
        return response()->json(['data'=> $data],200);
    }
}
