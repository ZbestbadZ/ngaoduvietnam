@extends('admin.layouts.app')

@section('custome_style')
    <link href="{{ asset('css/tour.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="tour-container">
        <div class="create-tour">
            <div class="title">
                <h5>Create Tour</h5>
            </div>
            <div class="home-tour"><a href="#">Home</a> / <a href="#">Tour</a> / Create</div>
        </div>
        <div class="create-form-tour">
            <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name*: </label>
                    <input class="form-control" type="text" name="name" value="">
                    @error('name')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Slug*: </label>
                            <input class="form-control" type="text" name="slug" value="">
                            @error('slug')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category*: </label>
                            <select class="form-control" name="category">
                                <option value=""></option>
                            </select>
                            @error('category')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Image*: </label>
                            <input class="form-control" name="image" type="file" value="">
                            @error('image')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Destination*: </label>
                            <select class="form-control" name="destination">
                                <option value=""></option>
                            </select>
                            @error('destination')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Duration*: </label>
                            <input class="form-control" type="number" name="duration" value="">
                            @error('duration')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="row form-group">
                            <label>Price*: </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="price" value="">
                            </div>
                            <div class="col-lg-3">
                                {{-- <input class="form-control" type="text" name="price" value=""> --}}
                                <select name="" id="" class="form-control">
                                    <option value="VND">USD</option>
                                    <option value="USD">VND</option>
                                </select>
                            </div>
                            @error('price')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Image SEO: </label>
                            <input class="form-control" name="image_seo" type="file" value="">
                            @error('image_seo')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>


                </div>

                <div class="form-group">
                    <label>Address*: </label>
                    <input class="form-control" type="text" name="address" value="">
                    @error('address')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Overview*: </label>
                    <textarea class="ckeditor form-control" name="overview"></textarea>
                    @error('overview')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="d-flex align-items-center">
                    <label>Active</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                <div class="create-tour-submit">
                    <button type="button" class="btn btn-light border">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
