<header class="bg-secondary">
    <nav class="navbar fw-bolder container navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="logo" width="40" height="40">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{route("home")}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <div class="nav-link active dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </div>
                <ul class="dropdown-menu bg-secondary">
                  <li><a class="dropdown-item text-white" href="#">Nome</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>

