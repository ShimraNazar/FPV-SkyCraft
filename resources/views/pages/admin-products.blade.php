@extends('layouts.app')

@section('title', 'FPV SkyCraft - Admin Products')

@section('content')

<section class="container py-5">
  <div class="d-flex justify-content-between align-items-end mb-3">
    <div>
      <h2 class="fw-bold mb-1">Manage Products</h2>
      <p class="text-muted mb-0">Add, edit or remove products.</p>
    </div>
    <a href="/admin/products/create" class="btn btn-dark"><i class="bi bi-plus-lg"></i> Add Product</a>
  </div>

  <div class="bg-white rounded-4 border p-3 p-lg-4 table-responsive">
    <table class="table align-middle mb-0">
      <thead>
        <tr>
          <th>Product</th>
          <th>Category</th>
          <th>Price (LKR)</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fw-semibold">DJI Goggles 2</td>
          <td>Goggles</td>
          <td>199,950</td>
          <td class="text-end">
            <a href="/admin/products/dji-goggles-2/edit" class="btn btn-sm btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
            <button class="btn btn-sm btn-outline-danger" type="button"><i class="bi bi-trash"></i> Remove</button>
          </td>
        </tr>
      </tbody>
    </table>

    {{-- Backend comment: render products table from DB + delete action --}}
  </div>
</section>

@endsection
