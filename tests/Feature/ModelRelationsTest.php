<?php

use App\Models\Blog;
use App\Models\Subscription;
use App\Models\User;

test('model relationships', function () {
    // This method/data should not be changed

    $userSubscription = Subscription::factory()->for(User::factory(), 'subscribable')->create();
    expect($userSubscription->subscribable->getKey())->toBe(User::first()->getKey());

    $blogSubscription = Subscription::factory()->for(Blog::factory(), 'subscribable')->create();
    expect($blogSubscription->subscribable->getKey())->toBe(Blog::first()->getKey());

    expect(User::first()->subscriptions()->first()->getKey())->toBe($userSubscription->getKey());
})->group('relations');
