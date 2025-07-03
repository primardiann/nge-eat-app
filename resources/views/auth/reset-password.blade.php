<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Kata Sandi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- @vite kalau pakai Vite --}}
</head>
<body style="margin: 0; padding: 0; background-color: transparent;">
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; width: 100%; position: absolute; top: 0; left: 0;">
        <div style="width: 100%; max-width: 450px; padding: 20px; border: 1px solid #F58220; background-color: #FFF7F0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            
            {{-- Logo --}}
            <div style="display: flex; justify-content: center; margin-bottom: 24px;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 116px; height: 116px; object-fit: contain;">
            </div>

            {{-- Judul --}}
            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 23px;">
                <span style="font-size: 18px; font-weight: 550; text-align: center;">Atur Ulang Kata Sandi</span>
            </div>

            {{-- Form --}}
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                {{-- Token --}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                {{-- Email --}}
                <div style="margin-bottom: 23px;">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="block mt-1 w-full" placeholder="Email"
                        value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                        style="border: 1px solid #F58220;" />
                    @error('email') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Password --}}
                <div style="margin-bottom: 23px;">
                    <label for="password">Kata Sandi Baru</label>
                    <input id="password" name="password" type="password" class="block mt-1 w-full" required
                        autocomplete="new-password" placeholder="Kata Sandi Baru"
                        style="border: 1px solid #F58220;" />
                    @error('password') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div style="margin-bottom: 23px;">
                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        class="block mt-1 w-full" required autocomplete="new-password"
                        placeholder="Konfirmasi Kata Sandi" style="border: 1px solid #F58220;" />
                    @error('password_confirmation') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Tombol --}}
                <div style="display: flex; justify-content: center; margin-top: 30px;">
                    <button type="submit"
                        style="width: 350px; height: 50px; background-color: #BE1E2D; color: white; font-weight: 600; font-size: 16px; border-radius: 8px; display: flex; justify-content: center; align-items: center;">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
