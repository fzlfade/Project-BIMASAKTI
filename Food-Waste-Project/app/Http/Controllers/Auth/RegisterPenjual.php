<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Seller;

class RegisterPenjual extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registerseller');
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nama_toko' => ['required' ,'string' ,'max:100'],
            'foto_profil_toko' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'], // max 2MB
            'alamat_toko'=> ['required' ,'string' ,'max:100'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $image = $request->file('foto_profil_toko');
        $image->storeAs('public/img/foto_profil_toko', $image->hashName());

        event(new Registered($user));

        Auth::login($user);

        $user->assignRole('seller');

        $user = Seller::create([
            'user_id' => Auth::user()->id,
            'nama_toko' => $request->nama_toko,
            'foto_profil_toko' => $image->hashName(),
            'alamat_toko' => $request->alamat_toko,
         ]);


        return redirect(route('dashboard', absolute: false));
        
        
    }

}
