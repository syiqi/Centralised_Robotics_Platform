<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARii Business Data Registration Module</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            overflow: hidden;
        }

        .hero {
            background-image: url('https://img.goodfon.com/wallpaper/nbig/e/d4/robotics-cyborg-arm-metal.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 20px;
            position: relative;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: -1px;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
        }

        .auth-links {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .auth-links a {
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s ease-in-out;
        }

        .auth-links a:hover {
            color: #8B0000;
        }
    </style>
</head>
<body>

<div class="hero">
    <br><h1 style="font-size: 6rem; color: #FF0000; font-weight: bold; text-align: center; margin: 0;">
        MARii Business Data<br>Registration Module
    </h1>
</div>



<div class="auth-links">
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    @endif
</div>

</body>
</html>
