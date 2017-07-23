<?php

namespace App\Http\Controllers;

use App\Patch;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getTestPage(Request $request)
    {
        $patch = new Patch();
        $patch->x = $request->x;
        $patch->y = $request->y;
        $patch->z = $request->z;
        $patch->save();
        return true;
    }
}
