@extends('layouts.app')

@section('title', 'FPV SkyCraft - Dashboard')

@section('content')

<section class="container py-5">
  <h2 class="fw-bold mb-1">My Dashboard</h2>
  <p class="text-muted mb-4">Manage your account and orders.</p>

  <div class="row g-4">
    <div class="col-12 col-lg-4">
      <div class="info-tile p-4">
        <div class="fw-bold mb-1">My Profile</div>
        <div class="text-muted">Update your details.</div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="info-tile p-4">
        <div class="fw-bold mb-1">Orders</div>
        <div class="text-muted">View order history.</div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="info-tile p-4">
        <div class="fw-bold mb-1">Support</div>
        <div class="text-muted">Need help? Contact us.</div>
        <a class="btn btn-dark btn-sm mt-3" href="/contact">Contact</a>
      </div>
    </div>
  </div>

  {{-- Backend comment: Protect with auth middleware --}}
</section>

@endsection