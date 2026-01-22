@extends('layouts.app')

@section('title', 'FPV SkyCraft - Login')

@section('content')

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-6 col-xl-5">
      <div class="auth-card p-4 p-lg-5">

        <div class="text-center mb-4">
          <img src="{{ asset('images/Logo.png') }}" class="auth-logo" alt="Logo">
          <h3 class="fw-bold mt-3 mb-1">Welcome back</h3>
          <p class="text-muted mb-0">Login to continue shopping.</p>
        </div>

        <form id="loginForm" novalidate>
          <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" id="loginEmail" required>
            <div class="invalid-feedback">Enter a valid email.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" id="loginPassword" minlength="6" required>
            <div class="invalid-feedback">Password must be at least 6 characters.</div>
          </div>

          <button class="btn btn-dark w-100 btn-lg" type="submit">Login</button>

          <p class="small text-muted mt-3 mb-0 text-center">
            Don't have an account? <a href="/register" class="text-decoration-none">Register</a>
          </p>

          {{-- Backend comment: Replace JS redirect with real auth + role-based redirect --}}
        </form>

      </div>
    </div>
  </div>
</section>

@endsection