<nav class="navbar navbar-expand-lg" style="background-color: #004D40; border-bottom: 2px solid #00897B;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}" style="color:#FFEB3B; font-weight: bold;">
      LuxeStyle - Premium Shopping
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: invert(0.8);"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}" style="color:#FFEB3B;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cart.show') }}" style="color:#FFEB3B;">Your Cart</a>
        </li>
        @auth
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-link nav-link" style="color: #FFEB3B; text-decoration: none;">Sign Out</button>
          </form>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}" style="color:#FFEB3B;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}" style="color:#FFEB3B;">Register</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
