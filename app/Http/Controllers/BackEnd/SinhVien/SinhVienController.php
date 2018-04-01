<?php

namespace App\Http\Controllers\BackEnd\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function themSinhVien(Request $request)
    {
        return view('Backend.SinhVien.ThemSinhVien');
    }
}
