<?php

namespace App\Http\Controllers;

use App\Models\Adminv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $result = DB::select('select * from exams');

      return view('admin.showq',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adminv  $adminv
     * @return \Illuminate\Http\Response
     */
    public function show(Adminv $adminv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminv  $adminv
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminv $adminv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminv  $adminv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminv $adminv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminv  $adminv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminv $adminv)
    {
        //
    }
}
