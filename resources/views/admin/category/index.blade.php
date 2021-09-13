@extends('admin.layouts.app')

@section('title')
    List Of Category Tour
@endsection

@section('custome_style')
    <link href="{{ asset('css/cactegory.css') }}" rel="stylesheet">

@endsection

@section('styles')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
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
    <div class="create-category-tour">
        <input type="button" class="button-create btn btn-default" value="Create New Category" />

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="createModelCategory"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="createModelCategory">Create New Category Tour</h4>
                    </div>
                    {{-- <form action="" method="POST"> --}}
                        <div class="modal-body">
                            {{-- @csrf --}}
                            <div class="form-group">
                                <label>Name*: </label>
                                <input class="form-control" type="text" name="name">
                                @error('name')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image*: </label>
                                <input type="file" class="form-control" name="image[]" id="image" multiple>
                                @error('image')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                        </div>
                        <div class="row modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    {{-- </form> --}}

                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover table-bordered table-striped">
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

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function showModal() {
            $('#myModal').modal('show');
        }
    </script>
@endsection
