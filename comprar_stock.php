<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Best Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <!---Mis estilos--->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- Title -->
    <title>Bootstrap Admin Dashboards</title>


    <!-- *************
			************ Common Css Files *************
		************ -->

    <!-- Animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

  </head>

  <body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
      <div class="spinner">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
        <div class="line5"></div>
        <div class="line6"></div>
      </div>
    </div>
    <!-- Loading wrapper end -->

     <!-- Page wrapper start -->
     <div class="page-wrapper">

<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

  <!-- Sidebar menu starts -->
  <?php require 'sidemenu.php'; ?>
  <!-- Sidebar menu ends -->

</nav>
<!-- Sidebar wrapper end -->

<!-- *************
  ************ Main container start *************
************* -->
  <div class="main-container">

      <!---------- Header ------------>
      <?php require 'header.php';  ?>
      <!-- Page header ends -->

      <!------------ Contenido ------------->
      <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">
  <!-- Row start -->
  <div class="row">
    <div class="col-xxl-6 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Servicio</div>
          <div class="card-title">Configuración</div>
          <div class="card-title">Adquisición</div>
        </div>
        <div class="card-body">
          <form>
            <!-- Progreso del paso -->
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">1</div>
              <div class="progress-bar bg-secondary" style="width: 33%;">2</div>
              <div class="progress-bar bg-secondary" style="width: 33%;">3</div>
            </div>

            <!-- Campo Stock -->
            <div class="form-group mt-3">
              <label for="stock">Stock</label>
              <p>Selecciona el stock que deseas comprar.</p>
              <input type="text" id="stock" class="form-control" placeholder="Ingresa el stock">
              <small class="text-danger">El campo STOCK es obligatorio</small>
            </div>

            <!-- Botón de continuar -->
            <div class="form-group text-right">
              <button type="button" class="btn btn-primary">Continuar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->
</div>

        <!-- Content wrapper end -->

        <!-- App Footer start -->
        <div class="app-footer">
          <span>© Bootstrap Gallery 2024</span>
        </div>
        <!-- App footer end -->

      </div>
      <!-- Content wrapper scroll end -->

  </div>
<!-- *************
  ************ Main container end *************
************* -->

</div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <script src="assets/js/funion.js"></script>
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/sales/salesGraph.js"></script>
    <script src="assets/vendor/apex/custom/sales/revenueGraph.js"></script>
    <script src="assets/vendor/apex/custom/sales/taskGraph.js"></script>

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

  </body>

</html>