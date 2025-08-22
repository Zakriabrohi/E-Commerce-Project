<!-- Add Bootstrap Icons CDN (only once) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="footer">

  <footer class="text-white text-center text-lg-start mt-5" style="background: linear-gradient(135deg,rgb(69, 155, 247),rgb(245, 42, 252));">
    <div class="container p-4">
      <div class="row">

        <!-- About -->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase fw-bold"><i class="bi bi-shop"></i> ABZ Store</h5>
          <p>
            Your one-stop shop for quality products. Discover the best deals on trending items with us!
          </p>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase fw-bold">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-house-door me-1"></i> Home</a></li>
            <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-box-seam me-1"></i> Products</a></li>
            <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-bag-check me-1"></i> Orders</a></li>
            <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-cart3 me-1"></i> Cart</a></li>
          </ul>
        </div>

        <!-- Social Media -->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase fw-bold">Follow Us</h5>
          <div class="d-flex justify-content-center justify-content-lg-start mt-3 social-icons">
            <a href="#" class="me-3 fs-4 text-white"><i class="bi bi-facebook"></i></a>
            <a href="#" class="me-3 fs-4 text-white"><i class="bi bi-instagram"></i></a>
            <a href="#" class="me-3 fs-4 text-white"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="me-3 fs-4 text-white"><i class="bi bi-youtube"></i></a>
            <a href="#" class="me-3 fs-4 text-white"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.1);">
      © {{ date('Y') }} <strong>ABZ Store</strong>. All rights reserved.
    </div>
  </footer>
</div>

<style>
  .footer a:hover {
    color: #ffd700 !important;
    text-decoration: underline;
  }

  .footer i {
    transition: transform 0.3s;
  }

  .footer i:hover {
    transform: scale(1.2);
  }

  .social-icons a:hover {
    color: #ffdd57 !important;
  }
</style>
