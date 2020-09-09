<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




  <!--  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style> -->
  <title><?php echo $title; ?></title>

</head>

<body id="page-top">

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
    <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  </div>
  <script>
    function openLeftMenu() {
      document.getElementById("leftMenu").style.display = "block";
    }

    function closeLeftMenu() {
      document.getElementById("leftMenu").style.display = "none";
    }

  </script>

  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><?php echo $navbar;?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <!-- trigerd modal -->
            <button type="button" class="btn btn-primary login" data-toggle="modal" data-target="#modal-login">
              Sign-in
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row justify-content-md-center mt-12">
                        <div class="col-sm-11 border-box">
                          <div class="row">
                            <div class="col-sm-6 p-0">
                              <img src="<?php echo base_url().'assets/image/pablo-sign-in.jpg'?>" class="img-fluid">
                            </div>
                            <div class="col-sm-6 p-0">
                              <div class="card">
                                <div class="card-header">
                                  <img src="<?php echo base_url().'assets/image/sign.png'?>">
                                </div>
                                <div class="card-body">
                                  <?php
                                  
                                  echo form_open(site_url('User/prosesLogin'));
                                ?>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                      </div>
                                      <?php
                                            $atribut = array(
                                              'type'             => 'email',
                                              'class'            => 'form-control',
                                              'id'               => 'exampleInputEmail1',
                                              'placeholder'      => 'Email Address',
                                              'name'             => 'email',
                                              'aria-describedby' => 'emailHelp',
                                              'required'         => 'required'
                                            );
                                            echo form_input($atribut);
                                         ?>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                                      </div>
                                      <?php
                                            $atribut = array(
                                              'type' => 'password',
                                              'class' => 'form-control',
                                              'placeholder' => 'Password',
                                              'name' => 'password',
                                              'required' => 'required'
                                            );
                                            echo form_input($atribut);
                                         ?>
                                    </div>

                                  </div>

                                  <div class="form-group">
                                    <label class="mz-check">
                                      <input type="checkbox">
                                      <i class="mz-blue"></i>
                                      always remember
                                    </label>
                                  </div>

                                  <button type="submit" class="btn btn-danger login">Log-in</button>

                                  <label class="float-left"></label> <br><br>

                                  <div class="login__box">
                                    <span>Forgot your password?</span> <a href="#">Recovere here</a>
                                  </div>

                                  <?php
                                    echo form_close();
                                  ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <!-- trigerd modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-registrasi">
            Register
          </button>

          <div class="modal fade" id="modal-registrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog registrasi">
              <div class="modal-content registrasi">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body registrasi">
                  <div class="container">
                    <div class="row justify-content-md-center ">
                      <div class="col-sm-11 border-box">
                        <div class="row">
                          <div class="col-sm-6 p-0">
                            <img src="<?php echo base_url().'assets/image/eastwood-sign-in.png'?>"
                              class="img-fluid registrasi">
                          </div>
                          <div class="col-sm-6 p-0">
                            <div class="card">
                              <div class="card-header">
                                <img src="<?php echo base_url().'assets/image/register.png'?>">
                              </div>
                              <div class="card-body">
                                <?php
                                  
                                  echo form_open(site_url('User/prosesRegister'));
                                ?>
                                <div class="row">
                                  <div class="col">
                                    <label>Full Name</label>
                                    <?php
                                        $atribut = array(
                                            'type'        => 'text',
                                            'class'       => 'form-control',
                                            'name'        => 'nama',
                                            'placeholder' => 'Enter your full name',
                                            'required'    => 'required'
                                        );
                                        echo form_input($atribut);
                                      ?>
                                  </div>
                                  <div class="col">
                                    <label>Email Address</label>
                                    <?php
                                        $atribut = array(
                                            'type'        => 'email',
                                            'class'       => 'form-control',
                                            'name'        => 'email',
                                            'placeholder' => 'Enter your email',
                                            'required'    => 'required'
                                        );
                                          echo form_input($atribut);
                                        ?>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <br>

                                  <div class="validation-box">
                                    <a class="validation-btn" href="#">
                                      <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                    </a>
                                    <small id="emailHelp" class="form-text text-muted"> validation question </small>
                                    <br>

                                  </div>

                                  <label>What your favorite memes?</label>
                                  <?php
                                      $atribut = array(
                                        'type'        => 'text',
                                        'class'       => 'form-control',
                                        'name'        => 'memes',
                                        'placeholder' => 'Enter your favorite memes',
                                        'required'    => 'required'
                                    );
                                      echo form_input($atribut);
                                    ?>
                                </div>

                                <div class="row">
                                  <div class="col">
                                    <label>Password</label>
                                    <?php
                                        $atribut = array(
                                          'type'        => 'password',
                                          'class'       => 'form-control',
                                          'name'        => 'password',
                                          'placeholder' => 'Enter your password',
                                          'required'    => 'required'
                                      );
                                        echo form_input($atribut); 
                                      ?>
                                  </div>

                                  <div class="col">
                                    <label>Confirm Password</label>
                                    <?php
                                        $atribut = array(
                                          'type'        => 'password',
                                          'class'       => 'form-control',
                                          'name'        => 'konfirmasi_password',
                                          'placeholder' => 'Enter your password',
                                          'required'    => 'required'
                                      );
                                        echo form_input($atribut); 
                                      ?>
                                  </div>
                                </div>

                                <button type="submit" class="btn btn-danger registrasi">register</button>

                                <label class="float-left"></label> <br><br>

                                <div class="login__box">
                                  <span>Already have an account?</span><a href="#modal-login" data-toggle="modal"
                                    data-target="#modal-login">Sign in</a>
                                </div>

                                <?php 
                                  echo form_close();
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </ul>

        <form class="form-inline my-2 my-lg-0">
          <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="search">
            <a class="search-btn" href="#search" type="submit">
              <i class="fa fa-search"></i>
            </a>
          </div>

        </form>

      </div>
    </div>
  </nav>

  <br>
  <main>
    <div class="container sayang">
      <div class="row inti">
        <div class="col-sm-12 ">
          <div class="row">
            <div class="col-sm-6 p0">
              <div class="jumbotron">
                <h1 class="display-4">WHAT IS TEL-U COMMERCE ?</h1>
                <p class="lead">Tempat belanjanya para telyutizen.</p>
                <hr style="width:25%; ">
                <p>Check more complete, click the button below!</p>
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
              </div>
            </div>
            <div class="col-sm-6 p0">
              <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <?php
                    foreach($awal as $row):
                  ?>
                  <div class="carousel-item <?php if($row['item_id'] == 4){ echo 'active';}?>">
                    <div class="thumb-wrapper">
                      <span class="wish-icon">
                        <i class="fa fa-heart-o"></i>
                      </span>
                    </div>
                    <img src="<?= base_url().'assets/uploadfile/'.$row['image'] ?>" alt="Los Angeles" width="10px"
                      height="10px">
                    <div class="carousel-caption">
                      <h3><?= $row['item_name'];?></h3>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="list-inline-item">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="list-inline-item">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="list-inline-item">
                            <i class="fa fa-star-half"></i>
                          </li>
                        </ul>
                      </div>
                      <p class="item-price">
                        <strike><?= '$'.number_format($row['price']) ?></strike>
                        <b>$209.00</b>
                      </p>
                      <a href="<?= site_url().'User/addcart/'.$row['item_id']?>" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                  
                  <?php endforeach;?>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
  <br>
  <br>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 pb-2">
          <div class="content-pertama">
            <h4>About US</h4>
            <p> Tel-U Commerce adalah tempat belanja online untuk mahasiswa atau
              mahasiswi di Telkom University. </p>
          </div>
        </div>
        <div class="col-lg-4 pb-2">
          <ul>
            <ol>
              <div class="icon-footer">
                <div class="icon-location">
                  <a href="#">
                    <i class="fa fa-map-marker"><span class="lucu"> Bandung</span></i>
                  </a>
                </div>
                <br>
                <div class="icon-email">
                  <div class="icon-email">
                    <a href="#">
                      <i class="fa fa-envelope"><span class="galucu"> telu_commerce@gmail.com</span></i>
                    </a>
                  </div>
                  <br>
                  <div class="icon-instagram">
                    <div class="icon-instagram">
                      <a href="#">
                        <i class="fa fa-instagram"><span class="lucuu"> tel-uCommerce</span></i>
                      </a>
                    </div>
          </ul>
        </div>
        <div class="col-lg-5 pb-2">
          <div class="content-ketiga">
            <h4 class="subscriber"> SUBSCRIBE TO GET THE LATEST OFFERS </h4>
            <form action="">
              <div class="input-group ">
                <input type="email " name="" class="form-control footer" placeholder="enter your email here">
                <div class="input-group-append">
                  <button class="btn-danger footer"> Subscribe </button>
                </div>

              </div>

            </form>

          </div>
        </div>
      </div>

  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>