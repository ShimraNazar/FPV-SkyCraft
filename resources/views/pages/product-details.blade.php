@extends('layouts.app')

@section('title', 'FPV SkyCraft - Product Details')

@section('content')

<section class="container py-4 py-lg-5">

  <nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Home</a></li>
      <li class="breadcrumb-item"><a class="text-decoration-none" href="/products">Products</a></li>
      <li class="breadcrumb-item active" aria-current="page">Product</li>
    </ol>
  </nav>

  <div id="pdpNotFound" class="d-none p-4 bg-white rounded-4 border">
    <h4 class="fw-bold mb-1">Product not found</h4>
    <p class="text-muted mb-0">Please go back to products page.</p>
    <a href="/products" class="btn btn-dark mt-3">Back to Products</a>
  </div>

  <div id="pdpWrap" class="row g-4 d-none">

    <div class="col-12 col-lg-6">
      <div class="pdp-card p-3 p-lg-4">
        <div class="ratio ratio-1x1 pdp-img-wrap">
          <img id="pdpImg" class="pdp-img" alt="Product image">
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-6">
      <div class="pdp-card p-3 p-lg-4 h-100">
        <p class="text-muted small mb-1">Category: <span id="pdpCategory"></span></p>
        <h2 class="fw-bold mb-2" id="pdpName"></h2>
        <div class="d-flex align-items-center gap-2 mb-3">
          <span class="badge text-bg-success" id="pdpStock">In Stock</span>
        </div>

        <div class="fw-bold fs-3 mb-3">LKR <span id="pdpPrice"></span></div>

        <p class="text-muted mb-4" id="pdpDesc"></p>

        <div class="row g-3 mb-4" id="pdpSpecs"></div>

        <div class="d-flex flex-column flex-sm-row gap-2">
          <input type="number" class="form-control" value="1" min="1" style="max-width:120px;">
          <a href="/cart" class="btn btn-dark btn-lg flex-grow-1"><i class="bi bi-cart-plus"></i> Add to Cart</a>
        </div>

        {{-- Backend comment: Replace with real add-to-cart POST + session/cart table --}}
      </div>
    </div>

  </div>

</section>

@endsection