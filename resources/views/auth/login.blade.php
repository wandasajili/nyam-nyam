<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      height: 100vh;
    }
    .card {
      border-radius: 1rem;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <h3 class="card-title text-center mb-4">Login</h3>
            <form action="{{ route("login.submit") }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
            @if (session('failed'))
              <p class="text-danger"> {{ session('failed') }}</p>
            @endif

            <p class="text-center mt-3 mb-0">Don't have an account? <a href="/auth/registration">Register here</a></p>
          </div>
        </div>
      </div>k
    </div>
  </div>
</body>
</html>
