<?php

namespace App\Contracts;

use App\Models\Post;

interface PostServiceInterface
{
    public function createPost(array $data): Post;
    public function getUnsentPosts();
    public function markAsSent(Post $post): void;
}
