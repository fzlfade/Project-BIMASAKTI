<style>
    /* Optional: Adjust navbar padding for different screen sizes */
    @media (min-width: 768px) {
      .navbar {
        color: #ffff;
        padding: 0.5rem 1rem;
      }
    }
</style>

<nav class="navbar navbar-expand-lg" style="background-color: #ffae00;">
    <div class="container">
      <a class="navbar-brand" href="#">Food Waste</a>
      
      <button 
        class="navbar-toggler shadow-none border-0" 
        type="button" 
        data-bs-toggle="offcanvas" 
        data-bs-target="#offcanvasNavbar" 
        aria-controls="offcanvasNavbar" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header text-dark border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close btn-btn-dark shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registerseller">Contact</a>
            </li>
          </ul>
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            <a href="/loginpage" class="text-dark text-decoration-none px-4 py-1 rounded-4" style="background-color: white">Login</a>
            <a href="/register" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: black">Register</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>

