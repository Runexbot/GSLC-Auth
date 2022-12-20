@auth
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Authentication Web</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="margin-left: 1200px" aria-current="page" href=" {{ route('logout') }} "><button class="btn btn-primary">Logout</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @endauth

@guest
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Authentication Web</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 350px">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href=" {{ route('register') }} "><button class="btn btn-danger">Register</button></a>
              </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" {{ route('googlelogin') }} "><button class="btn btn-primary">Login With Google</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" {{ route('login') }} "><button class="btn btn-warning">Login With Email</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @endguest


