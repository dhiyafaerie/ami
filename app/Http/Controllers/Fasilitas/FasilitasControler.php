<?php

namespace App\Http\Controllers\Fasilitas;

use App\Models\Facility;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class FasilitasControler extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        
        return view('facilities', compact('facilities'));
    }
}
