<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController extends Controller
{
    public function index(){
        return view("admin.AuthLogin");
    }


    public function login(Request $request){
        validator   ( $request->all(), [
            "username"=> "['required','username']",
            "password"=> "['required','password']"
        ])->validate();
        
        if(auth()->attempt( $request->only("username","password") ) ){
            return redirect("")->with("success","");
        }
    }

}