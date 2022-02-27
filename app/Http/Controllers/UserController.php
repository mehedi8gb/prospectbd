<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('frontend.user.customer.dashboard');
    }
    public function profile()
    {
        return view('frontend.user.customer.profile');
    }
}
