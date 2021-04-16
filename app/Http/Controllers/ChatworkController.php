<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatworkController extends Controller
{
    //
    public function handle(Request $request)
    {
        // Perform your action
        $message = "hellosss";

        $reply = array('body' => $message );

        header('Content-type: application/json; charset=utf-8');

        $cdata = curl_init();
        curl_setopt($cdata, CURLOPT_URL, 'https://api.chatwork.com/v2/rooms/225800073/messages');
        curl_setopt($cdata, CURLOPT_HTTPHEADER, array('X-ChatWorkToken: 7bc795ef967064f642aa70956cde3cad'));
        curl_setopt($cdata, CURLOPT_POSTFIELDS, http_build_query($reply, '', '&'));
        curl_setopt($cdata, CURLOPT_POST, 1);
        curl_setopt($cdata, CURLOPT_RETURNTRANSFER, 1);

        $ret = curl_exec($cdata);
        curl_close($cdata);
        return redirect()->back()->with('success!','Message');

    }
}
