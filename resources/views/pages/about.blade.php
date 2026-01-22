@extends('layouts.app')

@section('title', 'FPV SkyCraft - About')

@section('content')

<section class="about-hero py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-12 col-lg-6">
        <p class="hero-kicker mb-2" style="color:rgb(128, 116, 116)">About FPV SkyCraft</p>
        <h2 class="fw-bold mb-3">Curated FPV parts for every build.</h2>
        <p class="text-muted mb-4">
          FPV SkyCraft is built for enthusiasts who want reliable components and a clean shopping experience.
          We focus on popular FPV categories like motors, frames, stacks, radios and DJI digital gear.
        </p>
        <a href="/products" class="btn btn-dark btn-lg">Shop Products</a>
      </div>
      <div class="col-12 col-lg-6">
        <div class="about-card p-4 p-lg-5">
          <h5 class="fw-bold mb-3">What you can expect</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><i class="bi bi-check2-circle me-2"></i>Easy and intuitive product browsing</li>
            <li class="mb-2"><i class="bi bi-check2-circle me-2"></i>Well-organized categories for quick filtering</li>
            <li class="mb-2"><i class="bi bi-check2-circle me-2"></i>Modern, responsive shopping experience</li>
            <li><i class="bi bi-check2-circle me-2"></i>Instant access to detailed product information</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection