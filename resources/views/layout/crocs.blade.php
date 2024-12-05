<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Crocs admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Crocs admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="{{ asset('') }}assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('') }}assets/images/favicon.png" type="image/x-icon">
  <title>Crocs - Premium Admin Template</title>
  <x-crocs.tag_head></x-crocs.tag_head>
</head>

<body onload="startTime()">
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="loader">
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
    </div>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <x-crocs.header></x-crocs.header>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <x-crocs.sidebar></x-crocs.sidebar>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        {{ $slot }}
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 p-0 footer-copyright">
              <p class="mb-0">Copyright 2024 © Explode by <a href="https://turbo-main.com/" target="_blank">Turbo Main Community</a>.</p>
            </div>
            <div class="col-md-6 p-0">
              <p class="heart mb-0">Hand crafted &amp; made with
                <svg class="footer-icon">
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#heart"></use>
                </svg>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <x-crocs.script></x-crocs.script>
</body>

</html>
