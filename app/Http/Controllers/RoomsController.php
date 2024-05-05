<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $wallpapers = Wallpaper::all();
        $user = Auth::user();
        return view('rooms.index', compact('user', 'categories', 'wallpapers'));
    }

    public function store(Request $request){
    }

    // public function privateRooms()
    // {
    //     return view('rooms.private_rooms.index');
    // }
}
