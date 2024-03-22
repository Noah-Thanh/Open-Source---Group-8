<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
   // function vidu1(){
    //    $name = "HUB";
    //    return view('vidu1',["name1"=>$name]);
    //    }
    //    }
    //viu2
    /*function vidu2(){
        return view('vidu2');
        }
    function tinhtong(Request $request)
        {
        $so_a = $request->input("so_a");
        $so_b = $request->input("so_b");
        $ket_qua = $so_a+$so_b;
        return "Kết quả là: ".$ket_qua;
        }}
    */
    //bth1
    /*function bth1(){
        return view('bth1');
        }
    function upper(Request $request)
        {
            $chuoi_in_thuong = $request->input("chuoi_in_thuong");
            $chuoi_in_hoa = strtoupper($chuoi_in_thuong);
            return "Chuỗi in hoa: " . $chuoi_in_hoa;
        }}
    */
    //bth2
/*    function bth2(){
        return view('bth2');
        }
    function maxmin(Request $request)
{
    $day_so = $request->input("day_so");
    $mang_so = explode(",", $day_so);
    $max = $mang_so[0];
    $min = $mang_so[0];
    foreach ($mang_so as $so) {
        if ($so > $max) {
            $max = $so;
        }
        if ($so < $min) {
            $min = $so;
        }
    }
    return "Số lớn nhất: " . $max . "<br>Số nhỏ nhất: " . $min;
}}
*/
//bth3
/*function bth3(){
    return view('bth3');
    }
    function chanle(Request $request)
    {
        $day_so = $request->input("day_so");
        $mang_so = explode(",", $day_so);
        $ket_qua = "";
        foreach ($mang_so as $so) {
            if ($so % 2 == 0) {
                $ket_qua .= "<span style='color: red'>" . $so . "</span> ";
            } else {
                $ket_qua .= "<span style='color: blue'>" . $so . "</span> ";
            }
        }
        return $ket_qua;
    }}
*/
//bth4
/*
function bth4(){
    return view('bth4');}
    function dssv($danhSachSinhVien)
    {
        $mangSinhVien = explode(";", $danhSachSinhVien);
        $mangThongTinSinhVien = [];
        foreach ($mangSinhVien as $thongTinSinhVien) {
            $mangThongTin = explode("_", $thongTinSinhVien);
            $maSinhVien = $mangThongTin[0];
            $hoTenSinhVien = $mangThongTin[1];
            $sinhVien = [
                "ma_sinh_vien" => $maSinhVien,
                "ho_ten" => $hoTenSinhVien,
            ];
            $mangThongTinSinhVien[] = $sinhVien;
        }
        return $mangThongTinSinhVien;
    }
function xuat($mangThongTinSinhVien)
{
    $bangSinhVien = "<table border='1'>
    <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên</th>
    </tr>";
    foreach ($mangThongTinSinhVien as $sinhVien) {
        $bangSinhVien .= "<tr>
        <td>" . $sinhVien["ma_sinh_vien"] . "</td>
        <td>" . $sinhVien["ho_ten"] . "</td>
    </tr>";
    }
    $bangSinhVien .= "</table>";
    return $bangSinhVien;
}
*/
    function chucnang1()
    {
        echo "Chức năng 1";
    }
}