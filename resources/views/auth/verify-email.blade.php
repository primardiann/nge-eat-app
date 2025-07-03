<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="margin: 0; padding: 0; background-color: transparent;">
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; width: 100%;">
        <div style="width: 100%; max-width: 480px; padding: 24px; background-color: #FFF7F0; border: 1px solid #F58220; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">

            {{-- Logo --}}
            <div style="display: flex; justify-content: center; margin-bottom: 24px;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 100px; height: 100px; object-fit: contain;">
            </div>

            {{-- Pesan --}}
            <div style="margin-bottom: 20px; font-size: 14px; color: #4B5563;">
                Terima kasih telah mendaftar! Sebelum memulai, tolong verifikasi email kamu dengan mengklik tautan yang baru saja kami kirim. Kalau belum menerima email, kami bisa kirim ulang!
            </div>

            {{-- Notifikasi jika link dikirim --}}
            @if (session('status') == 'verification-link-sent')
                <div style="margin-bottom: 20px; font-size: 14px; color: green;">
                    Tautan verifikasi baru telah dikirim ke alamat email yang kamu daftarkan.
                </div>
            @endif

            {{-- Tombol Kirim Ulang --}}
            <form method="POST" action="{{ route('verification.send') }}" style="margin-bottom: 20px;">
                @csrf
                <button type="submit"
                    style="width: 100%; padding: 12px; background-color: #F58220; color: white; font-weight: bold; font-size: 16px; border-radius: 8px; border: none;">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>

            {{-- Tombol Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    style="width: 100%; padding: 12px; background-color: #BE1E2D; color: white; font-weight: bold; font-size: 16px; border-radius: 8px; border: none;">
                    Keluar
                </button>
            </form>

        </div>
    </div>
</body>
</html>
