<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>

</head>
<body class="bg-warning-subtle">
<!-- navbar   -->
<x-navbar>

</x-navbar>
<div class="container mt-5">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header text-align-center text-center">
            <h3 class="card-title ">register</h3>
          </div>
          <div class="card-body bg-opacity-10">
            <form action="#">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="faizalAvatar">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="password">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="faizalcoli@gmail.com">
              </div>
              <button type="submit" class="btn btn-primary">email</button>
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center">sudah punya akun? <a href="/login">Daftar</a></p>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

