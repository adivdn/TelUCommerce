<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
    <title>Tel U Commerce | Checkout</title>
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/checkout.css'?>">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- first main header -->
    <div class="container-fluid shadow-sm " style=" background: #CC5252;">

        <header class="main-header">
            <nav class="navbar navbar-expand-lg  p-0 ml-3 mr-3">
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item  mr-2">
                            <a class="nav-link" href="<?= site_url().'User/home'?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active mr-2">
                            <a class="nav-link" href="<?= site_url().'User/item'?>">New Item</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url().'User/item'?>">Sale</a>
                        </li>
                    </ul>

                    <ul class="nav justify-content-center p-1 m-0 nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= site_url().'User/home'?>" style="font-size: 25px">TEL-U COMMERCE</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <div class="like-btn">
                                <a class="nav-link " href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                <div class="like-items">0</div>
                            </div>
                        </li>
                        <li class="nav-item mr-2 cart">
                            <div class="cart-btn">
                                <!-- Button trigger modal -->
                                <a class="nav-link" data-toggle="modal" data-target="#exampleModal"><i
                                        class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <div class="cart-items"><?= $this->cart->total_items();?></div>




                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= site_url().'User/profile'?>">
                            <?php foreach($diri as $row) :?>
                                <img src="<?= base_url().'assets/uploadfile/'.$row['image'];?>" width="30" height="30"
                                    style="object-fit:cover; margin-right:1em" class="rounded-circle">
                            <?php endforeach;?>
                                    <?= $this->session->userdata('nama');?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-log-out" href="<?= site_url().'User/logout'?>">Log out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>

    <!-- second main header -->
    <div class="container-fluid category-items shadow-sm bg-white rounded">
        <header class="main-second-header">
            <nav class="navbar navbar-expand-lg  p-0 ml-3 mr-3">
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active">
                            <a class="nav-link kategori" href="<?= site_url().'User/itemComputer'?>">Computer & acc <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link kategori" href="<?= site_url().'User/itemMusic'?>">Music</a>
                        </li>

                        <li class="nav-item category">
                            <a class="nav-link kategori" href="<?= site_url().'User/itemPhotography'?>">Photography</a>
                        </li>
                        <li class="nav-item category">
                            <a class="nav-link kategori" href="<?= site_url().'User/itemGadget'?>">gadget & acc</a>
                        </li>
                    </ul>
                    <ul class=" mt-3">
                        <div class="input-group btn-search">
                            <input class="form-control py-2 border-right-0 border search" type="search"
                                placeholder="search" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 container-images">
                <div class="products-container">
                    <div class="shop-title">
                        <h4><sup style="padding-right: 3px;">Tel-U Commerce</sup><span style="border: 5px solid #C4C4C4;
                            border-top: 0px;
                            border-right: 0px;
                            border-bottom: 0px;
                            border-radius: 2px;">Your Shooping Cart</span></h4>
                    </div>
                    <br>
                    <?php 
                        echo form_open('user/updateCartCheckout');
                    ?>
                        
                    <div class="product-header">
                        <h6 class="product-title">PRODUCT</h6>
                        <h6 class="price">PRICE</h6>
                        <h6 class="quantity">QUANTITY</h6>
                        <h6 class="total">TOTAL</h6>
                    </div>
            
                    <?php 
                        foreach($cart as $row){
                            echo form_hidden('cart[' . $row['id'] . '][id]', $row['id']);
                            echo form_hidden('cart[' . $row['id'] . '][rowid]', $row['rowid']);
                            echo form_hidden('cart[' . $row['id'] . '][name]', $row['name']);
                            echo form_hidden('cart[' . $row['id'] . '][price]', $row['price']);
                            echo form_hidden('cart[' . $row['id'] . '][qty]', $row['qty']);
                    ?>
                    <div class="products">
													
                            <span><?= $row['name']; ?></span>
                                                
                            
                        <div class="price" style="margin-left:200px;">
                                <?= 'Rp.'.number_format($row['price']); ?>
                        </div>
                        
                        
                        <div class="quantity">
                                <span><?php echo form_input('cart[' . $row['id'] . '][qty]', $row['qty'], 'maxlength="3" size="1" style="text-align: right; margin-left:40px;"'); ?></span> 
                        </div>

                        <div class="total">
                                <span><h6 class="basketTotalTitle" >
                                    <?= 'Rp.'.number_format($row['subtotal']) ?>
                                </h6></span>
                                <a href="<?= site_url().'user/deleteCartCheckout/'.$row['rowid']?>"><span><ion-icon name="trash-outline"></ion-icon></span></a>
                                
                        </div>
                    </div>  
                <?php } ?>
                    

                <div class="basketTotalContainer">
                    <h6 class="basketTotalTitle">
                        Cart Total
                    </h6>
                    <h6 class="basketTotal">
                        <?= 'Rp.'. $this->cart->format_number($this->cart->total());  ?>
                    </h6>
                </div>
        
                <button class = "btn btn-success">Update Cart</button>
                <?php echo form_close(); ?>
                    <br>
                    <div class="container-fluid d-flex " style="font-style: bold; padding: 0 0 20px 20px;">
                        <a href="<?= site_url().'User/home'?>" style=" text-decoration: none; color:white"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i><span> Back to Home Page</span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p-0">

                <div class="title-payment">

                    <h1 style="color: #FCE93E;">Payment Details</h1>

                </div>

                <div class="card-body">
                    <form action="<?= site_url().'User/checkout'?>" method="POST">
                        <div class="form-group" style="    display: flex;
                            flex-direction: column;
                            width: 175px;">
                            <label>Select Payment Method</label>
                            <select id="payment" name="payment">
                                <option value="cash">Cash</option>
                                <option value="bank">Bank Transfer</option>
                            </select>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Your Address</label>
                                <input type="text" name = "alamat" class="form-control" placeholder="Enter your address">
                            </div>
                            <div class="col">
                                <label>Post Code</label>
                                <input type="text" class="form-control" name = "postcode" placeholder="Enter your postcode">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Reciever name</label>
                            <input type="text" name="receiver" class="form-control" placeholder="receiver">
                        </div>

                        <div class="form-group">
                            <label>Reciever Phone Number</label>
                            <input type="text" name = "phone" class="form-control" placeholder="phone">
                        </div>
                </div>



                <div class="container-fluid d-flex "></div>
                <button type="submit" class="btn kuning"
                    style="width: 100%; border-radius: 0px; background: #FCE93E; color: black;">checkout</button>
            </div>


            </form>
        </div>
    </div>
    </div>
    </div>
    <footer>
        <div class="footer-top" style="background: #46606F; font-size: 15px;">
            <div class="container py-5">
                <div class="row" style="color: white;">
                    <div class="col-md-2 col-sm-6 col-xs-12 segment-one">
                        <h5>About</h4>
                            <ul style="padding: 0px;">
                                <li><a href="#">Tel-U Commerce</a></li>
                                <li><a href="#">Tel-U Commerce Team</a></li>
                            </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 segment-two">
                        <h5>location</h4>
                            <ul style="padding: 0px;">
                                <li><a href="">Bandung</a></li>
                            </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 segment-two">
                        <h5>Need Help?</h4>
                            <ul style="padding: 0px;">
                                <li><a href="">FAQ?</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 segment-two">
                        <h5>Follow Us</h4>
                            <a href="" style="color: white; padding-right: 10px;"><i class="fa fa-instagram fa-2x"
                                    aria-hidden="true"></i></a>
                            <a href="" style="color: white; padding-right: 10px;"><i class="fa fa-twitter fa-2x"
                                    aria-hidden="true"></i></a>
                            <a href="" style="color: white; padding-right: 10px;"><i class="fa fa-facebook fa-2x"
                                    aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 segment-two">
                        <h5>Tel-U Commerce</h4>
                            <p>Tel-U commerce adalah tempat jual beli produk untuk mahasiswa telkom</p>
                    </div>
                </div>

            </div>
        </div>
        <p class="footer-bottom-text">2020,Tel-U commerce</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>