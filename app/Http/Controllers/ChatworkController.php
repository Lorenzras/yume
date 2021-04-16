<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatworkController extends Controller
{
    //
    public function handle(Request $request)
    {
        // Perform your action
        //Log::info('hello ' . $request);
        
        return "success!";

    }
}
