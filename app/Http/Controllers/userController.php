<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class userController extends Controller
{
        
        public function edit ($id)
        {
            $edit = User::findorfail($id);
            return view('layouts.edit', compact('edit'));
        }

        public function editTest ()
        {
            $edit = User::all();
            return view('layouts.editTest', compact('edit'));
        }

        public function update (Request $request, $id)
        {
            $edit = User::findorfail($id);
            $edit->update($request->all());
            if ($edit->save())
            {
                return redirect('myprofile')->with('status', 'Update Success');
            } else {
                return redirect('myprofile')->with('status', 'Update Denied');
            }
        }
}
