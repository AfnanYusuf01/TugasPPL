<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Termwind\Components\Dd;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'max:10',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'pasien',
        ]);
    
        event(new Registered($user));
    
        Auth::login($user);
        Auth::check();
        // $role = Auth::user()->role;
        // dd($role);
        if (Auth::check()) {
            $role = Auth::user()->role;
        
            if($role === 'Pasien') {
                    return redirect()->route('show.biodata')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name . '!');
             }elseif ($role === 'Dokter'){
                return redirect()->route('form.dokter')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name . '!');
             }else{
                return redirect()->route('index')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name . '!');
             }
        } else {
            return redirect()->route('index')->with('failed', 'Gagal untuk login ' . $user->name . '!');
        }
        
    }
    
    public function showRegisterForm()
    {
        return view('auth.register')->with('showRoleForm', true);
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Login with Google failed');
        }
    
        // Cek apakah pengguna dengan email Google sudah ada di database
        $existingUser = User::where('email', $googleUser->getEmail())->first();
    
        // Pengguna sudah ada, cek apakah memiliki relasi dengan Pasien
        if ($existingUser) {
            Auth::login($existingUser);
    
            // Jika pengguna belum memiliki relasi dengan Pasien, redirect ke halaman show.biodata
            if (!$existingUser->pasien) {
                return redirect('/form-biodata');
            }
    
            // Jika pengguna sudah memiliki relasi dengan Pasien, redirect ke halaman utama
            return redirect('/');
        } else {
            // Pengguna belum ada, buat pengguna baru
            $newUser = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt('your-random-password'), // Atau bisa menggunakan password acak
                'role' => 'pasien', // Sesuaikan dengan default role yang diinginkan
            ]);
    
            Auth::login($newUser);
    
            // Redirect ke halaman show.biodata karena pengguna baru belum memiliki relasi dengan Pasien
            return redirect('/form-biodata');
        }
    }
    

}
