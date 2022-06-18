<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class showProfileController extends Controller
{
    public function show()
    {
        $user=User::all();
        //return $user;
        return view ('layouts.showProfile', compact('user'));
    }
}
