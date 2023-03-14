<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', '>=', date('Y-m-d'))->get();

        return view('homepage',[
            'trains' => $trains
        ]);
        
    }
}
