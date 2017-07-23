<?php

namespace App\Http\Controllers;

use App\Patch;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getTestPage(Request $request)
    {
        $patch = new Patch();
        $patch->x_acceleration = $request->x;
        $patch->y_acceleration = $request->y;
        $patch->z_acceleration = $request->z;
        $patch->save();
        return true;
    }
}
