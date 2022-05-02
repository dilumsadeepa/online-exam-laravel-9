<?php

namespace App\Http\Controllers;

use App\Models\Quze;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grade = $request['grade'];

        $result = DB::select('select * from exams where grade = ?', [$grade]);

        return view('quze.index',compact('grade'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $grade = $request['grade'];

      $result = DB::table('exams')
                ->where('grade',[$grade])
                ->inRandomOrder()
                ->limit(40)
                ->get();

      return view('quze.index',compact('result'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quze  $quze
     * @return \Illuminate\Http\Response
     */
    public function show(Quze $quze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quze  $quze
     * @return \Illuminate\Http\Response
     */
    public function edit(Quze $quze)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quze  $quze
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quze $quze)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quze  $quze
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quze $quze)
    {
        //
    }
}
