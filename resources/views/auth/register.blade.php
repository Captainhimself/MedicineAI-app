<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .register-box {
            width: 420px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeIn 1.2s ease-in-out;
        }

        .register-box h3 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            font-weight: bold;
        }

        label {
            color: #fff;
            font-weight: 500;
        }

        .form-control {
            border-radius: 12px;
            background: rgba(255,255,255,0.4);
            border: none;
            color: #000;
            font-weight: 500;
        }

        .btn-custom {
            background: #0d6efd;
            border-radius: 12px;
            padding: 10px;
            width: 100%;
            color: #fff;
            font-weight: bold;
        }

        .btn-custom:hover {
            background: #084298;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            color: #fff;
        }

        .footer-text a {
            color: #fff;
            font-weight: bold;
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>

<body>

<div class="register-box">
    <h3>Create Business Account</h3>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label>Username/Company Name</label>
            <input type="text" name="company_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="phonenumber" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button class="btn btn-custom">Register</button>
    </form>

    <p class="footer-text">
        Already have an account? <a href="{{route('login')}}">Login</a>
    </p>
</div>

</body>
</html>
