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
 
     public function deleteCategory(Request $request){
         
         $curr_categories = session('categories');
         
         $index = array_search($request->category_id, $curr_categories);
         unset($curr_categories[$index]);

         $curr_categories = array_values($curr_categories);
         session(['categories' => $curr_categories]);

         return redirect()->back();
     }
}
