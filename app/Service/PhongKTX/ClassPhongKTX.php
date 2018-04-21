<?php
namespace App\Service\PhongKTX;

use DB;
use Illuminate\Support\ServiceProvider;

class ClassPhongKTX extends ServiceProvider
{
    public static function taoPhongKtx()
    {
        for ($i = 1; $i <= 30; $i++) {
            if ($i < 10) {
                $i = '0' . $i;
            }
            $maphong = 'KTX' . $i;
            $phongKtx = [
                'maphong' => $maphong,
                'chotrong' => '6',
                'soluongdat' => '0',
                'created_at' => date('Y-m-d'),
            ];
            DB::table('phongktx')
                ->insert($phongKtx);
        }
    }

    public static function danhSachPhong()
    {
        $danhSach = DB::table('phongktx')->get();
        return $danhSach;
    }

    public static function dangKyPhong($request)
    {
        $result = [
            'success' => 0,
            'obj' => '',
            'message' => '',
        ];
        if ('' == $request->ngaydangky) {
            $ngaydangky = date('Y-m-d');
        } else {
            $ngaydangky = $request->ngaydangky;
        }
        if ('' == $request->ngaysinh) {
            $ngaysinh = '1994-05-24';
        } else {
            $ngaysinh = $request->ngaysinh;
        }
        $check = DB::table('sinhvien')->where('masv', $request->masv)->first();
        if (empty($check)) {
            $data = [
                'name' => $request->name,
                'masv' => $request->masv,
                'lopkhoa' => $request->lopkhoa,
                'dienuutien' => $request->dienuutien,
                'maphong' => $request->maphong,
                'ngaysinh' => $ngaysinh,
                'quequan' => '',
                'email' => '',
                'sodienthoai' => $request->name,
                'ghichu' => $request->name,
                'created_at' => $ngaydangky,
                'cmnd' => $request->cmnd,
                'kickhoat' => '0',
            ];
            DB::table('sinhvien')->insert($data);
            $result['success'] = 1;
        }
        return $result;
    }
}
