<?php

namespace App\Services;

use App\Contracts\EmailServiceInterface;
use App\Jobs\SendPostEmail;
use App\Models\Post;

class EmailService implements EmailServiceInterface
{
    public function sendNewPostEmails(Post $post): void
    {
        foreach ($post->website->subscriptions as $subscription) {
            SendPostEmail::dispatch($subscription->email, $post);
        }
    }
}
