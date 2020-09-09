<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url().'assets/image/apple-icon.png'?>">
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Tel-U Commerce | confirmation
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
          <li class="nav-item  ">
            <a class="nav-link" href="<?= site_url('Admin')?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('Admin/Barang')?>">
              <i class="material-icons">assignment_returned</i>
              <p>Items</p>
            </a>
          </li>
          <li class="nav-item active ">
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
    <div class="main-panel ">
      <div class="content confirmation">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-7">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title ">Need Confirmed</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <th class="font-weight-bold">
                          Transaction Time
                        </th class="font-weight-bold">
                        <th class="font-weight-bold">
                          Customer Name
                        </th class="font-weight-bold">
                        <th class="font-weight-bold">
                          Detail
                        </th>
                        <th colspan="2" class="font-weight-bold">
                          Action
                        </th>
                      </thead>
                      <?php 
                          foreach($action->result_array() as $row):
                      ?>
                      <?php if($row['status'] == '0'){?>
                      <tbody>
                        <tr>
                          <td><?= $row['tanggal_pemesanan'];?></td>
                          <td><?= $row['nama'];?></td>
                          <td><?= 'Rp.'. number_format($row['harga']);?></td>
                          <td>
                            <a href="<?= site_url().'Admin/action/'.$row['id'].'/accept'?>"><button type="submit" class="btn accept" name = "accept">Accept</button></a>
                          </td>
                          <td>
                            <a href="<?= site_url().'Admin/action/'.$row['id'].'/decline'?>"><button type="submit" class="btn decline" name ="decline">Decline</button></a>
                          </td>
                        </tr>
                        
                      </tbody>
                      <?php }?>
                        
                          <?php endforeach;?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title ">Latest Transaction</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <th class="font-weight-bold">
                          Transaction Time
                        </th>
                        <th class="font-weight-bold">
                          Transaction Id
                        </th>
                        <th class="font-weight-bold">
                          Customer Name
                        </th>
                        <th class="font-weight-bold">
                          Status
                        </th>
                      </thead>
                      <?php 
                          foreach($history->result_array() as $row):
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $row['tanggal_pemesanan'];?></td>
                          <td><?= $row['id'];?></td>
                          <td><?= $row['nama'];?></td>
                          <?php 
                            if($row['status'] == 'accept'){
                          ?>
                          <td>
                            <button type="submit" class="btn accept">Already paid</button>
                          </td>
                            <?php }else if($row['status'] == '0' || $row['status'] == 'decline'){?>
                              <td>
                                <button type="submit" class="btn decline">Not Paid Yet</button>
                              </td>
                            <?php }?>
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
</body>

</html>