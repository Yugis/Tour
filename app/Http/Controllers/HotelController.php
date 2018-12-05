<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request()->all());
        
        $hotels = (new Hotel)->newQuery();

        if (request()->has('category_id')) {
            $hotels->whereIn('category_id', request()->category_id);
        }
        // dd($hotels->get());


        if(request()->has('location_id')) {
            $hotels->whereIn('location_id', request()->location_id);
        }

        // dd($hotels->get());

        request()->flash();

        if(count(request()->all())) {
            $hotels = $hotels->paginate(2)->appends([
                'category_id' => request('category_id'),
                'location_id' => request('location_id'),
            ]);
        }

        // $hotels = Hotel::inRandomOrder()->paginate(8);

        if(! count(request()->all())) {
            $hotels = Hotel::inRandomOrder()->paginate(8);
        }

        return view('hotels', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
