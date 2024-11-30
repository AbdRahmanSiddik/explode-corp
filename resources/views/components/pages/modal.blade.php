<!-- modal quick shop-->
<div class="modal quickview fade" id="quickview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="quickview" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
          class="far fa-xmark"></i></button>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="quickview-img">
              <img src="assets/img/product/04.png" alt="#">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="quickview-content">
              <h4 class="quickview-title">Surgical Face Mask</h4>
              <div class="quickview-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                <span class="rating-count"> (4 Customer Reviews)</span>
              </div>
              <div class="quickview-price">
                <h5><del>$860</del><span>$740</span></h5>
              </div>
              <ul class="quickview-list">
                <li>Brand:<span>Medica</span></li>
                <li>Category:<span>Healthcare</span></li>
                <li>Stock:<span class="stock">Available</span></li>
                <li>Code:<span>789FGDF</span></li>
              </ul>
              <div class="quickview-cart">
                <a href="#" class="theme-btn">Add to cart</a>
              </div>
              <div class="quickview-social">
                <span>Share:</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal quick shop end -->

@auth
  <!-- modal popup banner  -->
  <div class="modal popup-banner fade" id="popup-banner" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="far fa-xmark"></i></button>
        <div class="modal-body">
          <div class="popup-banner-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="popup-banner-img">
                  <img src="assets/img/banner/popup-banner.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="popup-banner-info">
                  <h6>7 Days Super Sale !</h6>
                  <h2>Hurry Up! Get Up To <span>50%</span> Discount</h2>
                  <p>There are many variations the majority have suffered alteration in some form injected words look
                    even slightly believable.</p>
                  <a href="#" class="theme-btn">Start Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal popup banner end -->
@endauth
