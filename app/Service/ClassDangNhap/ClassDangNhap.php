<?php
namespace App\Service\ClassDangNhap;

use DB;
use Illuminate\Support\ServiceProvider;
use Session;

class ClassDangNhap extends ServiceProvider
{
    public static function Login($request)
    {
        $result = [
            'success' => 0,
            'obj' => '',
            'message' => '',
        ];
        $email = $request->email;
        $password = $request->password;
        $password = md5($password);
        $checkLogin = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if (!empty($checkLogin)) {
            $chucvu = $checkLogin->chucvu;
            Session::put('user.id', $email);
            Session::put('user.chucvu', $chucvu);
            $result['success'] = 1;
        }
        return $result;
    }
}
