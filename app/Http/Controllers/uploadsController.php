<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploads;
use App\Models\Payments;

class uploadsController extends Controller
{
    public function index()
    {   
        return view('layouts.uploads');
    }

    public function index2()
    {
        $uploads=Uploads::all();
        return view ('layouts.galleries', compact('uploads'));
    }

    //public function index3()
    //{
    //    $uploads=Uploads::all();
    //    return view ('home', compact('uploads'));
    //}

    protected function store(Request $request)
    {   
    
        $fileName = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('images', $fileName);

        $data = uploads::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image,
        ]);

        if ($data->save())
            {
                return redirect('home')->with('status', 'Upload Success');
            } else {
                return redirect('home')->with('status', 'Upload Denied');
            }
    }

    public function index3()
    {
        $payments=Payments::all();
        return view ('layouts.checkouts', compact('payments'));
    }

    protected function storeCheckouts(Request $request)
    {   
        $data = Payments::create([
            'payment_method' => $request->payment_method,
            'payment_term' => $request->payment_term,
        ]);

        if ($data->save())
            {
                return redirect('home')->with('status', 'Checkout Success');
            } else {
                return redirect('home')->with('status', 'Checkout Denied');
            }
    }

}
