<?php
/**
 * Created by PhpStorm.
 * User: PubuduC
 * Date: 23-Jul-17
 * Time: 20:04
 */

namespace App\Http\Controllers;


class GraphController
{
    public function postData()
    {
        $patches = Patch::all();
        return view('dataView',['patches'=>$patches]);
    }
}