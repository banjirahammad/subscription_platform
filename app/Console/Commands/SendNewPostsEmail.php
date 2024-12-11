<?php

namespace App\Console\Commands;

use App\Services\EmailService;
use App\Services\PostService;
use Illuminate\Console\Command;

class SendNewPostsEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send-new-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send new posts to subscribers';

    public function __construct(
        private PostService $postService,
        private EmailService $emailService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $posts = $this->postService->getUnsentPosts();

        foreach ($posts as $post) {
            $this->emailService->sendNewPostEmails($post);
            $this->postService->markAsSent($post);
        }

        $this->info('Emails sent successfully.');
    }
}
