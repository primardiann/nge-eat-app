<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Sesuai kebutuhan --}}
</head>
<body style="margin: 0; padding: 0;">
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div style="width: 100%; max-width: 480px; padding: 24px; background-color: #FFF7F0; border: 1px solid #F58220; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">

            {{-- Judul --}}
            <div style="margin-bottom: 20px; font-size: 14px; color: #4B5563;">
                Ini adalah area aman dari aplikasi. Silakan konfirmasi password kamu sebelum lanjut.
            </div>

            {{-- Form Konfirmasi --}}
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                {{-- Password --}}
                <div style="margin-bottom: 20px;">
                    <label for="password" style="display: block; font-weight: bold; margin-bottom: 5px;">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        style="width: 100%; padding: 10px; border: 1px solid #F58220; border-radius: 5px;" />
                    @error('password') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
                </div>

                {{-- Tombol --}}
                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit"
                        style="padding: 10px 20px; background-color: #BE1E2D; color: white; font-weight: bold; border: none; border-radius: 6px;">
                        Konfirmasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
