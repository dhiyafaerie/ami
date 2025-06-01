<?php

namespace App\Http\Controllers\Visimisi;

use App\Models\Visimisi;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::all();

        // Jika ada data
        if ($visimisi) {
            $visi = $visimisi->visi;
            $misi = $visimisi->misi;
            $visimisiImg = $visimisi->image;
        } else {
        // Jika tidak ada data
            $visi = 'No Data Avaiable';
            $misi = 'No Data Avaiable';
            $visimisiImg = [];
            
        }
        
        return view('visimisi', compact('visi', 'misi', 'visimisiImg'));
    }
}
