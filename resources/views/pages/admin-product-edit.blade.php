@extends('layouts.app')

@section('title', 'FPV SkyCraft - Edit Product')

@section('content')

<section class="container py-5">
  <div class="d-flex justify-content-between align-items-end mb-3">
    <div>
      <h2 class="fw-bold mb-1">Edit Product</h2>
      <p class="text-muted mb-0">Update product details.</p>
    </div>
    <a href="/admin/products" class="btn btn-outline-dark">Back</a>
  </div>

  <div class="auth-card p-4 p-lg-5">
    <form id="adminEditForm" novalidate>
      <div class="row g-3">
        <div class="col-12">
          <label class="form-label fw-semibold">Product Name</label>
          <input class="form-control" value="DJI Goggles 2" required>
          <div class="invalid-feedback">Required.</div>
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label fw-semibold">Category</label>
          <select class="form-select" required>
            <option>Goggles</option>
            <option>Motors</option><option>Stacks</option><option>Radios</option><option>Frames</option>
            <option>Batteries</option><option>Propellers</option><option>Video Systems</option>
          </select>
          <div class="invalid-feedback">Required.</div>
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label fw-semibold">Price (LKR)</label>
          <input type="number" class="form-control" value="199950" min="0" required>
          <div class="invalid-feedback">Required.</div>
        </div>
        <div class="col-12">
          <label class="form-label fw-semibold">Description</label>
          <textarea class="form-control" rows="4" required>Premium DJI digital FPV goggles.</textarea>
          <div class="invalid-feedback">Required.</div>
        </div>
        <div class="col-12">
          <button class="btn btn-dark btn-lg w-100" type="submit">Update</button>
        </div>
      </div>

      {{-- Backend comment: PUT/PATCH /admin/products/{id} --}}
    </form>
  </div>
</section>

@endsection