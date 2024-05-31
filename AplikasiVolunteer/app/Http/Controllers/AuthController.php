<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    // Autentikasi Login
    public function loginPage(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();
            
            // Check the role of the authenticated user
            $role = $user->role;

            // Redirect based on the user's role
            if ($role == 'admin') {
                return redirect()->intended('/admin/jenisaktivitas');
            } elseif ($role == 'organisasi') {
                return redirect()->intended('/organisasi/aktivitas');
            } elseif ($role == 'relawan') {
                return redirect()->intended('/landing');
            }
        }

        return redirect()->back()->with("error", "Username atau Password salah!");
    }
    

    // Autentikasi Register
    public function showRelawanRegisterForm()
    {
        return view('auth.relregister');
    }

    public function showOrganisasiRegisterForm()
    {
        return view('auth.orgregister');
    }

    public function registerRelawan(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        // dd($user);
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => 'relawan'
        ]);

        Auth::login($user);
        return redirect('landing');
    }

    public function registerOrganisasi(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'deskripsi' => 'required',
            'no_telepon' => 'required',
            'domisili' => 'required',
            'tahun_berdiri' => 'required'
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telepon' => $request->no_telepon,
            'role' => 'organisasi'
        ]);
        // dd($user);
        Organization::create([
            'id_user' => $user->id,
            'deskripsi_organisasi' => $request->deskripsi,
            'domisili' => $request->domisili,
            'tahun_berdiri' => $request->tahun_berdiri
        ]);

        Auth::login($user);
        return redirect('/organisasi/aktivitas');
    }

    public function editrelawan()
    {
        $user = User::find(Auth::id());
        // dd($user);
        return view('auth.relprofile', compact('user'));
    }

    public function editorganisasi()
    {
        $organisasi = Organization::all();
        $user = User::find(Auth::id());
        // dd($user);
        return view('auth.orgprofile', compact('user','organisasi'));
    }

    public function updaterelawan(Request $request)
    {
        $user = User::find(Auth::id());

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => 'relawan'
        ]);

        Auth::login($user);
        return redirect('landing');
    }

    public function updateorganisasi(Request $request)
    {
        $user = User::find(Auth::id());
        
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'role' => 'organisasi'
        ]);

        $organization = Organization::where('id_user', $user->id)->first();
        // dd($user);
        $organization->update([
            'id_user' => $user->id,
            'deskripsi_organisasi' => $request->deskripsi,
            'domisili' => $request->domisili,
            'tahun_berdiri' => $request->tahun_berdiri
        ]);

        Auth::login($user);
        return redirect('/organisasi/aktivitas');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/landing');
    } 

}
