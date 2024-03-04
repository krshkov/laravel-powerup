<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @param Request $request
     * @return void
     */
    function setLightingMode(Request $request)
    {
        $usr = auth()->user();
        $usr->dark_mode = (bool) $request->darkMode;
        $usr->save();
    }
}
