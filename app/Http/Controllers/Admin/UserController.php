<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index ()
    {
        return view('user.user-data', [
            'user' => User::class
        ]);
    }
}
