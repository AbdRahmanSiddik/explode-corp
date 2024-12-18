<div class="sidebar-wrapper" data-layout="fill-svg">
  <div>
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
          src="{{ asset('') }}assets/images/logo/logo.png" alt=""></a>
      <div class="toggle-sidebar">
        <svg class="sidebar-toggle">
          <use href="{{ asset('') }}assets/svg/icon-sprite.svg#toggle-icon"></use>
        </svg>
      </div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
          src="{{ asset('') }}assets/images/logo/logo-icon.png" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
            <a href="index.html">
              <img class="img-fluid" src="{{ asset('') }}assets/images/logo/logo-icon.png" alt="">
            </a>
            <div class="mobile-back text-end">
                <span>Back</span>
                <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
          </li>
          <li class="pin-title sidebar-main-title">
            <div>
              <h6>Pinned</h6>
            </div>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6 class="lan-1">General</h6>
            </div>
          </li>
          <li class="sidebar-list bg-dark px-2 rounded">
            <i class="fa fa-thumb-tack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
              <svg class="stroke-icon">
                <use href="{{ asset('') }}assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg>
              <svg class="fill-icon">
                <use href="{{ asset('') }}assets/svg/icon-sprite.svg#fill-home"></use>
              </svg>
              <span class="text-white">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6 class="">Data Master</h6>
            </div>
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
              href="#">
              <svg class="stroke-icon">
                <use href="{{ asset('') }}assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
              </svg>
              <svg class="fill-icon">
                <use href="{{ asset('') }}assets/svg/icon-sprite.svg#fill-ecommerce"></use>
              </svg><span>Data Barang </span></a>
            <ul class="sidebar-submenu">
              <li><a href="projects.html">Project List</a></li>
              <li><a href="projectcreate.html">Create new</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>
