<?php

namespace App\Http\Controllers\Frontend\GioiThieu;

use App\Http\Controllers\Controller;

class GioiThieuController extends Controller
{
    public function getHome()
    {
        return view('Frontend.GioiThieu.GioiThieu');
    }
}
