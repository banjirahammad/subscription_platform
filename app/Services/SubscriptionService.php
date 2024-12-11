<?php

namespace App\Services;

use App\Contracts\SubscriptionServiceInterface;
use App\Models\Subscription;

class SubscriptionService implements SubscriptionServiceInterface
{
    public function createSubscription(array $data): Subscription
    {
        return Subscription::create($data);
    }
}
