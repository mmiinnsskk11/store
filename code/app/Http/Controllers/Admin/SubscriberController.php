<?php


namespace App\Http\Controllers\Admin;


use App\Subscriber;

class SubscriberController
{
    public function __construct()
    {
    }

    public function subscribers(Subscriber $subscriber)
    {

        $subscribers = $subscriber->getSubscribers();

        return view('admin.subscriber.index', compact('subscribers'));
    }
}
