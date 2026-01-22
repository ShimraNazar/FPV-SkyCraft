@extends('layouts.app')

@section('title', 'FPV SkyCraft - Contact')

@section('content')

<section class="container py-5">
  <div class="row g-4">
    <div class="col-12 col-lg-5">
      <h2 class="fw-bold mb-2">Contact</h2>
      <p class="text-muted">Send us a message and we'll respond soon.</p>

      <div class="contact-tile p-4 mb-3">
        <div class="fw-semibold"><i class="bi bi-envelope me-2"></i>Email</div>
        <div class="text-muted">support@fpvskycraft.com</div>
      </div>

      <div class="contact-tile p-4">
        <div class="fw-semibold"><i class="bi bi-telephone me-2"></i>Phone</div>
        <div class="text-muted">+94 81 358 1209</div>
      </div>
    </div>

    <div class="col-12 col-lg-7">
      <div class="auth-card p-4 p-lg-5">
        <h5 class="fw-bold mb-3">Send a message</h5>

        <form id="contactForm" novalidate>
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <label class="form-label fw-semibold">Name</label>
              <input class="form-control" id="cName" required>
              <div class="invalid-feedback">Name required.</div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label fw-semibold">Email</label>
              <input class="form-control" id="cEmail" type="email" required>
              <div class="invalid-feedback">Valid email required.</div>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">Message</label>
              <textarea class="form-control" id="cMsg" rows="5" required></textarea>
              <div class="invalid-feedback">Message required.</div>
            </div>
            <div class="col-12">
              <button class="btn btn-dark btn-lg w-100" type="submit">Send</button>
              <div id="contactSuccess" class="d-none mt-3 alert alert-success">Message sent successfully.</div>
            </div>
          </div>

          {{-- Backend comment: POST /contact, store message or send email --}}
        </form>

      </div>
    </div>
  </div>
</section>

@endsection