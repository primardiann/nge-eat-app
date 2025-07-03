<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- kalau pakai Vite: @vite --}}
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
                <span style="font-size: 18px; font-weight: 550; text-align: center;">Daftar Akun Baru</span>
            </div>

            {{-- Form register --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Nama --}}
                <div style="margin-bottom: 23px;">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama"
                        style="border: 1px solid #F58220;" class="block mt-1 w-full" />
                    @error('name') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Email --}}
                <div style="margin-bottom: 23px;">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Email"
                        style="border: 1px solid #F58220;" class="block mt-1 w-full" />
                    @error('email') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Password --}}
                <div style="margin-bottom: 23px;">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" required placeholder="Kata Sandi"
                        style="border: 1px solid #F58220;" class="block mt-1 w-full" />
                    @error('password') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div style="margin-bottom: 23px;">
                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Konfirmasi Kata Sandi"
                        style="border: 1px solid #F58220;" class="block mt-1 w-full" />
                    @error('password_confirmation') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Tombol Daftar --}}
                <div style="display: flex; justify-content: center; margin-top: 30px;">
                    <button type="submit"
                        style="width: 350px; height: 50px; background-color: #BE1E2D; color: white; font-weight: 600; font-size: 16px; border-radius: 8px; display: flex; justify-content: center; align-items: center;">
                        Daftar
                    </button>
                </div>
            </form>

            {{-- Link Login --}}
            <div style="display: flex; justify-content: center; margin-top: 20px;">
                <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">
                    Sudah punya akun? Masuk
                </a>
            </div>
        </div>
    </div>
</body>
</html>
