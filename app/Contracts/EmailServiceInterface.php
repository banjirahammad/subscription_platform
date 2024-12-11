<?php

namespace App\Contracts;

use App\Models\Post;

interface EmailServiceInterface
{
    public function sendNewPostEmails(Post $post): void;
}
