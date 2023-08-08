<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ProfilController extends Controller
{
    public function index()
    {
        return view('dashboard.profil.index');
    }


    public function changePassword(Request $request)
    {
        // cek password lama
        if(!Hash::check($request->password, auth()->user()->password)) {
            return back()->with('error', 'Password lama tidak cocok dengan password anda saat ini');
        }

        // cek password baru dan ulangi
        if($request->passwordBaru != $request->ulangiPassword) {
            return back()->with('error', 'Password lama dan Ulangi Password tidak cocok');
        }

        $cekpass = $request->validate([
            'passwordBaru' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            'ulangiPassword' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->passwordBaru)
        ]);

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login')->with('success', 'Password berhasil diubah');
    }

    public function changeProfil()
    {
        return view('dashboard.profil.edit');
    }

    public function prosesChangeProfil(Request $request)
    {
        $rules = [
            'name' => 'required',
            'hp' => 'required|numeric',
            'jenis_kelamin' => 'required'
        ];

        if($request->npm != auth()->user()->npm) {
            $rules['npm'] = 'required|numeric|unique:ukts';
        }

        $validatedData = $request->validate($rules);

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/dashboard/profil')->with('success1', 'Profil berhasil diubah');
    }

}
