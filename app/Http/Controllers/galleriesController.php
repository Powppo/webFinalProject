<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galleries;

class galleriesController extends Controller
{
    public function galleries()
    {
        $pic=Galleries::all();
        return $pic;
    }
}