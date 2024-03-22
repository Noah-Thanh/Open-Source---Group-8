<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BTController extends Controller
{function bth1(){
    return view('BT1.bth1');
    }
function upper(Request $request)
    {
        $chuoi_in_thuong = $request->input("chuoi_in_thuong");
        $chuoi_in_hoa = strtoupper($chuoi_in_thuong);
        return view("BT1.bt1a", compact("chuoi_in_hoa"));
    }
    function bth2(){
        return view('BT1.bth2');
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
    return view("BT1.bt2a", compact("max","min"));
}
function bth3(){
    return view('BT1.bth3');
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
        return view("BT1.bt3a", compact("ket_qua"));
    }

    function bth4(){
        return view('BT1.bth4');
        }
        function inthongtinsv(Request $request)
        {
            $thong_tin_sv = $request->input("thong_tin_sv"); 
            $sinh_vien = explode(";", $thong_tin_sv);
            $list_sv= [];
            foreach ($sinh_vien as $sv) {
                {
                    $tmp = explode("_" , $sv);
                    $list_sv[]= $tmp;

                }
            }
            return view("BT1.bth4a", compact("list_sv"));
        }}    
    