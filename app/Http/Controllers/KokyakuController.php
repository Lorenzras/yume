<?php

namespace App\Http\Controllers;

use App\Models\kokyaku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KokyakuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kokyakukanri.main');
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
     * @param  \App\Models\kokyaku  $kokyaku
     * @return \Illuminate\Http\Response
     */
    public function show(kokyaku $kokyaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kokyaku  $kokyaku
     * @return \Illuminate\Http\Response
     */
    public function edit(kokyaku $kokyaku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kokyaku  $kokyaku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kokyaku $kokyaku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kokyaku  $kokyaku
     * @return \Illuminate\Http\Response
     */
    public function destroy(kokyaku $kokyaku)
    {
        //
    }
}
