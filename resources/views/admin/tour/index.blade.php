@extends('admin.layouts.app')

@section('title')
    List Of Tour
@endsection

@section('custome_style')
    <link href="{{ asset('css/tour.css') }}" rel="stylesheet">

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <h3>List of Tour</h3>
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
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Duration</th>
                <th>Category</th>
                <th>Price</th>
                <th>Destination</th>
                <th>Address</th>
                <th>Overview</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $list)
                <tr>
                    <td>{{ $list->id }}</td>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->slug }}</td>
                    <td>{{ $list->duration }}</td>
                    <td>{{ $list->category }}</td>
                    <td>{{ $list->price }}</td>
                    <td>{{ $list->destination }}</td>
                    <td>{{ $list->address }}</td>
                    <td>{{ $list->overview }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{-- @section('scripts')
    <script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>

    <script type="text/javascript">
        $(function() {
            $('#listTours').DataTable({
                dom: 'lifrtp',
                processing: true,
                serverSide: true,
                ajax: {
                    url: route('tours.getDataTour'),
                },
                columnDefs: [{
                    'targets': 0,
                    'checkboxes': {
                        'selectRow': true
                    }
                }],
                select: {
                    'style': 'multi'
                },
                order: [1, 'asc'],
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'duration',
                        name: 'duration'
                    },
                    {
                        data;
                        'image',
                        name: 'image',
                    },
                    {
                        data: 'image_seo',
                        name: 'image_seo'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'overview',
                        name: 'overview'
                    },
                    {
                        data: 'active',
                        name: 'active'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    }
                ]
            });

        });
    </script>
@endsection --}}
