<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
  <link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
  <title>
    Tel-U commerce | dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url().'assets/css/material-dashboard.css?v=2.1.2'?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url().'assets/demo/demo.css'?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a class="simple-text logo-normal">
          Admin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?= site_url().'Admin'?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url().'Admin/Barang'?>">
              <i class="material-icons">assignment_returned</i>
              <p>Items</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url().'Admin/konfirmasi'?>">
              <i class="material-icons">check_box</i>
              <p>Confirmation</p>
            </a>
          </li>
          <div class="slogan">
            <a href="<?= site_url().'User/logout'?>" class="soloww">logout</a>

          </div>
        </ul>
      </div>


    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" method = "POST">
              <div class="input-group no-border">
                <input type="text" name = "keyword" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-danger btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= site_url().'User/logout'?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.
                  </p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>

            <div class="row  rifqi">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header card-header-danger">
                    <h4 class="card-title ">Latest Purchases</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>Time</th>
                          <th>Product</th>
                          <th>Costumer</th>
                          <th>Amount</th>
                        </thead>
                        <?php if(!empty($history)){?>
                        <?php
                            foreach($history->result() as $row):
                        ?>
                        <tbody>
                          <tr>
                            <td><?= $row->tanggal_pemesanan;?></td>
                            <td><?= $row->item_name;?></td>
                            <td><?= $row->nama;?></td>
                            <td class="text-primary">
                              <?= 'Rp.'.number_format($row->price);?>
                            </td>
                          </tr>
                        </tbody>
                            <?php endforeach;?>
                        <?php }else{?>
                          <tbody>
                          <tr>
                            <td>Tanggal</td>
                            <td>Nama</td>
                            <td>Nama</td>
                            <td class="text-primary">
                              Harga
                            </td>
                          </tr>
                        </tbody>
                        <?php }?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-danger">
                    <h4 class="card-title">Best selling items</h4>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>Name</th>
                        <th>Category</th>
                        <th>Purchase Quantity</th>
                      </thead>
                      <?php
                          foreach($dataItem->result() as $row):
                      ?>
                      <tbody>
                        <tr>
                          <td><img src="<?= base_url().'assets/uploadfile/'.$row->image; ?>" class="img-fluid"></td>
                          <td><?= $row->item_name; ?></td>
                          <td><?= $row->category; ?></td>
                          <td><?= $row->quantity; ?></td>
                        </tr>
                      </tbody>
                          <?php endforeach;?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url().'assets/js/core/jquery.min.js'?>"></script>
    <script src="<?= base_url().'assets/js/core/popper.min.js'?>"></script>
    <script src="<?= base_url().'assets/js/core/bootstrap-material-design.min.js'?>"></script>
    <script src="<?= base_url().'assets/js/plugins/perfect-scrollbar.jquery.min.js'?>"></script>
    <!-- Plugin for the momentJs  -->
    <script src="<?= base_url().'assets/js/plugins/moment.min.js'?>"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="<?= base_url().'assets/js/plugins/sweetalert2.js'?>"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?= base_url().'assets/js/plugins/jquery.validate.min.js'?>"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="<?= base_url().'assets/js/plugins/jquery.bootstrap-wizard.js'?>"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?= base_url().'assets/js/plugins/bootstrap-selectpicker.js'?>"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?= base_url().'assets/js/plugins/bootstrap-datetimepicker.min.js'?>"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="<?= base_url().'assets/js/plugins/jquery.dataTables.min.js'?>"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?= base_url().'assets/js/plugins/bootstrap-tagsinput.js'?>"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?= base_url().'assets/js/plugins/jasny-bootstrap.min.js'?>"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="<?= base_url().'assets/js/plugins/fullcalendar.min.js'?>"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="<?= base_url().'assets/js/plugins/jquery-jvectormap.js'?>"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?= base_url().'assets/js/plugins/nouislider.min.js'?>"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="<?= base_url().'assets/js/plugins/arrive.min.js'?>"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="<?= base_url().'assets/js/plugins/chartist.min.js'?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url().'assets/js/plugins/bootstrap-notify.js'?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url().'assets/js/material-dashboard.js?v=2.1.2'?>" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url().'assets/demo/demo.js'?>"></script>
    <script>
      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

          if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
            }

          }
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();


      });
    </script>
</body>

</html>