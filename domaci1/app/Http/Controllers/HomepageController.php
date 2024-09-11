<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $trenutnoVreme = date(format: "h:i:s");
        $sat = date(format: "h");
        return view("welcome", compact('trenutnoVreme', 'sat'));
    }
}
