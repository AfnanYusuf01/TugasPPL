<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


        <!-- Login Form -->
            <div class="text-center mb-8">
                <img src="{{ asset('img/logo1.png') }}" alt="Rumah Sakit IKN" class="w-24 h-24 mx-auto" />
                <h1 class="text-4xl font-bold text-white wow fadeInUp" data-wow-delay="0.2s">Rumah Sakit IKN</h1>
                <h5 class="text-lg text-blue-500 font-normal">Sign In to your account</h5>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4 flex items-center rounded-md ">
                    <!-- Ikon Email -->
                    <i class="fas fa-envelope text-2xl text-white-400"></i>
                    <!-- Input Email -->
                    <x-text-input
                        id="email"
                        class="w-full border-0 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ml-2"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />
                </div>
                <x-input-error :messages="$errors->get('email')" class="text-red-500 mt-2" />
                
                <!-- Password -->
                <div class="mb-4 flex items-center rounded-md ">
                    <!-- Ikon Email -->
                    <i class="fas fa-lock text-2xl text-white-400"></i>
                    <!-- Input Email -->
                    <x-text-input
                        id="email"
                        class="w-full border-0 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ml-2"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />
                </div>
                <x-input-error :messages="$errors->get('email')" class="text-red-500 mt-2" />

                <!-- Role Dropdown (If Exists) -->
                @if(isset($showRoleForm) && $showRoleForm)
                    <div class="mb-4">
                        <x-input-label for="role" :value="__('Role')" class="text-white wow fadeInUp" />
                        <select
                            id="role"
                            name="role"
                            class="block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        >
                            <option value="staff">Staff</option>
                            <option value="dokter">Dokter</option>
                        </select>
                    </div>
                @endif

                <!-- Remember Me -->
                <div class="mb-4 flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember"
                    />
                    <x-input-label for="remember_me" class="ml-2 text-white wow fadeInUp" :value="__('Remember me')" />
                </div>

                <!-- Links and Sign-In Button -->
                <div class="flex items-center justify-between">
                    <!-- Forgot Password -->
                    @if (Route::has('password.request'))
                        <a
                            class="text-sm text-white wow fadeInUp hover:text-gray-900"
                            href="{{ route('password.request') }}"
                        >
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <!-- Register and Google Sign-In Links -->
                    <div class="flex items-center">
                        @if(isset($showRoleForm) && $showRoleForm)
                            <a
                                class="text-sm text-white wow fadeInUp0 hover:text-gray-900"
                                href="{{ route('Register.pegawai') }}"
                            >
                                {{ __('Register') }}
                            </a>
                        @else
                            <a
                                class="text-sm text-white wow fadeInUp hover:text-gray-900"
                                href="{{ route('register') }}"
                            >
                                {{ __('Register') }}
                            </a>
                            <span class="mx-2 text-white wow fadeInUp">|</span>
                            <a
                                class="text-sm text-white wow fadeInUp hover:text-gray-900"
                                href="{{ route('login.google') }}"
                            >
                                {{ __('Sign in with Google') }}
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Log In Button -->
            <!-- Wrapper dengan flex dan justify-center -->
            <div class="flex justify-center mt-4">
                <!-- Tombol lebih kecil yang terpusat -->
                <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 py-1 px-3 text-sm rounded-md">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>


            </form>
</x-guest-layout>
