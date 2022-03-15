{{-- <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="navbar-brand logo">
      <a href="{{ route('index') }}">
        <img src="{{ url('frontend/images/Infinity Desk (1).png') }}" alt="Infinity Desk | Fulfill your house with beautiful furniture" class="logo" />
      </a>
      <a style="font-size: 25px; color: #515151">Infinity Desk
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about-us">Our Service</a>
        </li>
        <li>
          @auth
          <a href="/dashboard" class="nav-link">
            <button class="btn-login">Hello, {{ auth()->user()->name }}</button>
          </a>
          @endauth

          @guest
          <a href="/login" class="nav-link">
            <button class="btn-login">Login</button>
          </a>
          @endguest
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
      <div class="navbar-brand logo">
          <a href="/">
              <!-- <img src="img/Infinity Desk (1).png"
                  alt="Infinity Desk | Fulfill your house with beautiful furniture" class="logo" /> -->
          </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/product">Product</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#about-us">Our Service</a>
              </li>
              <li>
                @auth
                <a href="/dashboard" class="nav-link">
                  <button class="btn-login">Hello, {{ auth()->user()->name }}</button>
                </a>
                @endauth
      
                @guest
                <a href="/login" class="nav-link">
                  <button class="btn-login">Login</button>
                </a>
                @endguest
              </li>
          </ul>
      </div>
  </div>
</nav>