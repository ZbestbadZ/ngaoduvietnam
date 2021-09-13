@extends('admin.layouts.app')

@section('title')
    List Of Category Tour
@endsection

@section('custome_style')
    <link href="{{ asset('css/cactegory.css') }}" rel="stylesheet">

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <h3>List of Category Tour</h3>
    @if (session('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></a>
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-hover table-bordered table-striped" id="listTours">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
