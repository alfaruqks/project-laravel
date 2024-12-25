<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = Login::where('username', $request->username)->first();

        if ($user && $user->password === $request->password) {
            // Simpan session jika login berhasil
            session(['username' => $user->username]);
            return redirect('/dashboard');
        }

        return back()->withErrors(['login_error' => 'Username atau password salah']);
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }

    public function updateAkunForm()
{
    return view('akun.update'); // Form update akun
}

    public function updateAkun(Request $request)
    {
        $request->validate([
        'username' => 'required',
        'password' => 'required|confirmed',
    ]);

    $user = \App\Models\Login::where('username', session('username'))->first();
    if ($user) {
        $user->update([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);
        session(['username' => $request->username]); // Update session
    }

    return redirect()->route('dashboard')->with('success', 'Akun berhasil diperbarui');
}

}
