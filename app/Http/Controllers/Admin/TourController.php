<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Requests\TourStoreRequest;

class TourController extends Controller
{
    public function create()
    {
        return view('admin.tour.create');
    }

    public function store(TourStoreRequest $request) {

    }
}
