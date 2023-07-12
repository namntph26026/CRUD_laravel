@extends('master')
@section('title','Thêm sản phẩm')
@section('content')



<center>
    <h1>Thêm sản phẩm</h1>
</center>
&nbsp;

<form action="" method="post">
    @csrf
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" class="form-control" id="" name="ten_sp" value="{{old('ten_sp')}}">
        
        {!! ShowError($errors,'ten_sp') !!}
    </div>
    <div class="form-group">
        <label>Giá sản phẩm</label>
        <input type="text" class="form-control" id="" name="gia_sp" value="{{old('gia_sp')}}">
        {!! ShowError($errors,'gia_sp') !!}
    </div>
    <div class="form-group">
        <label for="">Loại sản phẩm</label>
        <select class="form-control" id="exampleFormControlSelect1" name="id_loai">
            @foreach($loai as $l)
            <option value="{{$l->id}}">{{$l->ten_loai}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
</form>

<!--  -->
@endsection