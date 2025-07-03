<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - NgeEat</title>
</head>
<body style="margin: 0; padding: 0;">

    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: transparent; width: 100%; position: absolute; top: 0; left: 0;">
        <div style="width: 100%; max-width: 450px; padding: 20px; border: 1px solid #F58220; background-color: #FFF7F0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

            <!-- Logo -->
            <div style="display: flex; justify-content: center; margin-bottom: 24px;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 116px; height: 116px; object-fit: contain;">
            </div>

            <!-- Judul -->
            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 23px;">
                <span style="font-size: 18px; font-weight: 550; text-align: center;">Masuk Akun Anda</span>
            </div>

            <!-- Status sesi -->
            @if (session('status'))
                <div class="mb-4" style="color: green; font-weight: bold;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div style="margin-bottom: 23px;">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Email"
                        style="border: 1px solid #F58220; width: 100%; padding: 8px; border-radius: 4px;"
                    />
                    @error('email')
                        <div style="color: red; font-size: 14px;">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div style="margin-bottom: 23px;">
                    <label for="password">Kata Sandi</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        placeholder="Kata Sandi"
                        style="border: 1px solid #F58220; width: 100%; padding: 8px; border-radius: 4px;"
                    />
                    @error('password')
                        <div style="color: red; font-size: 14px;">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div style="margin-bottom: 23px;">
                    <label for="remember_me" style="display: inline-flex; align-items: center;">
                        <input
                            id="remember_me"
                            name="remember"
                            type="checkbox"
                            style="margin-right: 8px;"
                        />
                        <span style="font-size: 14px; color: #4B5563; background-color: white; padding: 3px 8px;">
                            Ingatlah saya selama 30 hari
                        </span>
                    </label>
                </div>

                <!-- Lupa Sandi -->
                @if (Route::has('password.request'))
                    <div style="display: flex; justify-content: flex-end; margin-bottom: 16px;">
                        <a href="{{ route('password.request') }}"
                            style="font-size: 14px; text-decoration: underline; color: #4B5563;">
                            Lupa Kata Sandi?
                        </a>
                    </div>
                @endif

                <!-- Tombol Login -->
                <div style="display: flex; justify-content: center; margin-top: 30px;">
                    <button
                        type="submit"
                        style="width: 350px; height: 50px; background-color: #BE1E2D; color: white; font-weight: 600; font-size: 16px; border-radius: 8px; display: flex; justify-content: center; align-items: center;"
                    >
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
