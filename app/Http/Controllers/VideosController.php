<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('videos.index',[
            'videos' => Video::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Value
        $tags = $request->tags;

        $video = Video::create(request()->except('_token','tags'));

        // Find tag in database to confirm tag
        $tags_form_database = Tag::find($tags);

        $video->tags()->attach($tags_form_database);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('videos.show',[
            'video' => Video::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);

        return view('videos.edit', [
            'video' => $video,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'Url' => 'required|min:5'
        ]);

        // Form Value
        $tags = $request->tags;

        // current original data from database
        $video = Video::find($id);

        $video->update(request()->except('_token','tags'));

        // Find tag in database to confirm tag
        $tags_form_database = Tag::find($tags);

        // $video->tags()->detach($video->tags);

        // $video->tags()->attach($tags_form_database);

        $video->tags()->sync($tags_form_database);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
