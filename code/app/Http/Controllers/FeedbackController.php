<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function subscribe(Request $request, Subscriber $subscriber)
    {
        try {
            $subscriber->updateOrCreate(['email' => $request->email, 'active' => 1]);
        } catch (\Exception $e) {
            return redirect()->route('marketplace');
        }
        return redirect()->route('marketplace');
    }
}
