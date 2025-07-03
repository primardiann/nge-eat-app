<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Kata Sandi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Atau @vite kalau pakai Vite --}}
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
                <span style="font-size: 18px; font-weight: 550; text-align: center;">Reset Kata Sandi Anda</span>
            </div>

            {{-- Penjelasan --}}
            <div style="margin-bottom: 20px; font-size: 14px; text-align: center; color: #4B5563;">
                {{ __('Lupa kata sandi Anda? Tidak masalah. Masukkan email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi.') }}
            </div>

            {{-- Status Sesi --}}
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Form Kirim Email Reset --}}
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                {{-- Input Email --}}
                <div style="margin-bottom: 23px;">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="Email" style="border: 1px solid #F58220;" class="block mt-1 w-full" />
                    @error('email') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                {{-- Tombol Kirim Link --}}
                <div style="display: flex; justify-content: center; margin-top: 30px;">
                    <button
                        type="submit"
                        style="width: 350px; height: 50px; background-color: #BE1E2D; color: white; font-weight: 600; font-size: 16px; border-radius: 8px; display: flex; justify-content: center; align-items: center;"
                    >
                        {{ __('Kirim Link Reset') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
