<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Coffee Shop Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif; }

        body {
            background: linear-gradient(rgba(40,25,20,.75), rgba(40,25,20,.75)),
            url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1400&q=80');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255,255,255,.12);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 25px;
            padding: 50px;
            width: 90%;
            max-width: 450px;
            color: white;
            text-align: center;
        }

        .logo { font-size: 60px; margin-bottom: 10px; }

        h1 { font-size: 28px; font-weight: 700; margin-bottom: 5px; }

        .subtitle { font-size: 14px; color: #f5e6d3; margin-bottom: 30px; }

        .form-group { margin-bottom: 20px; text-align: left; }

        label { display: block; margin-bottom: 6px; font-size: 14px; color: #f5e6d3; }

        input {
            width: 100%;
            padding: 12px 16px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,.3);
            background: rgba(255,255,255,.15);
            color: white;
            font-size: 15px;
            outline: none;
        }

        input::placeholder { color: rgba(255,255,255,.5); }

        input:focus { border-color: #d4a373; }

        .error { color: #ff6b6b; font-size: 13px; margin-top: 5px; }

        .btn {
            width: 100%;
            padding: 14px;
            background: #2d6a4f;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
            margin-top: 10px;
        }

        .btn:hover { background: #1b4332; transform: translateY(-2px); }

        .login-link {
            margin-top: 20px;
            font-size: 14px;
            color: #f5e6d3;
        }

        .login-link a { color: #d4a373; text-decoration: none; font-weight: 600; }

        .login-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="card">

    <div class="logo">☕</div>
    <h1>Buat Akun</h1>
    <p class="subtitle">Daftar ke Coffee Shop Management</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
                   placeholder="Nama lengkap" required autofocus>
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                   placeholder="email@contoh.com" required>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                   placeholder="••••••••" required>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                   placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn">Daftar</button>

    </form>

    <div class="login-link">
        Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
    </div>

</div>

</body>
</html>