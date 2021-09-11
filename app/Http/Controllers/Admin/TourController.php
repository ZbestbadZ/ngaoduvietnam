<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Requests\TourStoreRequest;
use Exception;

class TourController extends Controller
{
    public function create()
    {
        return view('admin.tour.create');
    }

    public function store(TourStoreRequest $request)
    {
        try {
            $data      = $request->only(['name', 'slug', 'duration', 'category', 'price', 'image', 'image_seo', 'destination', 'address', 'overview']);

            $tour      = Tour::create($data);
            $image     = $request->file('image');
            $image_seo = $request->file('image_seo');
        } catch (Exception $e) {
            $mess = $e->getMessage();
            // return redirect()->route('admin.tour.index')->withErrors($mess)->withInput();
        }
    }
}
