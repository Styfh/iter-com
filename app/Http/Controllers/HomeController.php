<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\UserCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function getIndexPage(Request $request){

        $user = auth()->user();

        $destinations = Destination::all()->take(5);
        $all_category = Category::all();

        if(!($request->session()->has('categories'))){

            $user_categories = UserCategory::where("user_id", $user->id)
                ->get();
            
            $user_categories->toArray();

            $categories_id = [];
            foreach($user_categories as $category){
                array_push($categories_id, $category->category_id);
            }

            session(['categories' => $categories_id]);
        } 

        // dd(session('categories'));
        $user_categories = Category::whereIn("id", session('categories'))
                ->get();
                
        if($request->session()->has('destinations')){
            $curr_plan = session('destinations');
            $user_destinations = Destination::whereIn("id", $curr_plan)->get();
        }
        else{
            $user_destinations = [];
        }

        return view('index', 
            ['destinations' => $destinations,
            'user_categories' => $user_categories,
            'user_destinations' => $user_destinations,
            'categories' => $all_category]
        );  
    }
}
