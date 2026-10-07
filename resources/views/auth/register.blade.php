<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar • PawCare Aceh</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root{
            --green:#111827;
            --green-2:#1f2937;
            --cream:#fbfaf6;
            --muted:#6b7280;
            --line:#e5e7eb;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Inter,sans-serif;
            background:var(--cream);
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:24px;
        }

        .auth-card{
            width:100%;
            max-width:460px;
            background:#fff;
            border:1px solid var(--line);
            border-radius:32px;
            padding:40px;
            box-shadow:0 20px 40px rgba(0,0,0,.05);
        }

        .brand{
            text-align:center;
            margin-bottom:32px;
        }

        .brand h1{
            color:var(--green);
            font-size:1.8rem;
            font-weight:800;
        }

        .brand p{
            margin-top:8px;
            color:var(--muted);
        }

        .field{
            margin-bottom:18px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-size:.9rem;
            font-weight:600;
            color:var(--green);
        }

        input{
            width:100%;
            padding:14px 16px;
            border:1px solid var(--line);
            border-radius:14px;
            font-size:.95rem;
        }

        input:focus{
            outline:none;
            border-color:var(--green);
        }

        .btn{
            width:100%;
            padding:14px;
            border:none;
            border-radius:14px;
            background:var(--green);
            color:#fff;
            font-weight:700;
            cursor:pointer;
        }

        .footer{
            margin-top:24px;
            text-align:center;
            color:var(--muted);
        }

        .footer a{
            color:var(--green);
            font-weight:700;
            text-decoration:none;
        }
    </style>
</head>
<body>

<div class="auth-card">

    <div class="brand">
        <h1>🐾 PawCare Aceh</h1>
        <p>Buat akun baru</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="field">
            <label>Nama Lengkap</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required>
        </div>

        <div class="field">
            <label>Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required>
        </div>

        <div class="field">
            <label>Password</label>
            <input
                type="password"
                name="password"
                required>
        </div>

        <div class="field">
            <label>Konfirmasi Password</label>
            <input
                type="password"
                name="password_confirmation"
                required>
        </div>

        <button type="submit" class="btn">
            Daftar
        </button>

        <div class="footer">
            Sudah punya akun?
            <a href="{{ route('login') }}">Masuk</a>
        </div>

    </form>

</div>

</body>
</html>
