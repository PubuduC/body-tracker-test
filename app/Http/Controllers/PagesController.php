<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getTestPage(Request $request){
//        return view('pages.test')->with("content", $request);
        return json_decode($request);
//        return $request;
    }
}
