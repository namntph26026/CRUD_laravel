<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SanPhamAddRequest;
use App\Http\Requests\SanPhamEditRequest;
use App\Models\SanPham;
use App\Models\LoaiSP;
use Illuminate\Support\Facades\Redis;


class SanPhamController extends Controller
{
    public function GetListsp(){
        $data['sanpham']= SanPham::paginate(5);
        return view("sanpham.listsp",$data);
    }

    public function GetAddsp(){
        $data['loai']= LoaiSP::all();
        return view("sanpham.addsp",$data);
    }

    public function PostAddsp(SanPhamAddRequest $r){
        $loais = new LoaiSP();
        $sanpham = new SanPham();
        $sanpham-> ten_sp = $r->ten_sp;
        $sanpham-> gia_sp = $r->gia_sp;
        $sanpham-> id_loai = $loais->id = $r->id_loai;
        $sanpham->save();
        return redirect('admin/SanPham')->with('thongbao','Thêm sản phẩm thành công!!');
    }

    public function GetDeletesp($id_sp){
        SanPham::destroy($id_sp);
        return redirect('admin/SanPham')->with('thongbao','Xóa sản phẩm thành công!!');
    }

    public function GetEditsp($id_sp){
        $data['sanpham']= SanPham::find($id_sp);
        $data['loai']= LoaiSP::all();
        return view("sanpham.editsp",$data);
    }
    public function PostEditsp(SanPhamEditRequest $r, $id_sp){
       $sanpham= SanPham::find($id_sp);
       $loais = new LoaiSP();
       $sanpham-> ten_sp = $r->ten_sp;
       $sanpham-> gia_sp = $r->gia_sp;
       $sanpham-> id_loai = $loais->id = $r->id_loai;
       $sanpham->save();
       return redirect('admin/SanPham')->with('thongbao','Update sản phẩm thành công!!');

    }
}
