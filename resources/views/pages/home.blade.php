@extends('layouts.app')

@section('title', 'FPV SkyCraft - Home')

@section('content')

<section class="hero-wrap">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

      
      <div class="carousel-item active">
        <div class="hero-slide hero-slide-bg">
          <div class="hero-overlay">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                  <p class="hero-kicker mb-2">SkyCraft</p><br><br><br>
                  <br><br><br>
                  <br><br><br>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- 2nd slide --}}
      <div class="carousel-item">
        <div class="hero-slide hero-slide-gold">
          <div class="container">
            <div class="row align-items-center g-4">
              <div class="col-12 col-lg-6">
                <p class="hero-kicker mb-2">Motors</p>
                <h2 class="hero-title mb-3">Powerful motors for smooth flight.</h2>
                <p class="hero-text mb-4">Choose the right motor for freestyle, cinematic and micro builds.</p>
                <a href="/products?category=Motors" class="btn btn-dark btn-lg">
                  Explore Motors <i class="bi bi-compass ms-1"></i>
                </a>
              </div>
              <div class="col-12 col-lg-6 text-center text-lg-end">
                <img class="hero-img" src="{{ asset('images/products/iFlight%20XING2%202205%20FPV%20Motor.jpeg') }}" alt="Motor">
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- 3rd slide --}}
      <div class="carousel-item">
        <div class="hero-slide hero-slide-gold">
          <div class="container">
            <div class="row align-items-center g-4">
              <div class="col-12 col-lg-6">
                <p class="hero-kicker mb-2">DJI Digital</p>
                <h2 class="hero-title mb-3">Immersive goggles & video systems.</h2>
                <p class="hero-text mb-4">Enjoy crisp digital FPV experience with DJI gear.</p>
                <a href="/products?category=Goggles" class="btn btn-dark btn-lg">
                  Shop Goggles <i class="bi bi-cart3 ms-1"></i>
                </a>
              </div>
              <div class="col-12 col-lg-6 text-center text-lg-end">
                <img class="hero-img" src="{{ asset('images/products/DJI%20Goggles%202.jpeg') }}" alt="Goggles">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</section>

<section class="container py-5">
  <div class="d-flex justify-content-between align-items-end gap-2 mb-3">
    <div>
      <h3 class="fw-bold mb-1">Trending Products</h3>
      <p class="text-muted mb-0">Popular items customers are viewing.</p>
    </div>
    <a class="btn btn-outline-dark" href="/products">View All</a>
  </div>

  <!-- Simple 10 cards (only frontend). Backend can later load from DB. -->
  <div class="row g-4">

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/Lumenier%202307%20motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/lumenier-2307-johnnyfpv-v3-pro-cinematic-motor">Lumenier 2307 JohnnyFPV V3 Pro Cinematic Motor</a></h6>
          <p class="text-muted small mb-2">Motors</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 13,950</div>
            <a class="btn btn-sm btn-dark" href="/products/lumenier-2307-johnnyfpv-v3-pro-cinematic-motor">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/iFlight%20XING2%202205%20FPV%20Motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/iflight-xing2-2205-fpv-motor-2300kv-unibell">iFlight XING2 2205 FPV Motor - 2300KV (Unibell)</a></h6>
          <p class="text-muted small mb-2">Motors</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 10,950</div>
            <a class="btn btn-sm btn-dark" href="/products/iflight-xing2-2205-fpv-motor-2300kv-unibell">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/GEPRC%20SpeedX2%201002%20Motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/geprc-speedx2-1002-motor-no-plug">GEPRC SpeedX2 1002 Motor - No Plug - 18000KV/25000KV</a></h6>
          <p class="text-muted small mb-2">Motors</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 6,950</div>
            <a class="btn btn-sm btn-dark" href="/products/geprc-speedx2-1002-motor-no-plug">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/Axisflying%20Blackbird%20V4%202307%20FPV%20Motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/axisflying-blackbird-v4-2307-fpv-motor">Axisflying Blackbird V4 2307 FPV Motor</a></h6>
          <p class="text-muted small mb-2">Motors</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 12,950</div>
            <a class="btn btn-sm btn-dark" href="/products/axisflying-blackbird-v4-2307-fpv-motor">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/Axisflying%20Argus%20ECO%20Stack.jpeg') }}" class="card-img-top product-img" alt="Stack">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/axisflying-argus-eco-stack-f4-fc-60a-6s-4in1">Axisflying Argus ECO Stack - F4 FC + 60A 6S 4-in-1</a></h6>
          <p class="text-muted small mb-2">Stacks</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 28,950</div>
            <a class="btn btn-sm btn-dark" href="/products/axisflying-argus-eco-stack-f4-fc-60a-6s-4in1">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/GEPRC%20TAKER%20Stack.jpeg') }}" class="card-img-top product-img" alt="Stack">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/geprc-taker-stack-f405-fc-50a-3-6s">GEPRC TAKER Stack - F405 FC+ 50A 3-6S</a></h6>
          <p class="text-muted small mb-2">Stacks</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 27,950</div>
            <a class="btn btn-sm btn-dark" href="/products/geprc-taker-stack-f405-fc-50a-3-6s">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/RadioMaster%20TX15%20Max%20Radio%20Transmitter.jpeg') }}" class="card-img-top product-img" alt="Radio">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/radiomaster-tx15-max-radio-transmitter-elrs-2-4ghz">RadioMaster TX15 Max - ELRS 2.4GHz</a></h6>
          <p class="text-muted small mb-2">Radios</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 74,950</div>
            <a class="btn btn-sm btn-dark" href="/products/radiomaster-tx15-max-radio-transmitter-elrs-2-4ghz">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/RadioMaster%20TX16S%20MKII%20MAX%20PRO%20Radio%20Transmitter.jpeg') }}" class="card-img-top product-img" alt="Radio">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/radiomaster-tx16s-mkii-max-pro-lumenier-elrs-2-4ghz">RadioMaster TX16S MKII MAX PRO - ELRS 2.4GHz</a></h6>
          <p class="text-muted small mb-2">Radios</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 129,950</div>
            <a class="btn btn-sm btn-dark" href="/products/radiomaster-tx16s-mkii-max-pro-lumenier-elrs-2-4ghz">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/Lumenier%20QAV-S%202%20Joshua%20Bardwell%20SE%205%E2%80%9D%20Frame%20Kit.jpeg') }}" class="card-img-top product-img" alt="Frame">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/lumenier-qav-s-2-joshua-bardwell-se-5-frame-kit">Lumenier QAV-S 2 Joshua Bardwell SE 5” Frame Kit</a></h6>
          <p class="text-muted small mb-2">Frames</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 34,950</div>
            <a class="btn btn-sm btn-dark" href="/products/lumenier-qav-s-2-joshua-bardwell-se-5-frame-kit">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card h-100">
        <img src="{{ asset('images/products/Lumenier%20QAV-PRO%20Whoop%205%20inch%20Cinequads%20Edition-Frame%20Kit.jpeg') }}" class="card-img-top product-img" alt="Frame">
        <div class="card-body">
          <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/lumenier-qav-pro-whoop-5-cinequads-edition-frame-kit">Lumenier QAV-PRO Whoop 5" Cinequads Edition - Frame Kit</a></h6>
          <p class="text-muted small mb-2">Frames</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">LKR 37,950</div>
            <a class="btn btn-sm btn-dark" href="/products/lumenier-qav-pro-whoop-5-cinequads-edition-frame-kit">View</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection