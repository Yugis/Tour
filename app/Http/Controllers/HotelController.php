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
        $hotels = (new Hotel)->newQuery();

        if (request()->has('min_price') && request()->has('max_price')) {
            $hotels->where('price', '>', request()->min_price);
            $hotels->where('price', '<', request()->max_price);
        }

        if (request()->has('rating')) {
            $hotels->whereIn('rating', request()->rating);
        }

        if (request()->has('category_id')) {
            $hotels->whereIn('category_id', request()->category_id);
        }

        if(request()->has('location_id')) {
            $hotels->whereIn('location_id', request()->location_id);
        }

        if(request()->has('facility_id')) {
            $hotels->whereHas('facilities', function ($query) {
                return $query->whereIn('facility_id', request()->facility_id);
            });
        }

        request()->flash();

        if(count(request()->all())) {
            $hotels = $hotels->paginate(8)->appends([
                'category_id' => request('category_id'),
                'location_id' => request('location_id'),
                'facility_id' => request('facility_id'),
                'rating' => request('rating'),
                'min_price' => request('min_price'),
                'max_price' => request('max_price'),
                'guests' => request('guests'),
                'check_in' => request('check_in'),
                'check_out' => request('check_out'),
            ]);
        }

        if(! count(request()->all())) {
            $hotels = Hotel::inRandomOrder()->paginate(8);
        }

        return view('hotels', compact('hotels'));
    }
}
