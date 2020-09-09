<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
    <title>Profile | Tel U Commerce</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/themify-icons.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/css/profile.css'?>">
</head>

<body>

    <header></header>
    <!-- first main header -->
    <div class="container-fluid shadow-sm " style=" background: #CC5252;">

        <header class="main-header">
            <nav class="navbar navbar-expand-lg  p-0 ml-3 mr-3">
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item  mr-2">
                            <a class="nav-link" href="<?= site_url().'User/home'?>">Home <span
                                    class="sr-only">(current)</span></a>
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
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<div class="products-container">
												<?php if(!empty($cart)){?>
												<?php 
														echo form_open('user/updateCart');
												?>
														
													<div class="product-header">
														<h6 class="product-title">PRODUCT</h6>
														<h6 class="price">PRICE</h6>
														<h6 class="quantity">QUANTITY</h6>
														<h6 class="total">TOTAL</h6>
													</div>
											
													<?php 
														foreach($cart as $row):
															echo form_hidden('cart[' . $row['id'] . '][id]', $row['id']);
															echo form_hidden('cart[' . $row['id'] . '][rowid]', $row['rowid']);
															echo form_hidden('cart[' . $row['id'] . '][name]', $row['name']);
															echo form_hidden('cart[' . $row['id'] . '][price]', $row['price']);
															echo form_hidden('cart[' . $row['id'] . '][qty]', $row['qty']);
													?>
													<div class="products">
													
															<span><?= $row['name']; ?></span>
													
													<div class="price" style = "margin-left:60px;">
														<?= 'Rp.'.number_format($row['price']); ?>
													</div>
													<div class="quantity">
															<ion-icon name="arrow-undo-circle-outline"></ion-icon>
															<span><?php echo form_input('cart[' . $row['id'] . '][qty]', $row['qty'], 'maxlength="3" size="1" style="text-align: right; margin-left:60px;"'); ?></span>
															<ion-icon name="arrow-redo-circle-outline"></ion-icon>
													</div>

													<div class="total">
															<span><h6 class="basketTotalTitle" style="margin-left:30px;">
																<?= 'Rp.'.number_format($row['subtotal']) ?>
															</h6></span>
															<a href="<?= site_url().'user/deleteCart/'.$row['rowid']?>"><span><ion-icon name="trash-outline"></ion-icon></span></a>
															
													</div>
														<?php endforeach; ?>
														

													<div class="basketTotalContainer">
														<h6 class="basketTotalTitle">
															Cart Total
														</h6>
														<h6 class="basketTotal">
															<?= $this->cart->format_number($this->cart->total());  ?>
														</h6>
													</div>
												  </div>
												  		<button class = "btn btn-success">Update Cart</button>
													<?php echo form_close(); ?>
												   <?php }else{ ?>
															<div class="product-header">
																<h6 class="product-title">PRODUCT</h6>
																<h6 class="price">PRICE</h6>
																<h6 class="quantity">QUANTITY</h6>
																<h6 class="total">TOTAL</h6>
															</div>
												   <?php }?>
												</div>
											</div>
											<!-- <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
										</div> -->
											<div class="container-fluid" style="font-style: bold; padding: 0 0 0 5px;">
												<a href="<?= site_url().'User/home'?>" style=" text-decoration: none; color:white"><i
														class="fa fa-arrow-left" aria-hidden="true"></i><span> Back to
														Home Page</span></a>
												<span><a href="<?= site_url().'User/showCart'?>"
														style=" text-decoration: none; color:white"><span> Continue to
															Checkout</span><i class="fa fa-arrow-right"
															aria-hidden="true"></i></a></span>
											</div>

										</div>
									</div>
								</div>



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
    <br>
    <div class="container-fluid profile-title ">

        <h5 style="font-weight: bold;">YOUR ACCOUNT</h5>

    </div>
    <!-- Edit Profile -->
    <div class="container editprofile">
        <div class="row justify-content-md-center mt-12">
            <div class="col-md-7 border-box">
                <div class="row">
                    <div class="col-md-5">
                        <div id="photo_profile" class="text-center">
                        <form action="<?= site_url().'User/editfoto'?>" method="POST" enctype="multipart/form-data" >
                            
                                <?php foreach($diri as $row):?>
                                    <img src="<?= base_url().'assets/uploadfile/'.$row['image'];?>" class="rounded-circle" width="200" height="200" alt="img">
                                <?php endforeach;?>
                               
                        </div>
                        <div class="user-title">
                            <input type="file" name="image" id="fileToUpload">
                            <div class="maximum-file" style="text-align: center; ">
                           
                                <p>Maximum file is 2mb</p>
                                <p>Allowed format is JPG,PNG</p>
                            </div>
                            <?php if (isset($error_image)) :?>
                                <small class="form-text text-danger"><?= $error_image; ?></small>
                            <?php endif;?>

                        </div>
                        
                        <div class="list-group text-center nav-profile">
                            <button id="edit-pic" class="btn trans_200 p-3 btn btn-danger"
                                class="list-group-item list-group-item-action active">
                                <span><i class="fa fa-pencil-square-o"></i></span>Edit Photo</button>
                        </div>
                       
                        
                        </form>
                    
                        <div class="list-group text-center nav-profile">
                            <button onclick="location.href='<?= site_url().'User/Reset'?>' "  id="reset-password" class="btn trans_200 p-3 btn btn-danger"
                                class="list-group-item list-group-item-action active" type ="button">
                                <span><i class="fa fa-pencil-square-o"></i></span>Reset Password</button>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card satu">
                            <div class="card-body">
                                <div class="row biodata_profile">
                                    <div class="col-md-12">
                                        <h5>
                                            <span><i class="fa fa-id-card-o"></i></span>
                                            Biodata Diri</h5>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row biodata_input">
                                    <div class="col-md-12">
                                        <form action="<?= site_url().'User/editprofile'?>" method="POST" id="form1">
                                            <?php
                                            foreach($diri as $row):
                                            ?>
                                            <div class="form-group row">
                                                <label for="username" class="col-4 col-form-label">Nama</label>
                                                <div class="col-8">
                                                    <input id="name" name="name" value="<?= $row['nama']; ?>"
                                                        class="form-control here" required="required" type="text">
                                                </div>
                                                <small class="form-text text-danger"><?= form_error('name') ?></small>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-4 col-form-label">Tanggal Lahir</label>
                                                <div class="col-8">
                                                    <?php
                                                        if(!empty($row['tgl_lahir'])){
                                                    ?>
                                                    <input id="date" name="birth" value="<?= $row['tgl_lahir']; ?>"
                                                        placeholder="Place and Birth Date" class="form-control here"
                                                        type="date">
                                                    <?php }else {?>

                                                    <input id="date" name="birth" value=""
                                                        placeholder="Place and Birth Date" class="form-control here"
                                                        type="date">
                                                    <?php }?>
                                                </div>
                                                <small class="form-text text-danger"><?= form_error('birth') ?></small>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lastname" class="col-4 col-form-label">Jenis Kelamin</label>
                                                <div class="col-8">
                                                    <select id="inputState" class="form-control" name="gender">
                                                        <option value="male" id="option-male">Male</option>
                                                        <option value="female" id="option-male">Female</option>
                                                    </select>
                                                </div>
                                                <small class="form-text text-danger"><?= form_error('gender') ?></small>
                                            </div>
                                            <div class="form-group row">
                                                <label for="text" class="col-4 col-form-label">Alamat</label>
                                                <div class="col-8">
                                                    <?php
                                                        if(!empty($row['alamat'])){
                                                    ?>
                                                    <textarea id="address" name="address" class="form-control here"
                                                        required="required"><?= $row['alamat']?></textarea>
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <textarea id="address" name="address" class="form-control here"
                                                        required="required"> </textarea>

                                                    <?php }?>

                                                </div>
                                                <small class="form-text text-danger"><?= form_error('address') ?></small>
                                            </div>

                                    </div>

                                </div>
                                <h5>
                                    <span><i class="fa fa-id-card-o"></i></span>
                                    Kontak</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Email</label>
                                            <div class="col-8">
                                                <input id="email" name="email" value="<?= $row['email'];?>"
                                                    placeholder="Email" class="form-control here" required="required"
                                                    type="text">
                                            </div>
                                            <small class="form-text text-danger"><?= form_error('email') ?></small>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-4 col-form-label">No.Hp</label>
                                            <div class="col-8">
                                                <?php
                                                    if(!empty($row['no_hp'])){
                                                ?>
                                                <input id="hp" name="no_hp" value="<?= $row['no_hp']?>" placeholder="no hp"
                                                    class="form-control here" type="text">
                                                <?php }else {?>
                                                <input id="hp" name="no_hp" value="" placeholder="no hp"
                                                    class="form-control here" type="text">
                                                <?php }?>
                                            </div>
                                            <small class="form-text text-danger"><?= form_error('no_hp') ?></small>
                                        </div>
                                        <!-- <div class="form-group row">
                                                <div class="offset-4 col-8 d-flex justify-content-end">
                                                    <input value="Update Profile" name="submit" type="submit"
                                                        class="btn btn-secondary trans_200"></input>
                                                    <div  data-id="" class=" btn-delete btn btn-primary trans_200 ml-3">Delete Profile</div>
                                                </div>
                                            </div> -->
                                        <div class="form-group row">

                                            <div class="col-8">
                                                <button class="btn btn-success" name="edit"
                                                    style="margin-left: 120px;">EDIT</button>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 border-box">
                <div class="products-container">
                    <div class="transaction-title">
                        <h3 style="text-align: center ; padding-bottom:10px ;">TRANSACTION</h3>
                    </div>
                    <div class="product-header">
                        <h6 class="product-title">PRODUCT</h6>
                            <h6 class="price"><span style = "margin-left:-40px">PRICE</span></h6>
                                <h6 class="quantity">QUANTITY</h6>
                                    <h6 class="total">TOTAL</h6>
                    </div>
                    <?php 
                        if(!empty($transaction)){?>
                        <?php foreach($transaction->result_array() as $row):?>
                    <div class="products">
                            <span class="product-title"><?= $row['item_name']; ?></span>
                            <div class="price">
                                <span style="margin-left:-60px"><?= 'Rp.'.number_format($row['price']); ?></span>
                            </div>
                            <div class="quantity">
                                <span style="margin-left:40px;"><?= $row['quantity']; ?></span>
                            </div>   
                            <div class="total">
                                <h6 class="basketTotalTitle"><span style = "margin-left:-20px;">
                                <?= number_format($row['price'] * $row['quantity']);?>
                                </span> </h6>
                            </div>
                    </div>
                        <?php endforeach;?> 
                    <?php }else {?>

                        
                    <?php }?> 
                                              
                </div>

                <div class="container-fluid d-flex justify-content-between"
                    style="font-style: bold; padding: 0 0 0 5px; ">
                    <span><a href="" style=" text-decoration: none; color:#fff; position: absolute;bottom: 0px;
                        ;right: 0;padding: 2em 2em; ">Check All</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="font-style: bold; padding: 0 0 20px 20px;">
        <a href="<?= site_url().'User/home'?>" style=" text-decoration: none; color:black"><i class="fa fa-arrow-left"
                aria-hidden="true"></i><span> Back to Home Page</span></a>
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
 


</body>

</html>