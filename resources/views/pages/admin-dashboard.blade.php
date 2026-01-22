@extends('layouts.app')

@section('title', 'FPV SkyCraft - Admin Dashboard')

@section('content')

<section class="container py-5">
  <h2 class="fw-bold mb-1">Admin Dashboard</h2>
  <p class="text-muted mb-4">Manage products and orders.</p>

  <a href="/admin/products" class="btn btn-dark mb-4"><i class="bi bi-box-seam"></i> Manage Products</a>

  <div class="row g-4">
    <div class="col-12 col-lg-4">
      <div class="info-tile p-4">
        <div class="fw-bold mb-1">Products</div>
        <div class="text-muted">Add, edit, remove products.</div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="info-tile p-4">
        <div class="fw-bold mb-1">Orders</div>
        <div class="text-muted">View customer orders.</div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="info-tile p-4">
        <div class="fw-bold mb-1">Users</div>
        <div class="text-muted">Manage accounts.</div>
      </div>
    </div>
  </div>

  {{-- Backend comment: Admin only (role check) --}}
</section>

@endsection