<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjT+T0qfrbM+BzxQvThuokKF/+DSuIcOPu/dTPy7yGtT++WLv" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Food-Waste-Project/resources/css/navbar-menu.css"> <script src="navbar.js"></script> 
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #ffae00;" >
    <div class="container-fluid justify-content-between">
      <div class="d-flex">
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="tokoedit">
          <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="20"
            alt="MDB Logo"
            loading="lazy"
            style="margin-top: 2px;"
          />
        </a>
      </div>
      <ul class="navbar-nav flex-row right-nav">
        <li class="nav-item me-2 me-lg-1">
          <a class="nav-link d-sm-flex align-items-sm-center" href="#">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp"
              class="rounded-circle"
              height="22"
              width="22"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
            <div class="font-medium text-base text-gray-800"></div>
          </a>
        </li>
        <style>
          .nav-item .nav-link i{
          font-size: 23px; /* Or use Font Awesome classes  */
          }
          .nav-item .nav-link {
            display: flex; /* Makes the anchor tag behave like a box for alignment */
            justify-content: center; /* Centers content horizontally within anchor tag */
            align-items: center; /* Centers content vertically within anchor tag */
          }
        </style>
          <div>{{ Auth::user()->name }}</div>

          <div class="ms-1">
              <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
          </div>
      
        
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link d-flex justify-content-center align-items-center" href="#">
        <li class="nav-item me-3 me-lg-1">
            <span><i class="fa-solid fa-house"></i></span>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link d-flex justify-content-center align-items-center" href="/chatify">
            <span><i class="bi bi-chat"></i></span>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link d-flex justify-content-center align-items-center" href="#">
            <span><i class="fa-solid fa-clock-rotate-left"></i></span>
          </a>
        </li>
            <div>
                <form method ="POST" action="/logout">
                    @csrf
                  <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="route('logout')" 
                      onclick="event.preventDefault();this.closest('form').submit();">
                      <span><i class="fas fa-sign-out-alt"></i></span>
                    </a>
                  </li>
                </form>
          </div>
      </ul>
    </div>
  </nav>

</body>
</html>

