<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }
    public function register()
    {
        return view('admin.login.register');
    }
    public function aksi_register(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $user->create($data);
        return redirect("/");
    }
    public function home()
    {
        return view("admin.pages.dashboard.dashboard");
    }
    public function aksi_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $selectuser = User::firstWhere('email', $request->email);
            $data = [
                'id' => $selectuser->id,
                'name' => $selectuser->name
            ];
            session($data);
            return redirect('/web-admin/dashboard');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors('LOGIN GAGAL!!');
        }
    }
    // untuk log out
    public function destroy()
    {
        // hapus semua data pada session
        Session::flush();
        // lakukan log out
        Auth::logout();
        // pindah ke halaman login
        return redirect('/');
    }
}
