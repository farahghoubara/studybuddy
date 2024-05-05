<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{
    public function publicRooms()
    {
        $categories = Category::pluck('name');
        $user = Auth::user();
        return view('rooms.public_rooms.index', compact('user', 'categories'));
    }

    public function privateRooms()
    {
        return view('rooms.private_rooms.index');
    }
}
