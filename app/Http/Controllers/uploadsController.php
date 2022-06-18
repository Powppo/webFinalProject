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

    protected function uploads(Request $request)
    {   
        $data = uploads::create($request->all());
        if ($request->hasfile('image'))
        {

            $request->file('image')->move('uploadedImage/', $rquest->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            if ($data->save())
            {
                return redirect('uploads')->with('status', 'Uploads Success');
            } else {
                return redirect('uploads')->with('status', 'Uploads Failed');

            };
        }
        return view('home');
    }
}
