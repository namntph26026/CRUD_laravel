<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoaiRequest;
use App\Http\Requests\EditLoaiRequest;
use App\Models\LoaiSP;
class LoaispController extends Controller
{
    //
    public function GetList(){
        $data['loais']=LoaiSP::paginate(4);
       return view("list",$data);
    }

    public function GetAdd(){
        return view("add");
    }

    public function PostAdd(LoaiRequest $r){
       $loai = new LoaiSP();
       $loai->ten_loai = $r->ten_loai;
       $loai->save();
       return redirect('admin/Loai')->with('thongbao','Thêm loại thành công !!!');
    }

    public function GetDelete($id_loai){
        LoaiSP::destroy($id_loai);
        return redirect('admin/Loai')->with('thongbao','Xóa loại thành công!!!');
    }
    public function GetEdit($id_loai){
        $data['loais']= LoaiSP:: find($id_loai);
        return view("edit",$data);
    }

    public function PostEdit(EditLoaiRequest $r,$id_loai){
        $loai1= LoaiSP:: find($id_loai);
        $loai1->ten_loai = $r->ten_loai;
        $loai1->save();
        return redirect('admin/Loai')->with('thongbao','Update loại thành công !!!');
    }
}
