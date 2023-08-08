<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register.index');
    }

    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'npm' => 'required|numeric|unique:users',
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'hp' => 'required|numeric',
            'jenis_kelamin' => 'required',
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login') -> with('message', "Pendaftaran berhasil! Silahkan login");;
    }
}
