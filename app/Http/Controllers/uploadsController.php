<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploads;

class uploadsController extends Controller
{
    public function index()
    {   
        return view('layouts.uploads');
    }

    public function index2()
    {
        $uploads=Uploads::all();
        //return $user;
        return view ('layouts.galleries', compact('uploads'));
    }

    protected function uploads(Request $request)
    {   
        $data = uploads::create($request->all());
        if ($request->hasfile('image'))
        {

            $request->file('image')->move('public/uploadedImage/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            if ($data->save())
            {
                return redirect('uploads')->with('status', 'Uploads Success');
            } else {
                return redirect('uploads')->with('status', 'Uploads Failed');

            };
        }
    }
}
