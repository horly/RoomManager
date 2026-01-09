<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function hotel()
    {
        $hotelsCount = Hotel::count();
        $guestsCount = Guest::count();
        $roomsCount = Room::count();
        $resersCount = Reservation::count();

        return view('hotel.hotel', compact(
            'hotelsCount',
            'guestsCount',
            'roomsCount',
            'resersCount'
        ));
    }
}
