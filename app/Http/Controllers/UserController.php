<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PlanHeader;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function getLoginPage(){
        return view('login');
    }

    public function getRegisterPage(){
        return view('register');
    }

    public function getSavedPage(){
        $user = Auth::user();

        $user_plans = PlanHeader::where('user_id', $user->id)
            ->get();

        // dd($user_plans);

        return view('saved', [
            "plans" => $user_plans
        ]);
    }

    public function getSavedDetailPage(){
        return view('saved_detail');
    }

    public function register(Request $request){

        $validate = $request->validate([
            "username" => ["required"],
            "email" => ["required", "email"],
            "password" => ["required"],
            "confirm_password" => ["required", "same:password"]
        ]);

        $new_user = new User();

        $new_user->username = $validate["username"];
        $new_user->email = $validate["email"];
        $new_user->password = bcrypt($validate["password"]);

        $new_user->save();
        

        return redirect('/login');
    }

    public function login(Request $request){

        if(Auth::attempt([
            "username" => $request->username,
            "password" => $request->password,
        ], $request->remember)){

            $user_id = auth()->user()->id;

            $user_categories = UserCategory::where('user_id', $user_id)->get();

            // dd($user_categories);

            if($user_categories->isEmpty()){
                return redirect('/preferences/'.$user_id);
            }

            return redirect('/');
        }


        return redirect()->back();
        
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    }

}
