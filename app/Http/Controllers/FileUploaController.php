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
        // for file validation use ==> 'mimes:doc,docx,pdf,jpeg,jpg,png,gif',...
        // only for image validation ==> 'image'

        request()->validate([
            'user_img' => 'required|image|max:1000'
        ]);

        if (request()->hasFile('user_img'))
        {
            $destinationPath = 'uploads';

            $ext = request()->file('user_img')->getClientOriginalExtension();

            $file_name = uniqid().".".$ext;

            request()->file('user_img')->move($destinationPath, $file_name);

            return back();
        }

    }
}
