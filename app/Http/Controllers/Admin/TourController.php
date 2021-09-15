<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourStoreRequest;
use App\Models\Tour;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getDataTour(Request $request)
    {
        if ($request->ajax()) {
            $data = Tour::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        return view('admin.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data      = $request->only(['name', 'slug', 'duration', 'price', 'image_seo', 'address', 'overview']);

            $tour      = Tour::create($data);

            // dd($tour);
            // $image     = $request->file('image');
            // $image_seo = $request->file('image_seo');

            // if ($request->hasFile('image')) {
            //     $image     = $request->file('image');
            //     foreach ($image as $index => $files) {
            //         $destinationPath = 'products_photos';
            //         $file_name = time() . $index . "." . $files->getClientOriginalExtension();
            //         $files->move(public_path($destinationPath), $file_name);
            //         $image = public_path($destinationPath) . $file_name;
            //         $tour->images()->create(['image' => $image]);
            //     }
            // }
            // if ($request->hasFile('image_seo')) {
            //     $image_seo = $request->file('image_seo');
            //     foreach ($image_seo as $index => $files) {
            //         $destinationPath = 'tours_photos';
            //         $file_name = time() . $index . "." . $files->getClientOriginalExtension();
            //         $files->move(public_path($destinationPath), $file_name);
            //         $image_seo = public_path($destinationPath) . $file_name;
            //         $tour->images()->create(['image_seo' => $image]);
            //     }
            // }
            return redirect()->route('tours.index')->with('success', 'Added Tour Successful!');
        } catch (Exception $e) {
            $mess = $e->getMessage();
            // return redirect()->route('tours.index')->withErrors($mess)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
