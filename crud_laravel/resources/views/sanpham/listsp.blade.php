@extends('master')
@section('title','Sản phẩm')
@section('content')
<div class="table-responsive">

@if(session('thongbao'))
<div class="alert alert-success" role="alert">
        {{session('thongbao')}}
    </div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Loại sp</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sanpham as $sp)
            <tr>
                <th scope="row">{{$sp->id}}</th>
                <td>{{$sp->ten_sp}}</td>
                <td>{{$sp->gia_sp}}</td>
                <td>{{$sp->loai_sp->ten_loai}}</td>
                <td>
                    <a onclick="return confirm('Bạn có muỗn xóa sản phẩm '+'{{$sp->ten_sp}}'+' Không ?')" href="SanPham/delete/{{$sp->id}}"><button type="button" class="btn btn-danger">DELETE</button></a>
                    <a href="SanPham/edit/{{$sp->id}}"><button type="button" class="btn btn-primary">EDIT</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/admin/SanPham/add"> <button>Thêm sản phẩm</button></a>

    <div>

    </div>

    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
                {{$sanpham->links()}}
            </li>
        </ul>
    </nav>
</div>

<!--  -->
@endsection
