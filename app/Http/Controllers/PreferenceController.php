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
        
        $uid = $request->id;
        $user_categories = UserCategory::where(['user_id' => $uid]);
        
        dd($user_categories->category());

        $name = $user_categories->category()->category_name;
        
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

}
