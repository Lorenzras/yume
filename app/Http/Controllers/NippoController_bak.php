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

    public function index(){
        //list
    }

    public function show(){
        //single resource
    }

    public function create(){
        //create a new resource

    }

    public function store(){
        //persist create form
    }

    public function edit(){
    //edit existing item
    }

    public function update(){
    //persist the edited resource

    }

    public function destroy(){
    //persist the edited resource

    }

   /*  public function nippo_sample()
    {
        return view('nippo.main_sample');
    } */
}
