@extends('components.layout')
@section('content')
<x-navbar></x-navbar>
<x-guest-layout>

    {{-- <form method= "POST" action="/login" class="hidden">
        @csrf
        <!-- Nama Toko -->
        <div>
            <x-input-label for="nama_toko" :value="__('Nama Toko')" />
            <x-text-input id="nama_toko" class="block mt-1 w-full" type="text" name="nama_toko" :value="old('nama_toko')" required autofocus autocomplete="nama_toko" />
            <x-input-error :messages="$errors->get('na  me')" class="mt-2" />
        </div>
        <!-- Foto  Profil Toko -->
        <div>
            <label for="foto_profil_toko" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="foto_profil_toko">
            <small class="text-muted">Ukuran gambar: maks. 1 MB. Format gambar: JPEG, PNG</small>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div>
            <x-input-label for="Alamat Toko" :value="__('Alamat Toko')" />
            <x-text-input id="alamat_toko" class="block mt-1 w-full" type="text" name="alamat_toko" :value="old('alamat_toko')" required autofocus autocomplete="alamat_toko" />
            <x-input-error :messages="$errors->get('alamat_toko')" class="mt-2" />
        </div>
    </form> --}}

    <form method="POST" action="{{ route('registerseller') }}"  enctype="multipart/form-data">
        @csrf
        
         <!-- Nama Toko -->
         <div>
            <x-input-label for="nama_toko" :value="__('Nama Toko')" />
            <x-text-input id="nama_toko" class="block mt-1 w-full" type="text" name="nama_toko" :value="old('nama_toko')" required autofocus autocomplete="nama_toko" />
            <x-input-error :messages="$errors->get('na  me')" class="mt-2" />
        </div>
        <!-- Foto  Profil Toko -->
        <div>
            <label for="foto_profil_toko" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="foto_profil_toko">
            <small class="text-muted">Ukuran gambar: maks. 1 MB. Format gambar: JPEG, PNG</small>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div>
            <x-input-label for="Alamat Toko" :value="__('Alamat Toko')" />
            <x-text-input id="alamat_toko" class="block mt-1 w-full" type="text" name="alamat_toko" :value="old('alamat_toko')" required autofocus autocomplete="alamat_toko" />
            <x-input-error :messages="$errors->get('alamat_toko')" class="mt-2" />
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Pemilik Usaha')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    
        
</x-guest-layout>
@endsection