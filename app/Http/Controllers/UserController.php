<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function schedules()
    {
        return view('user.schedules');
    }

    public function events()
    {
        return view('user.events');
    }

    public function videos()
    {
        return view('user.videos');
    }
}
