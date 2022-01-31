<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function addCategory(Request $request){
 
        $curr_categories = session('categories');

        array_push($curr_categories, $request->categories);

        session(['categories' => $curr_categories]);
         
        return redirect()->back();
     }
 
     public function deletePreference(Request $request){
         
        //  $to_delete = UserCategory::where("user_id", $request->user_id)
        //      ->where("category_id", $request->category_id);
 
        //  $to_delete->delete();
 
        //  return redirect()->back();
     }
}
