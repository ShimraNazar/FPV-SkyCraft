@extends('layouts.app')

@section('title', 'FPV SkyCraft - Cart')

@section('content')

<section class="container py-5">
  <div class="d-flex justify-content-between align-items-end mb-3">
    <div>
      <h2 class="fw-bold mb-1">Your Cart</h2>
      <p class="text-muted mb-0">Review items and place your order.</p>
    </div>
    <a href="/products" class="btn btn-outline-dark"><i class="bi bi-arrow-left"></i> Continue Shopping</a>
  </div>

  <div class="row g-4">
    <div class="col-12 col-lg-8">
      <div class="cart-card p-4">
        <h5 class="fw-bold mb-3">Items</h5>

        <!--  demo items -->
        <div class="d-flex gap-3 py-3 border-bottom">
          <img class="cart-thumb" src="{{ asset('images/products/Lumenier%202307%20motor.jpeg') }}" alt="item">
          <div class="flex-grow-1">
            <div class="d-flex justify-content-between">
              <div class="fw-semibold">Lumenier 2307 JohnnyFPV V3 Pro Cinematic Motor</div>
              <div class="fw-bold">LKR 13,950</div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <input class="form-control form-control-sm" style="width:90px;" type="number" value="1" min="1">
              <button class="btn btn-sm btn-outline-danger" type="button"><i class="bi bi-trash"></i> Remove</button>
            </div>
          </div>
        </div>

        <div class="d-flex gap-3 py-3">
          <img class="cart-thumb" src="{{ asset('images/products/DJI%20Goggles%202.jpeg') }}" alt="item">
          <div class="flex-grow-1">
            <div class="d-flex justify-content-between">
              <div class="fw-semibold">DJI Goggles 2</div>
              <div class="fw-bold">LKR 199,950</div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <input class="form-control form-control-sm" style="width:90px;" type="number" value="1" min="1">
              <button class="btn btn-sm btn-outline-danger" type="button"><i class="bi bi-trash"></i> Remove</button>
            </div>
          </div>
        </div>

        {{-- Backend comment: Render cart items from session/database --}}
      </div>
    </div>

    <div class="col-12 col-lg-4">
      <div class="cart-card p-4">
        <h5 class="fw-bold mb-3">Summary</h5>
        <div class="d-flex justify-content-between mb-2"><span class="text-muted">Subtotal</span><span>LKR 213,900</span></div>
        <div class="d-flex justify-content-between mb-2"><span class="text-muted">Shipping</span><span>LKR 0</span></div>
        <hr>
        <div class="d-flex justify-content-between mb-3"><span class="fw-semibold">Total</span><span class="fw-bold">LKR 213,900</span></div>
        <button class="btn btn-dark btn-lg w-100" type="button">Place Order</button>

        {{-- Backend comment: Place order -> save order + order items --}}
      </div>
    </div>
  </div>
</section>

@endsection