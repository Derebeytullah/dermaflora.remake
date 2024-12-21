<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Route;

class AuthController extends Controller
{
    public function Loginİndex()
    {
        return view("AuthLogin");

    }
    public function SignUpİndex(Request $request)
    {
        // Doğrulama
        /* $validated = $request->validate([
            "username" => "required|string|max:191",
            "password" => "required|string|min:6",
        ]);

        // Parolayı hash'le ve veriyi kaydet
        User::create([
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]); */

        // Başarıyla kaydedildikten sonra bir view döndür
        return redirect()->route('signup.index')->with('success', 'Kayıt başarılı!');
    }



    public function login(Request $request)
    {
        // Doğrulama
        $validated = $request->validate([
            "username" => "required|string",
            "password" => "required|string",
        ]);

        // Kullanıcıyı veritabanından bul
        $users = User::all();

        // Kullanıcı var mı ve şifre doğru mu kontrol et
        /* if ($users->username) {
            // Giriş başarılı
            return view('deneme');
        } */
        return view("deneme", compact("users"));
    }


}