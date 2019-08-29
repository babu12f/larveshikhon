<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploaController extends Controller
{
    public function create()
    {
        return view('fileup');
    }

    public function store()
    {
        if (request()->hasFile('user_img'))
        {
            $destinationPath = 'uploads';

            $all_file = request()->file('user_img');

            foreach($all_file as $file)
            {
                $ext = $file->getClientOriginalExtension();

                $file_name = uniqid().".".$ext;

                $file->move($destinationPath, $file_name);
            }

            return back();
        }

    }
}
