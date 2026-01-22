@extends('layouts.app')

@section('title', 'FPV SkyCraft - Register')

@section('content')

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-7 col-xl-6">
      <div class="auth-card p-4 p-lg-5">

        <div class="text-center mb-4">
          <img src="{{ asset('images/Logo.png') }}" class="auth-logo" alt="Logo">
          <h3 class="fw-bold mt-3 mb-1">Create account</h3>
          <p class="text-muted mb-0">Join FPV SkyCraft.</p>
        </div>

        <form id="registerForm" novalidate>
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <label class="form-label fw-semibold">First name</label>
              <input type="text" class="form-control" id="regFirst" required>
              <div class="invalid-feedback">First name required.</div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label fw-semibold">Last name</label>
              <input type="text" class="form-control" id="regLast" required>
              <div class="invalid-feedback">Last name required.</div>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">Email</label>
              <input type="email" class="form-control" id="regEmail" required>
              <div class="invalid-feedback">Valid email required.</div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label fw-semibold">Password</label>
              <input type="password" class="form-control" id="regPass" minlength="6" required>
              <div class="invalid-feedback">Minimum 6 characters.</div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label fw-semibold">Confirm password</label>
              <input type="password" class="form-control" id="regConfirm" minlength="6" required>
              <div class="invalid-feedback">Passwords must match.</div>
            </div>
            <div class="col-12">
              <button class="btn btn-dark w-100 btn-lg" type="submit">Register</button>
            </div>
          </div>

          <p class="small text-muted mt-3 mb-0 text-center">
            Already have an account? <a href="/login" class="text-decoration-none">Login</a>
          </p>

          {{-- Backend comment: Replace JS redirect with real register + login --}}
        </form>

      </div>
    </div>
  </div>
</section>

@endsection