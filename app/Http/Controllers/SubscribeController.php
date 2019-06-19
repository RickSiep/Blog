<?php

namespace App\Http\Controllers;

use App\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
//    Need to be logged in to subscribe
    public function __construct()
    {
        $this->middleware('auth');
    }
//  Very easy subscribe function
    public function subscribe(){
        $user = Auth::user();
        $user->subscribed = 1;
        $user->save();
        return redirect()->back();

    }
//    Very easy unsubscribe function
    public function unSubscribe(){
        $user = Auth::user();
        $user->subscribed = 0;
        $user->save();
        return redirect()->back();
    }
}
