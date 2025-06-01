<?php

namespace App\Http\Controllers\Sdm;

use App\Models\Admin;
use App\Models\Lecture;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class SdmControler extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $lecture = Lecture::all();

        return view('sdm', compact('admins', 'lectures'));
    }
}
