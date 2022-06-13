<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class updateProfileController extends Controller
{
    public function edit()
    {
        return view ('layouts.editProfile');
    }

    public function update()
    {

    }
}
