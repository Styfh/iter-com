<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function getIndexPage(){
        $destinations = Destination::all()->take(5);

        return view('index', 
            ['destinations' => $destinations]
        );  
    }
}
