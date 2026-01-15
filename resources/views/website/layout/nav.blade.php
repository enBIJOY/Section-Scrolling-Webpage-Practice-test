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
        <!-- <li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </li> -->
      </ul>
      <form class="d-flex" role="button">
        <a class="btn btn-outline-success" type="submit" href="{{('login')}}"><i class="bi bi-person"></i>login</a>
        <a class="btn btn-outline-success" type="submit" href="{{('register')}}"><i class="bi bi-person"></i>register</a>
        <a class="btn btn-outline-info" href="{{ route('crud.home') }}">
          Crud
        </a>
      </form>
      <li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(session()->get('locale')=='english')
                  English
                @else
                  Bangla
                @endif
              </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('locale', 'bangla')}}"> Bengali</a>
                  <a class="dropdown-item" href="{{ route('locale', 'english')}}"> English</a>
                  <!-- <a class="dropdown-item" href="{{ route('locale', 'France')}}"> Frence</a> -->
                </div>
            </div>
        </li>
    </div>  
  </div>
</nav>