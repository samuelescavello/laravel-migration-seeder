<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $trains = Train::where('date','=','2024-05-22')->get();
        return view('home', compact('trains'));
    }
}
