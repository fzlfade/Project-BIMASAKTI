<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>

</head>
<body class="bg-warning-subtle">
<!-- navbar   -->
<x-navbar></x-navbar>
<div class="container mt-5">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header text-align-center text-center">
            <h3 class="card-title">Login</h3>
          </div>
          <div class="card-body bg-opacity-10">
            <form action="#">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
                <div id="usernameHelp" class="form-text">Masukkan username Anda.</div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password">
              </div>
              <button type="submit" class="btn btn-primary" >Login</button>
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center">Belum punya akun? <a href="/register">Daftar</a></p>
          </div>
        </div>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

