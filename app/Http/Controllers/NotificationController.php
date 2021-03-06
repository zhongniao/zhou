<?php

namespace App\Http\Controllers;

use Auth;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notifications = Auth::user()->notifications()->paginate(10);
        Auth::user()->markAsRead();
        return view('notifications.index', compact('notifications'));
    }
}
