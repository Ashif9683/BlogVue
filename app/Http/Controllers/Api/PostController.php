<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PostController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $posts = Post::query()
            ->with('user:id,name,email')
            ->latest()
            ->paginate(10);

        return PostResource::collection($posts);
    }

    public function store(StorePostRequest $request): JsonResponse
    {
        $post = Post::query()->create($request->validated());
        $post->load('user:id,name,email');

        return (new PostResource($post))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Post $post): PostResource
    {
        $post->load('user:id,name,email');

        return new PostResource($post);
    }

    public function update(UpdatePostRequest $request, Post $post): PostResource
    {
        $post->update($request->validated());

        return new PostResource($post->fresh()->load('user:id,name,email'));
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->noContent();
    }
}
