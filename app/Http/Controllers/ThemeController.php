<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ThemeController extends Controller
{
    public function setTheme(Request $request)
    {
        setcookie("theme", "", -1);
        setcookie("theme", $request->post("theme"), time()+86400*750, '/');
        return Redirect::back();
    }
}
