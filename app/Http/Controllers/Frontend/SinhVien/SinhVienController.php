<?php

namespace App\Http\Controllers\Frontend\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function getHome(Request $request)
    {
        return view('Frontend.SinhVien.SinhVien');
    }

    public function traCuu(Request $request)
    {
        return view('Frontend.SinhVien.TraCuu');
    }
}
