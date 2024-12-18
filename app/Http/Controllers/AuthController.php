<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController extends Controller
{
    public function index(){
        return view("admin.AuthLogin");
    }
}
