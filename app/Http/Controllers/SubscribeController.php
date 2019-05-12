<?php

namespace App\Http\Controllers;

use App\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function subscribe(){
        $user = Auth::user();
        $user->subscribed = 1;
        $user->save();
        return redirect()->back();

    }
    public function unSubscribe(){
        $user = Auth::user();
        $user->subscribed = 0;
        $user->save();
        return redirect()->back();
    }
}
