<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Exam;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addimage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
      ]);

      $imageName = time().'.'.$request->image->extension();

      $request->image->move(public_path('images'), $imageName);

      $an1img = time().'.'.$request->an1img->extension();

      $request->an1img->move(public_path('an1'), $an1img);

      $an2img = time().'.'.$request->an2img->extension();

      $request->an2img->move(public_path('an2'), $an2img);

      $an3img = time().'.'.$request->an3img->extension();

      $request->an3img->move(public_path('an3'), $an3img);

      $an4img = time().'.'.$request->an4img->extension();

      $request->an4img->move(public_path('an4'), $an4img);

      $an5img = time().'.'.$request->an5img->extension();

      $request->an5img->move(public_path('an5'), $an5img);

        $exam = new Exam;

        $exam->qu = $request['quze'];
        $exam->im = $imageName;
        $exam->an1 = 'Answer 01';
        $exam->an2 = 'Answer 02';
        $exam->an3 = 'Answer 03';
        $exam->an4 = 'Answer 04';
        $exam->an5 = 'Answer 05';
        $exam->an1img = $an1img;
        $exam->an2img = $an2img;
        $exam->an3img = $an3img;
        $exam->an4img = $an4img;
        $exam->an5img = $an5img;
        $exam->coan = $request['coan'];
        $exam->grade = $request['grade'];

        $exam->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
