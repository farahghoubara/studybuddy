<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use Illuminate\Support\Facades\Session;


class RoomsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::all();

        if ($user) {
            $userRooms = Room::with(['getCategory', 'getWallpaper', 'getUser'])
                ->where('user_id', $user->id)
                ->whereNull('deleted_at')
                ->get();

            $otherRooms = Room::with(['getCategory', 'getWallpaper', 'getUser'])
                ->where('user_id', '!=', $user->id)
                ->whereNull('deleted_at')
                ->get();

            $rooms = $userRooms->merge($otherRooms);
        } else {
            $userRooms = collect();
            $rooms = Room::with(['getCategory', 'getWallpaper', 'getUser'])
                ->whereNull('deleted_at')
                ->get();
        }
        $wallpapers = Wallpaper::all();

        return view('rooms.index', compact('user', 'categories', 'wallpapers', 'rooms', 'userRooms'));
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
        $room = Room::create([
            'name' => $request->roomName,
            'description' => $request->roomDescription,
            'category_id' => $request->roomCategory,
            'type' => $request->roomType,
            'wallpaper_id' => $request->roomWallpaper,
            'user_id' => $user->id,
        ]);
        $room->save();

        Session::flash('success', 'Room created successfully.');

        return redirect()->back();
    }

    public function join(Room $room)
    {
        $user = Auth::user();
        return view('rooms.join', compact('room', 'user'));
    }

    public function destroy(Room $room)
    {
        $user = Auth::user();
        if ($room->user_id == $user->id) {
            $room->delete();
            Session::flash('success', 'Room deleted successfully.');
        } else {
            Session::flash('error', 'You are not authorized to delete this room.');
        }
        return redirect()->route('rooms');
    }
}
