@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    Welcome, {{ auth()->guard('admin')->user()->name }}<br>
    In the Admin Dashboard.....
@endsection
