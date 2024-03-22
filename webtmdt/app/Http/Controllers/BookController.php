<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Book;

class BookController extends Controller{
    function laythongtintheloai(){
        $the_loai_sach = DB::table("dm_the_loai")->get();
        return view("qlsach.the_loai",compact("the_loai_sach"));
        }
       /*
       function laythongtintheloai()
                {
                $the_loai_sach = Category::all();
                return view("qlsach.the_loai",compact("the_loai_sach"));
                }
       */ 
        function laythongtinsach(){
        $sach = DB::table("sach")->select("tieu_de","nha_xuat_ban","tac_gia","hinh_thuc_bia","mo_ta","gia_ban")
        ->where("hinh_thuc_bia","Bìa Mềm")->get();
         return view("qlsach.thong_tin_sach",compact("sach"));
        }
        /*
       function laythongtinsach()
                {
                $sach = Book::where("nha_xuat_ban","Văn Học")->get();
                return view("qlsach.thong_tin_sach",compact("sach")); 
                }
       */ 
        function laythongke(){
            $so_sach = DB::select("select d.ten_the_loai,count(*) as sl
            from sach s, dm_the_loai d
            where s.the_loai =d.id
            group by d.ten_the_loai");
            
            return view("qlsach.thong_ke",compact("so_sach"));

        }
 




        }