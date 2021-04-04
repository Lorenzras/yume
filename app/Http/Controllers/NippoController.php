<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NippoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nippo()
    {
        return view('nippo.main');
    }

    public function nippo_sample()
    {
        return view('nippo.main_sample');
    }
}
