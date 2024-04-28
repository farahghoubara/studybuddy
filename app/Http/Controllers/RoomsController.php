<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function publicRooms()
    {
        return view('rooms.public_rooms.index');
    }

    public function privateRooms()
    {
        return view('rooms.private_rooms.index');
    }
}
