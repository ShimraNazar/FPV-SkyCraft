@extends('layouts.app')

@section('title', 'FPV SkyCraft - Products')

@section('content')

<section class="container py-4 py-lg-5">
  <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-3">
    <div>
      <h2 class="fw-bold mb-1">Products</h2>
      <p class="text-muted mb-0">Search and filter by category.</p>
    </div>

    {{-- search bar --}}
    <form class="d-flex gap-2" action="/products" method="GET" id="searchForm">
      <input class="form-control" type="search" name="q" id="qInput" value="{{ request('q') }}" placeholder="Search (e.g. motor, dji, battery)">
      @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <button class="btn btn-dark" type="submit"><i class="bi bi-search"></i> Search</button>
    </form>
  </div>
</section>

<section class="container pb-5">
  <div class="row g-4">

    {{-- Filtering part --}}
    <aside class="col-12 col-lg-3">
      <div class="filter-card p-3 p-lg-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="fw-bold mb-0">Category</h5>
          <a href="/products" class="small text-decoration-none">Reset</a>
        </div>

        @php
          $cats = ['All','Motors','Stacks','Radios','Frames','Batteries','Propellers','Goggles','Video Systems'];
        @endphp

        <div class="d-grid gap-2">
          @foreach($cats as $cat)
            @php
              $isActive = (request('category') === $cat) || (!request('category') && $cat === 'All');
              $url = ($cat === 'All') ? '/products' : '/products?category='.urlencode($cat);
              if(request('q')) $url .= ($cat==='All' ? '?' : '&').'q='.urlencode(request('q'));
            @endphp
            <a class="btn btn-outline-dark btn-sm text-start {{ $isActive ? 'active' : '' }}" href="{{ $url }}">{{ $cat }}</a>
          @endforeach
        </div>

      </div>
    </aside>

    {{-- Grid --}}
    <div class="col-12 col-lg-9">
      <div class="results-bar mb-3">
        <div class="fw-semibold"><span id="resultCount">0</span> Results</div>
        <div class="text-muted small">Showing matched items</div>
      </div>

      <div class="row g-4" id="productGrid">

        {{-- Each card uses data name and data category for JS filtering --}}
        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="lumenier 2307 johnnyfpv v3 pro cinematic motor"
             data-category="Motors">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/Lumenier%202307%20motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/lumenier-2307-johnnyfpv-v3-pro-cinematic-motor">Lumenier 2307 JohnnyFPV V3 Pro Cinematic Motor</a></h6>
              <p class="text-muted small mb-2">Motors</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 13,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="iflight xing2 2205 fpv motor 2300kv unibell"
             data-category="Motors">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/iFlight%20XING2%202205%20FPV%20Motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/iflight-xing2-2205-fpv-motor-2300kv-unibell">iFlight XING2 2205 FPV Motor - 2300KV (Unibell)</a></h6>
              <p class="text-muted small mb-2">Motors</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 10,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="geprc speedx2 1002 motor no plug 18000kv 25000kv"
             data-category="Motors">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/GEPRC%20SpeedX2%201002%20Motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/geprc-speedx2-1002-motor-no-plug">GEPRC SpeedX2 1002 Motor - No Plug - 18000KV/25000KV</a></h6>
              <p class="text-muted small mb-2">Motors</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 6,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="axisflying blackbird v4 2307 fpv motor"
             data-category="Motors">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/Axisflying%20Blackbird%20V4%202307%20FPV%20Motor.jpeg') }}" class="card-img-top product-img" alt="Motor">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/axisflying-blackbird-v4-2307-fpv-motor">Axisflying Blackbird V4 2307 FPV Motor</a></h6>
              <p class="text-muted small mb-2">Motors</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 12,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="axisflying argus eco stack f4 fc 60a 6s 4-in-1 blheli_s esc 30x30"
             data-category="Stacks">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/Axisflying%20Argus%20ECO%20Stack.jpeg') }}" class="card-img-top product-img" alt="Stack">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/axisflying-argus-eco-stack-f4-fc-60a-6s-4in1">Axisflying Argus ECO Stack - F4 FC + 60A 6S 4-in-1</a></h6>
              <p class="text-muted small mb-2">Stacks</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 28,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="geprc taker stack f405 fc 50a 3-6s blheli_s esc"
             data-category="Stacks">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/GEPRC%20TAKER%20Stack.jpeg') }}" class="card-img-top product-img" alt="Stack">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/geprc-taker-stack-f405-fc-50a-3-6s">GEPRC TAKER Stack - F405 FC+ 50A 3-6S</a></h6>
              <p class="text-muted small mb-2">Stacks</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 27,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="radiomaster tx15 max radio transmitter elrs 2.4ghz"
             data-category="Radios">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/RadioMaster%20TX15%20Max%20Radio%20Transmitter.jpeg') }}" class="card-img-top product-img" alt="Radio">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/radiomaster-tx15-max-radio-transmitter-elrs-2-4ghz">RadioMaster TX15 Max - ELRS 2.4GHz</a></h6>
              <p class="text-muted small mb-2">Radios</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 74,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="radiomaster tx16s mkii max pro radio transmitter ag01 gimbals lumenier edition elrs 2.4ghz"
             data-category="Radios">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/RadioMaster%20TX16S%20MKII%20MAX%20PRO%20Radio%20Transmitter.jpeg') }}" class="card-img-top product-img" alt="Radio">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/radiomaster-tx16s-mkii-max-pro-lumenier-elrs-2-4ghz">RadioMaster TX16S MKII MAX PRO - ELRS 2.4GHz</a></h6>
              <p class="text-muted small mb-2">Radios</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 129,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="lumenier qav-s 2 joshua bardwell se 5 frame kit"
             data-category="Frames">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/Lumenier%20QAV-S%202%20Joshua%20Bardwell%20SE%205%E2%80%9D%20Frame%20Kit.jpeg') }}" class="card-img-top product-img" alt="Frame">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/lumenier-qav-s-2-joshua-bardwell-se-5-frame-kit">Lumenier QAV-S 2 Joshua Bardwell SE 5” Frame Kit</a></h6>
              <p class="text-muted small mb-2">Frames</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 34,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="lumenier qav-pro whoop 5 cinequads edition frame kit"
             data-category="Frames">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/Lumenier%20QAV-PRO%20Whoop%205%20inch%20Cinequads%20Edition-Frame%20Kit.jpeg') }}" class="card-img-top product-img" alt="Frame">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/lumenier-qav-pro-whoop-5-cinequads-edition-frame-kit">Lumenier QAV-PRO Whoop 5" Cinequads Edition - Frame Kit</a></h6>
              <p class="text-muted small mb-2">Frames</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 37,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="cnhl black series 100c 4s lipo battery 2000mah"
             data-category="Batteries">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/CNHL%20Black%20Series%20100C%204S%20LiPo%20Battery.jpeg') }}" class="card-img-top product-img" alt="Battery">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/cnhl-black-series-100c-4s-lipo-battery-2000mah">CNHL Black Series 100C 4S LiPo Battery - 2000mAh</a></h6>
              <p class="text-muted small mb-2">Batteries</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 18,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="xilo 1500mah 4s 100c basher lipo battery xt60 3 pack bundle"
             data-category="Batteries">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/XILO%201500mAh%204S%20100c%20Basher%20LiPo%20Battery%20XT60.jpeg') }}" class="card-img-top product-img" alt="Battery">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/xilo-1500mah-4s-100c-basher-lipo-battery-xt60-3-pack">XILO 1500mAh 4S 100c Basher LiPo Battery XT60 - 3 Pack Bundle</a></h6>
              <p class="text-muted small mb-2">Batteries</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 32,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="gemfan hurricane durable 51477 3-blade propeller set of 4"
             data-category="Propellers">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/Gemfan%20Hurricane%20Durable%2051477%203-Blade%20Propelle.jpeg') }}" class="card-img-top product-img" alt="Propeller">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/gemfan-hurricane-51477-3-blade-propeller-set-of-4">Gemfan Hurricane Durable 51477 3-Blade Propeller (Set of 4)</a></h6>
              <p class="text-muted small mb-2">Propellers</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 1,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="iflight nazgul t4030 2-blade propeller set of 4"
             data-category="Propellers">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/iFlight%20Nazgul%20T4030%202-Blade%20Propeller.jpeg') }}" class="card-img-top product-img" alt="Propeller">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/iflight-nazgul-t4030-2-blade-propeller-set-of-4">iFlight Nazgul T4030 2-Blade Propeller (Set of 4)</a></h6>
              <p class="text-muted small mb-2">Propellers</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 1,750</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="dji goggles integra"
             data-category="Goggles">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/DJI%20Goggles%20Integra.jpeg') }}" class="card-img-top product-img" alt="Goggles">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/dji-goggles-integra">DJI Goggles Integra</a></h6>
              <p class="text-muted small mb-2">Goggles</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 169,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="dji goggles n3 o4 air unit bundle"
             data-category="Goggles">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/DJI%20Goggles%20N3%20%2B%20O4%20Air%20Unit%20Bundle.jpeg') }}" class="card-img-top product-img" alt="Goggles Bundle">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/dji-goggles-n3-o4-air-unit-bundle">DJI Goggles N3 + O4 Air Unit Bundle</a></h6>
              <p class="text-muted small mb-2">Goggles</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 239,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="dji goggles 2"
             data-category="Goggles">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/DJI%20Goggles%202.jpeg') }}" class="card-img-top product-img" alt="Goggles">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/dji-goggles-2">DJI Goggles 2</a></h6>
              <p class="text-muted small mb-2">Goggles</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 199,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 product-item"
             data-name="dji o3 air unit"
             data-category="Video Systems">
          <div class="card product-card h-100">
            <img src="{{ asset('images/products/DJI%20O3%20Air%20Unit.jpeg') }}" class="card-img-top product-img" alt="Air Unit">
            <div class="card-body">
              <h6 class="fw-semibold mb-1"><a class="text-decoration-none text-dark" href="/products/dji-o3-air-unit">DJI O3 Air Unit</a></h6>
              <p class="text-muted small mb-2">Video Systems</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="fw-bold">LKR 139,950</div>
                <a href="/cart" class="btn btn-sm btn-dark"><i class="bi bi-cart-plus"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

      </div> 

    </div>
  </div>
</section>

@endsection
