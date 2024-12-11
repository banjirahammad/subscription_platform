<?php

namespace App\Services;

use App\Contracts\PostServiceInterface;
use App\Models\Post;

class PostService implements PostServiceInterface
{
    public function createPost(array $data): Post
    {
        return Post::create($data);
    }

    public function getUnsentPosts()
    {
        return Post::where('is_sent', false)->with('website.subscriptions')->get();
    }

    public function markAsSent(Post $post): void
    {
        $post->update(['is_sent' => true]);
    }
}
