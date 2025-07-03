<x-guest-layout>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div style="width: 100%; max-width: 450px; padding: 20px; border: 1px solid #F58220; background-color: #FFF7F0;">

            <div style="display: flex; justify-content: center; margin-bottom: 24px;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 116px; height: 116px;">
            </div>

            <div style="text-align: center; font-weight: bold; margin-bottom: 20px;">Masuk Akun Anda</div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <x-input-label for="email" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mb-4 flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600">Ingat saya</label>
                </div>

                <div class="flex justify-between items-center">
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">Lupa Password?</a>
                    <button type="submit" style="background-color: #BE1E2D; color: white; padding: 8px 24px; border-radius: 8px;">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
