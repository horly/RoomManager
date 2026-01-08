<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function hotel()
    {
        return view('hotel.hotel');
    }
}
