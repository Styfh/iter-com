<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationCategory;
use App\Models\PlanHeader;
use App\Models\PlanDetail;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

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

        if(!array_search($request->destination_id, $curr_plan)){
            array_push($curr_plan, $request->destination_id);
        } 

        $request->session()->put('destinations', $curr_plan);

        return redirect('/');
    }

    public function addPlan(Request $request){

        
        $validate = $request->validate([
            'plan_name' => ['required', 'unique:plan_headers']
        ]);
        
        // dd(1);
        $new_plan = new PlanHeader();

        $new_plan->plan_name = $validate['plan_name'];
        $new_plan->user_id = auth()->user()->id;

        $new_plan->save();

        $curr_plan = $request->session()->get('destinations');

        foreach($curr_plan as $dest){

            $plan_id = PlanHeader::where('plan_name', $new_plan->plan_name)
                ->where('user_id', $new_plan->user_id)
                ->first();

            $new_dest = new PlanDetail();

            $new_dest->plan_id = $plan_id->id;
            $new_dest->destination_id = $dest;

            $new_dest->save();

        }

        $request->session()->forget('destinations');

        return redirect('/');

    }
}
