<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function home() 
    {
        $travels = Travel::all();
        return view('home', compact('travels'));
    }
}
