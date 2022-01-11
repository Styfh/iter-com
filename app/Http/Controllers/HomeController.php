<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function getIndexPage(){
        $destinations = Destination::all()->take(5);
        $categories = Category::all();

        return view('index', 
            ['destinations' => $destinations,
            'categories' => $categories]
        );  
    }
}
