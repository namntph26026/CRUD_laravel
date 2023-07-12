@extends('master')
@section('title','Loại')
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
                <th scope="col">Tên loại</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loais as $loai)
            <tr>
                <th scope="row">{{$loai->id}}</th>
                <td>{{$loai->ten_loai}}</td>
                <td>
                    <a onclick="return confirm('Bạn có muỗn xóa loại '+'{{$loai->ten_loai}}'+' Không ?')" href="/admin/Loai/delete/{{$loai->id}}"><button type="button" class="btn btn-danger">DELETE</button></a>
                    <a href="/admin/Loai/edit/{{$loai->id}}"><button type="button" class="btn btn-primary">EDIT</button></a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
    <a href="/admin/Loai/add"> <button>Thêm loại</button></a>

    <div>

    </div>

    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
                {{$loais->links()}}
            </li>
        </ul>
    </nav>
</div>

<!--  -->
@endsection