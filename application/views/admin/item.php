<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url().'assets/image/apple-icon.png'?>">
  <link rel="icon" type="image/png" href="<?= base_url().'assets/image/favicon.png'?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Tel-U commerce | Items
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
            <a class="nav-link" href="<?= site_url().'Admin'?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="<?= site_url().'Admin/Barang'?>">
              <i class="material-icons">assignment_returned</i>
              <p>Items</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url().'Admin/konfirmasi'?>">
              <i class="material-icons">check_box</i>
              <p>confirmation</p>
            </a>
          </li>
          <div class="slogan">
            <a href="<?= site_url().'User/logout'?>" class="soloww">logout</a>

          </div>
        </ul>
      </div>
    </div>
    <div class="main-panel item">
      <div class="content item">
        <div class="container-fluid">
          <div class="row item ">
            <div class="col-md-4">
              <div class="form-title item">
                <h1 class="updateitem">Update Item</h1>
              </div>
              <div class="input-group no-border">
                <button type="submit" class="btn btn-danger btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
                <form action="" method = "POST">
                <input type="text" name = "keyword" class="form-control" placeholder="Search...">
                </form>
              </div>
              <?php echo form_open_multipart('Admin/updateItem')?>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <textarea class="update foto" value = "">
                </textarea>
              
              <div>
                <button class="btn  updatePicture" type="submit" value="Upload Image" name="submit">update
                  picture</button>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="kedua">
                <div class="form-group item">
                  <label for="exampleInputEmail1">Item Name</label>
                  <input class="form-control" id="exampleInputEmail1" value = "">
                </div>
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Category</label>
                  <input class="form-control" id="exampleInputPassword1" value = "">
                </div>
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Price</label>
                  <input class="form-control" id="exampleInputPassword1" value = "">
                </div>
                <button type="submit" class="btn update">Update</button>
              </div>

            </div>
            <div class="col-md-4 ketiga">
              <div class="ketiga">
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Detail</label>
                  <textarea value = ""></textarea>
                </div>
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Quanity</label>
                  <input class="form-control" id="exampleInputPassword1" value = "">
                </div>
                <button type="submit" class="btn delete">Delete</button>
              </div>
            </div>
            <?php echo form_close();?>
          </div>
          <br>
          <br>

          <div class="row item ">
            <div class="col-md-4 inputItem">
              <div class="form-title item">
                <h1 class="updateitem">Input Item</h1>
              </div>
              <?php echo form_open_multipart('Admin/addItem')?>
              <input type="file" name="image" id="fileToUpload">
              <textarea class="update foto inputItem">
                </textarea>
              <div>
                <button class="btn  updatePicture" type="submit" value="Upload Image" name="submit">update
                  picture</button>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="inputkedua">
                <div class="form-group item">
                  <label for="exampleInputEmail1">Item Name</label>
                  <input class="form-control" name="item_name" id="exampleInputEmail1" required>
                </div>
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Category</label>
                  <input class="form-control" name="category" id="exampleInputPassword1" required>
                </div>
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Price</label>
                  <input class="form-control" name="price" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn update" name="add">Insert</button>
              </div>
            </div>
            <div class="col-md-4 ketiga">
              <div class="inputketiga">
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Detail</label>
                  <textarea name="spesification"></textarea>
                </div>
                <div class="form-group item">
                  <label for="exampleInputPassword1">Item Quantity</label>
                  <input type = "number" class="form-control" name="stock" id="exampleInputPassword1">
                </div>
                <button type="submit" name="cancel" class="btn delete">Cancel</button>
              </div>
            </div>
            <?php echo form_close() ?>
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