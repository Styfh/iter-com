<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationCategory;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //

    public function getDestination(Request $request){

        $destination = Destination::where("id", $request->destination_id)
            ->first();

        $destination_categories = DestinationCategory::with('getCategory')
            ->where("destination_id", $request->destination_id)
            ->get();

        // dd($destination_categories);

        return view('destination_detail', [
            "destination" => $destination,
            "categories" => $destination_categories
        ]);

    }

    public function addDestination(Request $request){

        
        // dd($curr_plan);
        
        if(!($request->session()->has('destinations'))){
            $curr_plan = [];
        } else{
            $curr_plan = $request->session()->get('destinations');
        }

        array_push($curr_plan, $request->destination_id);
        

        $request->session()->put('destinations', $curr_plan);

        return redirect('/');
    }
}
