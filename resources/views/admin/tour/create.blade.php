@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title d-flex align-items-center">Create Tour</h5>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name*: </label>
                    <input class="form-control" type="text" name="name" value="">
                    @error('name')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Slug*: </label>
                    <input class="form-control" type="text" name="slug" value="">
                    @error('slug')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Category*: </label>
                    <input class="form-control" type="text" name="category" value="">
                    @error('category')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Duration*: </label>
                    <input class="form-control" type="text" name="duration" value="">
                    @error('duration')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Price*: </label>
                    <input class="form-control" type="text" name="price" value="">
                    @error('price')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image*: </label>
                    <input class="form-control" type="file" value="">

                </div>

                <div class="form-group">
                    <label>Image SEO: </label>
                    <input class="form-control" type="file" value="">

                </div>

                <div class="form-group">
                    <label>Destination*: </label>
                    <input class="form-control" type="text" name="destination" value="">
                    @error('destination')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
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
                    <textarea rows="4" cols="50" class="form-control" name="overview" id="description"></textarea>
                    @error('overview')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="switch">
                        Active
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </form>
        </div>
    </div>
@endsection
