@extends('admin.layouts.app')

@section('custome_style')
    <link href="{{ asset('css/admin-account.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="admin-account-container">
        <div class="edit-account">
            <div class="title">
                <h5>Admin Account</h5>
            </div>
            <div class="home-account"><a href="#">Home</a> <em class="fas fa-chevron-right"></em> Account Setting</div>
        </div>
        <div class="edit-form-account">

        </div>
    </div>
@endsection
