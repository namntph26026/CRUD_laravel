@extends('master')
@section('title','ADMIN')
@section('content')
   <h1>Đây là trang admin, xin chào @if (Auth::check())
    {{Auth::User()->email}}
@endif</h1> 

@endsection