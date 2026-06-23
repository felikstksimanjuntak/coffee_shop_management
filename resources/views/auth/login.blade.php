<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Coffee Shop Management</title>
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

        .error {
            color: #ff6b6b;
            font-size: 13px;
            margin-top: 5px;
        }

        .btn {
            width: 100%;
            padding: 14px;
            background: #d4a373;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
            margin-top: 10px;
        }

        .btn:hover { background: #bc8a5f; transform: translateY(-2px); }

        .register-link {
            margin-top: 20px;
            font-size: 14px;
            color: #f5e6d3;
        }

        .register-link a { color: #d4a373; text-decoration: none; font-weight: 600; }

        .register-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="card">

    <div class="logo">☕</div>
    <h1>Selamat Datang</h1>
    <p class="subtitle">Masuk ke Coffee Shop Management</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                   placeholder="admin@coffee.com" required autofocus>
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

        <button type="submit" class="btn">Login</button>

    </form>

    <div class="register-link">
        Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
    </div>

</div>

</body>
</html>