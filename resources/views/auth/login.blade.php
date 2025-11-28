
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MedicineAI Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
body {
    background: linear-gradient(135deg, #0ba360, #3cba92);
    }
    .login-card {
    border-radius: 15px;
      background: #ffffff;
    }
  </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow p-4 login-card" style="max-width: 400px; width: 100%;">

    <!-- Logo -->
    <div class="text-center mb-3">
      <h2 class="fw-bold text-success">
        <i class="bi bi-capsule-pill"></i> MedicineAI
      </h2>
    </div>

    <!-- Title -->
    <h4 class="text-center mb-4 text-dark">
      <i class="bi bi-box-arrow-in-right"></i> Login
    </h4>

    <!-- Form -->
    <form method="POST" action="{{route('login.submit')}}">
        @csrf

      <div class="mb-3">
        <label class="form-label fw-semibold" for="email">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold" for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="remember" checked>
        <label class="form-check-label" for="remember">Always sign in on this device</label>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">
          <i class="bi bi-shield-lock"></i> Login
        </button>
      </div>

    </form>

  </div>

</body>
</html>
