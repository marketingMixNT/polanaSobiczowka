<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('pages.room.index');
    }

    public function show(){
        return view('pages.room.show');
    }
}
