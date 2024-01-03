<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-dark fw-normal">Sign In</h5>
        <h1 class="mb-5">Rumah Sakit IKN</h1>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Role Dropdown -->
        @if(isset($showRoleForm) && $showRoleForm)
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select id="role" name="role" class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="staff">Staff</option>
                <option value="dokter">Dokter</option>
            </select>
        </div>
        @endif

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            @if(isset($showRoleForm) && $showRoleForm)
            <!-- Register Link -->
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('Register.pegawai') }}">
                /{{ __('Register') }}
            </a>

        @else
        <br>
            <div class="flex items-center justify-between mt-4">
                <div>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Register ') }}
                    </a>
                </div>
                <div>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login.google') }}">
                        {{ __('/     Sign With Google') }}
                    </a>
                </div>
            </div>
        @endif
        
        <!-- Log In Button -->
        <x-primary-button class="mt-4">
            {{ __('Log in') }}
        </x-primary-button>
                
        </div>
    </form>
</x-guest-layout>
