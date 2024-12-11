<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionRequest;
use App\Services\SubscriptionService;

class SubscriptionController extends Controller
{
    public function __construct(private SubscriptionService $subscriptionService)
    {}

    public function store(StoreSubscriptionRequest $request)
    {
        $subscription = $this->subscriptionService->createSubscription($request->validated());
        return response()->json($subscription, 201);
    }
}
