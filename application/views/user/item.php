<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">
    <title>Tel-U Commerce | Item Baru</title>
    <!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/item.css'?>">

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
								<a class="nav-link" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
								<div class="cart-items"><?= $this->cart->total_items();?></div>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
														<h6 class="price"><span style = "margin-left:-70px">PRICE</span></h6>
														<h6 class="quantity"><span style = "margin-left:-40px">QUANTITY</span></h6>
														<h6 class="total"><span style = "margin-left:-30px">TOTAL</span></h6>
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
													
															<span class="product-title"><?= $row['name']; ?></span>
													
													<div class="price">
														<span style="margin-left:-90px"><?= 'Rp.'.number_format($row['price']); ?></span>
													</div>
													<div class="quantity">
															<span><?php echo form_input('cart[' . $row['id'] . '][qty]', $row['qty'], 'maxlength="3" size="1" style="text-align: right; margin-left:-30px;"'); ?></span>
														
													</div>

													<div class="total">
															<h6 class="basketTotalTitle" ><span style = "margin-left:-55px;">
																<?= 'Rp.'.number_format($row['subtotal']) ?>
															</span></h6>
															<a href="<?= site_url().'user/deleteCart/'.$row['rowid']?>"><span style = "margin-left:29px;"><ion-icon name="trash-outline"></ion-icon></span></a>
															
													</div>
														<?php endforeach; ?>
														

													<div class="basketTotalContainer">
														<h6 class="basketTotalTitle">
															Cart Total
														</h6>
														<h6 class="basketTotal">
															<?= 'Rp.'.$this->cart->format_number($this->cart->total());  ?>
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
											<a href="<?= site_url().'User/home'?>" style=" text-decoration: none; color:white"><i class="fa fa-arrow-left" aria-hidden="true"></i><span> Back to Home Page</span></a>
											<a href="<?= site_url().'User/showCart'?>" style=" text-decoration: none; color:white"> <i class="fa fa-arrow-right" aria-hidden="true"></i><span>Continue to Checkout</span ></a>
										</div>
										
									</div>
									</div>
								</div>

							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url().'User/profile'?>" x>
							<?php foreach($diri as $row) :?>
                                <img src="<?= base_url().'assets/uploadfile/'.$row['image'];?>" width="30" height="30"
                                    style="object-fit:cover; margin-right:1em" class="rounded-circle">
                            <?php endforeach;?>
									<?= $this->session->userdata('nama'); ?>
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
							<a class="nav-link kategori" href="<?= site_url().'User/itemComputer'?>">Computer & acc	 <span class="sr-only">(current)</span></a>
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
					<form action="" method="POST">
						<div class="input-group btn-search">
							
							<input class="form-control py-2 border-right-0 border search" type="search"
								placeholder="search" id="example-search-input" name="keyword">
							<span class="input-group-append">
								<button class="btn btn-outline-secondary border-left-0 border" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
							
						</div>
						</form>
					</ul>	
				</div>
			</nav>
		</header>
    </div>
    
    <!-- third header -->
	
    <div class="container-fluid" style="position: relative;">
	
        <div class="overlay">
			
		</div>
	
        <div class="row" style="height: 250px;">
		<?php
			foreach($gambar->result_array() as $row):
		?>
            <div class="col-lg-4 container-image ">
				<img src="<?= base_url().'assets/uploadfile/'.$row['image']?>" alt="gambar" width="500px" height="250px">
				<div class="centered" style="margin-top:90px;">
            		<h1 style="color: white;"><span style="color: black; font-size: 30px;"><?= $row['item_name']?></span></h1>
        		</div>
			</div>
			

			<?php endforeach;?>
			
			
        </div>
	
 		
		
			
    </div>
	

    <!-- item -->

    <!-- popular item -->
    <div class="container-fluid" style="font-style: bold; padding: 20px 0 0 150px;">
        <h3>New Item </h3>
    </div>

	<div class="container">
        
	<?php
		foreach($barang as $row):
	?>
		<div class="image">
			<img src="<?= base_url().'assets/uploadfile/'. $row['image']?>" alt="tshirt-1">
			<div class="like-btn suka">
				<a href=""><i class="fa fa-heart-o"></i></a>
			</div>
			<div class="cart-btn keranjang">
				<a href="<?= site_url().'User/addcart/'.$row['item_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
			</div>
			<div class="star-rating">
				<ul class="list-inline" style="text-align: center;">
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
						<i class="fa fa-star"></i>
					</li>
					<li class="list-inline-item">
						<i class="fa fa-star"></i>
					</li>
				</ul>
			</div>
			<h6 style="text-align: center;"><?= $row['item_name'];?></h3>
				<h6 style="text-align: center; color: #CC5252;">Rp.<?= number_format($row['price']);?></h3>
					<a class="add-cart cart1" href="<?= site_url().'User/addcart/'.$row['item_id']; ?>">BUY NOW</a>
		</div>
		<?php endforeach;?>
        
        
        
    </div>

    <div class="container-fluid" style="font-style: bold; padding: 0px 0 0 150px;">

        <a href="<?= site_url().'User/home'?>" style=" text-decoration: none; color:black"><i class="fa fa-arrow-left" aria-hidden="true"></i><span> Back to Home Page</span></a>

    </div>

    <footer>
        <div class="footer-top" style="background: #46606F; font-size: 15px;">
            <div class="container py-5" >
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
                        <a href="" style="color: white; padding-right: 10px;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                        <a href="" style="color: white; padding-right: 10px;"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                        <a href="" style="color: white; padding-right: 10px;"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
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
	<script src="js/cart.js"></script>
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    
</body>
</html>