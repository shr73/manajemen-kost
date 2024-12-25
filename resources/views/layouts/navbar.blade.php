<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kost Bahagia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kost Bahagia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
           <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('beranda.kamar')}}">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Sewa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Data Penyewa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
            </li>
          </ul>
 -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('beranda.kamar') }}">Kamar</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('beranda.pembayaran') }}">Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('beranda.penghuni') }}">Data Penyewa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('beranda.gedung') }}">Data Gedung</a>
          </li>

        @auth 
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
          data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <form method="POST" action="{{ route('logout')}}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
          </ul>
        </div>
      @else
      <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
      @endauth
          </form>
        </div>
      </div>
    </div>
  </nav>