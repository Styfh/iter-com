<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UserCategory;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    //

    public function getPreferencesPage(Request $request){

        $categories = Category::all();
        
        $user_categories = UserCategory::with("getCategory")
            ->where("user_id", $request->id)
            ->get();
        
        return view('preferences', 
            ['categories' => $categories],
            ['user_categories' => $user_categories]
        );


    }

    public function addPreference(Request $request){

       $validate = $request->validate([
           'preferences' => ['required']
        ]);

        // dd($validate);

        $new_uc = new UserCategory();

        $new_uc->user_id = auth()->user()->id;
        $new_uc->category_id = $validate['preferences'];

        $new_uc->save();
        
        return redirect()->back();
    }

    public function deletePreference(Request $request){
        
        $to_delete = UserCategory::where("user_id", $request->user_id)
            ->where("category_id", $request->category_id);

        $to_delete->delete();

        return redirect()->back();
    }

}
