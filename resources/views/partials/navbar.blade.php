<nav class="navbar navbar-expand-lg navbar-dark site-nav">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="/">
      <span class="brand-sky">SKY</span><span class="brand-craft">CRAFT</span>
      
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">

      {{-- left side of nav bar --}}
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="/products">Products</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
      </ul>

      {{-- right side of nav bar --}}
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item"><a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="/register">Register</a></li>
        <li class="nav-item">
          <a class="nav-link position-relative {{ request()->is('cart') ? 'active' : '' }}" href="/cart" aria-label="Cart">
            <i class="bi bi-cart3 fs-5"></i>
            <span id="cartCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">0</span>
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>