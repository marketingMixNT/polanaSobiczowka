<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('pages.room.index');
    }

    public function roomFirst(){
        return view('pages.room.first');
    }
    public function roomSecond(){
        return view('pages.room.second');
    }
}
