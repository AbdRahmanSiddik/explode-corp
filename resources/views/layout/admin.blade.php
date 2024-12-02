<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- title -->
  <title>{{ $title }}</title>

  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets/img/logo/favicon.png">

  <!-- css -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/all-fontawesome.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/magnific-popup.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/nice-select.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">

</head>

<body class="home-3">

  <!-- preloader -->
  <div class="preloader">
    <div class="loader-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- preloader end -->


  {{-- header --}}
  <x-pages.header></x-pages.header>
  {{-- header end --}}


  <!-- mobile popup search -->
  <div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
      <div class="form-group">
        <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required>
        <button type="submit"><i class="far fa-search"></i></button>
      </div>
    </form>
  </div>
  <!-- mobile popup search end -->


  <main class="main">

    <!-- user dashboard -->
    <div class="user-area bg pt-30 pb-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <x-admin.sidebar></x-admin.sidebar>
                </div>
                <div class="col-lg-9">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <!-- user dashboard end -->

  </main>


  <!-- footer area -->
  <footer class="footer-area">
    <div class="footer-widget">
      <div class="container">
        <div class="row footer-widget-wrapper pt-100 pb-40">
          <div class="col-md-6 col-lg-3">
            <div class="footer-widget-box about-us">
              <a href="index.html" class="footer-logo">
                <img src="{{ asset('') }}assets/img/logo/logo-light.png" alt="">
              </a>
              <p class="mb-3">
                We are many variations of the passages available but the majoro have suffered alteration
                injected.
              </p>
              <ul class="footer-contact">
                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                <li><a
                    href="https://live.themewild.com/cdn-cgi/l/email-protection#147d7a727b54716c75796478713a777b79"><i
                      class="far fa-envelope"></i><span class="__cf_email__"
                      data-cfemail="6e070008012e0b160f031e020b400d0103">[email&#160;protected]</span></a></li>
                <li><i class="far fa-clock"></i>Mon-Fri (9.00AM - 8.00PM)</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Quick Links</h4>
              <ul class="footer-list">
                <li><a href="about.html">About Us</a></li>
                <li><a href="help.html">Delivery Info</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="blog.html">Update News</a></li>
                <li><a href="testimonial.html">Our Testimonials</a></li>
                <li><a href="terms.html">Terms Of Service</a></li>
                <li><a href="privacy.html">Privacy policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Browse Category</h4>
              <ul class="footer-list">
                <li><a href="shop-grid.html">Medicine</a></li>
                <li><a href="shop-grid.html">Medical Equipments</a></li>
                <li><a href="shop-grid.html">Beauty Care</a></li>
                <li><a href="shop-grid.html">Baby & Mom Care</a></li>
                <li><a href="shop-grid.html">Healthcare</a></li>
                <li><a href="shop-grid.html">Food & Nutrition</a></li>
                <li><a href="shop-grid.html">Medical Supplies</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Support Center</h4>
              <ul class="footer-list">
                <li><a href="faq.html">FAQ's</a></li>
                <li><a href="help.html">How To Buy</a></li>
                <li><a href="help.html">Support Center</a></li>
                <li><a href="track-order.html">Track Your Order</a></li>
                <li><a href="return.html">Returns Policy</a></li>
                <li><a href="affiliate.html">Our Affiliates</a></li>
                <li><a href="contact.html">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Get Mobile App</h4>
              <p>Medica App is now available on App Store & Google Play.</p>
              <div class="footer-download">
                <h5>Download Our Mobile App</h5>
                <div class="footer-download-btn">
                  <a href="#">
                    <i class="fab fa-google-play"></i>
                    <div class="download-btn-info">
                      <span>Get It On</span>
                      <h6>Google Play</h6>
                    </div>
                  </a>
                  <a href="#">
                    <i class="fab fa-app-store"></i>
                    <div class="download-btn-info">
                      <span>Get It On</span>
                      <h6>App Store</h6>
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer-payment mt-20">
                <span>We Accept:</span>
                <img src="{{ asset('') }}assets/img/payment/visa.svg" alt="">
                <img src="{{ asset('') }}assets/img/payment/mastercard.svg" alt="">
                <img src="{{ asset('') }}assets/img/payment/amex.svg" alt="">
                <img src="{{ asset('') }}assets/img/payment/discover.svg" alt="">
                <img src="{{ asset('') }}assets/img/payment/paypal.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="copyright-wrap">
          <div class="row">
            <div class="col-12 col-lg-6 align-self-center">
              <p class="copyright-text">
                &copy; Copyright <span id="date"></span> <a href="index.html"> Medion </a> All Rights Reserved.
              </p>
            </div>
            <div class="col-12 col-lg-6 align-self-center">
              <div class="footer-social">
                <span>Follow Us:</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer area end -->


  <!-- scroll-top -->
  <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
  <!-- scroll-top end -->

  {{-- modal --}}
  <x-pages.modal></x-pages.modal>
  {{-- modal end --}}

  <!-- js -->
  <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('') }}assets/js/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('') }}assets/js/modernizr.min.js"></script>
  <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('') }}assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('') }}assets/js/isotope.pkgd.min.js"></script>
  <script src="{{ asset('') }}assets/js/jquery.appear.min.js"></script>
  <script src="{{ asset('') }}assets/js/jquery.easing.min.js"></script>
  <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>
  <script src="{{ asset('') }}assets/js/counter-up.js"></script>
  <script src="{{ asset('') }}assets/js/jquery-ui.min.js"></script>
  <script src="{{ asset('') }}assets/js/jquery.nice-select.min.js"></script>
  <script src="{{ asset('') }}assets/js/countdown.min.js"></script>
  <script src="{{ asset('') }}assets/js/wow.min.js"></script>
  <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>
