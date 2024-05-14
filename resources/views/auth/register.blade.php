<x-guest-layout>
    <!-- Bagian atas dengan logo dan judul -->
    <div class="text-center mb-8">
        <img src="{{ asset('img/logo1.png') }}" alt="Logo" class="w-24 h-24 mx-auto" />
        <h1 class="text-3xl font-bold text-white">Registrasi</h1>
        <h5 class="text-lg text-white">Buat Akun Baru</h5>
    </div>

    <!-- Formulir Registrasi -->
    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <!-- Nama -->
        <div class="mb-4 flex items-center border rounded-md p-2 bg-gray-800">
            <i class="fas fa-user text-white"></i>
            <x-text-input
                id="name"
                class="w-full border-0 ml-2"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
            />
        </div>
        <x-input-error :messages="$errors->get('name')" class="text-red-500 mt-2" />

        <!-- Email -->
        <div class="mb-4 flex items-center border rounded-md p-2 bg-gray-800">
            <i class="fas fa-envelope text-white"></i>
            <x-text-input
                id="email"
                class="w-full border-0 ml-2"
                type="email"
                name="email"
                :value="old('email')"
                required
            />
        </div>
        <x-input-error :messages="$errors->get('email')" class="text-red-500 mt-2" />

        <!-- Kata Sandi -->
        <div class="mb-4 flex items-center border rounded-md p-2 bg-gray-800">
            <i class="fas fa-lock text-white"></i>
            <x-text-input
                id="password"
                class="w-full border-0 ml-2"
                type="password"
                name="password"
                required
            />
        </div>
        <x-input-error :messages="$errors->get('password')" class="text-red-500 mt-2" />

        <!-- Ulangi Kata Sandi -->
        <div class="mb-4 flex items-center border rounded-md p-2 bg-gray-800">
            <i class="fas fa-lock text-white"></i>
            <x-text-input
                id="password_confirmation"
                class="w-full border-0 ml-2"
                type="password"
                name="password_confirmation"
                required
            />
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 mt-2" />

        <!-- Role Dropdown -->
        @if(isset($showRoleForm) && $showRoleForm)
            <div class="mb-4 flex items-center border rounded-md p-2 bg-gray-800">
                <x-input-label for="role" :value="__('Role')" class="text-white" />
                <select
                    id="role"
                    name="role"
                    class="w-full border-0 ml-2 bg-transparent text-white focus:ring-indigo-500 focus:border-indigo-500"
                >
                    <option value="staff">Staff</option>
                    <option value="dokter">Dokter</option>
                </select>
            </div>
            <x-input-error :messages="$errors->get('role')" class="text-red-500 mt-2" />
        @endif

        <!-- Tombol Register -->
        <div class="flex justify-center mt-4">
            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 py-1 px-3 text-sm rounded-md">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Tautan ke Login dan Google Sign-In -->
    <div class="flex justify-between mt-4">
        <a
            class="text-sm text-white hover:text-gray-200"
            href="{{ route('login') }}"
        >
            {{ __('Sudah punya akun? Masuk') }}
        </a>
        <a
            class="text-sm text-white hover:text-gray-200"
            href="{{ route('register.google') }}"
        >
            {{ __('Daftar dengan Google') }}
        </a>
    </div>

</x-guest-layout>
