<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
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

    public function getPreferencesPage(){

        $categories = Category::all();

        return view('preferences', 
            ['categories' => $categories]);

    }

    public function getSavedPage(){
        return view('saved');
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
            return redirect('/');
        }

        return redirect()->back();
        
    }

}
