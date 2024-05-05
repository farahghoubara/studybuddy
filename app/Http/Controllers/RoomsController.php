<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;


class RoomsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $rooms = Room::with(['getCategory', 'getWallpaper', 'getUser'])->get();
        $wallpapers = Wallpaper::all();
        $user = Auth::user();
        return view('rooms.index', compact('user', 'categories', 'wallpapers', 'rooms'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        // Validate the incoming request
        $request->validate([
            'roomName' => 'required|string|max:30',
            'roomDescription' => 'required|string|max:99',
            'roomCategory' => 'required|exists:categories,id',
            'roomType' => 'required|in:public,private',
            'roomWallpaper' => 'required|exists:wallpapers,id',
        ]);

        // Create a new room instance
        Room::create([
            'name' => $request->roomName,
            'description' => $request->roomDescription,
            'category_id' => $request->roomCategory,
            'type' => $request->roomType,
            'wallpaper_id' => $request->roomWallpaper,
            'user_id' =>$user->id,
        ]);

        return redirect()->back()->with('success', 'Room created successfully!');
    }

    // public function privateRooms()
    // {
    //     return view('rooms.private_rooms.index');
    // }
}
