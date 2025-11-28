<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Animated Background */
        body {
            background: linear-gradient(120deg, #74ebd5, #acb6e5, #6a85e5);
            background-size: 400% 400%;
            animation: bgMove 10s ease infinite;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        @keyframes bgMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Navbar */
        .custom-navbar {
            width: 75%;
            margin: 20px auto;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.20);
            backdrop-filter: blur(6px);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
            padding: 8px 20px;
        }

        /* Right navbar links separation */
        .nav-right a {
            padding: 8px 18px;
            font-weight: 600;
            border-left: 2px solid rgba(255, 255, 255, 0.4);
        }
        .nav-right a:first-child {
            border-left: none;
        }

        /* Main content centering */
        .content-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        /* Typewriter animations */
        .typewriter {
            font-size: 3em;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            border-right: 4px solid white;
            width: 0;
            animation: typing 3.5s steps(30) forwards, blink 0.7s infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 550px; }
        }

        @keyframes blink {
            0% { border-color: transparent; }
            50% { border-color: white; }
            100% { border-color: transparent; }
        }

        p.subtitle {
            opacity: 0;
            animation: fadeIn 3s ease forwards;
            animation-delay: 1.5s;
            font-size: 1.4em;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold">Waal Technology</a>

        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Left group -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item pt-1">
                    <a class="nav-link text-white fw-semibold">Developers</a>
                </li>
            </ul>

            <!-- Right group -->
            <div class="d-flex nav-right">
                <a href="{{ route('login') }}" class="nav-link text-white fw-semibold">Login</a>
                <a href="{{ route('register') }}" class="nav-link text-white fw-semibold">Register</a>
            </div>

        </div>
    </div>
</nav>

<!-- MAIN CONTENT -->
<div class="content-container">
    <h1 class="typewriter" id="typeText"></h1>
    <p class="subtitle">Your intelligent pharmacy management assistant</p>

    <a href="{{route('register')}}" class="btn btn-light fw-bold px-4 py-2 mt-3">Get Started</a>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const text = "Welcome to MedicineAI";
    let index = 0;

    function typeWriter() {
        if (index < text.length) {
            document.getElementById("typeText").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeWriter, 120);  // speed
        }
    }

    window.onload = typeWriter;
</script>
</body>
</html>
