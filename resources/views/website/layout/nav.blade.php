<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid container">
    <a class="navbar-brand" href="#home">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#features">features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#contact">contact</a>
        </li>
      </ul>
      <form class="d-flex" role="button">
        <a class="btn btn-outline-success" type="submit" href="{{('login')}}"><i class="bi bi-person"></i>login</a>
        <a class="btn btn-outline-success" type="submit" href="{{('register')}}"><i class="bi bi-person"></i>register</a>
        <a class="btn btn-outline-info" href="{{ route('crud.home') }}">
          Crud
        </a>
        <li>
          <div class="dropdown">
            <!-- <button class="btn btn-secondary dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
            </button> -->
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href=""> BD</a>
                <a class="dropdown-item" href=""> EN</a>
                <a class="dropdown-item" href=""> FR</a>
              </div>
          </div>
        </li>
      </form>
    </div>  
  </div>
</nav>