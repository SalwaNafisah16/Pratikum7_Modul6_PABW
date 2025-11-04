<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register'); // Menampilkan file view auth/register.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],                          
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()], 
        ]);

        // Membuat user baru di database dengan data yang sudah divalidasi
        $user = User::create([
            'name' => $request->name,                                   // Ambil nama dari form
            'email' => $request->email,                                 // Ambil email dari form
            'password' => Hash::make($request->password),               // Hash password agar tidak tersimpan dalam bentuk asli (demi keamanan)
        ]);

        // Memicu event bahwa user baru telah berhasil mendaftar
        event(new Registered($user));

        // Langsung login user tersebut setelah mendaftar
        Auth::login($user);

        // REdirect Ke Dashboard
        return redirect()->route('dashboard');
    }
}
