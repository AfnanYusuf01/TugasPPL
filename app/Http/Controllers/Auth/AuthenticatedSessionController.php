<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
    
        $request->session()->regenerate();
    

        // Periksa apakah pengguna memiliki relasi Pasien
        $user = Auth::user();

        // Mengambil objek Pasien yang terkait dengan user
        $pasien = $user->pasien;
    
        // Jika pengguna belum memiliki Pasien, Anda dapat menangani kasus ini sesuai kebutuhan Anda
            if (!$pasien && $pasien->role == 'pasien') {
                return redirect()->route('show.biodata');
            }else {
                // Jika belum memiliki Pasien, arahkan ke rute lainnya
                return redirect()->route('index');
            }
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
    
    

    
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function showLoginForm()
    {
        return view('auth.login')->with('showRoleForm', true);
    }
}
