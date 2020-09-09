<!DOCTYPE html>
<html>

<head>
	<title>Tel U Commerce | Home</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/landing.css'?>">
	<link rel="shortcut icon" href="<?= base_url().'assets/image/telkom.png'?>">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
.banner-imge{
	background-image: url(<?= base_url().'assets/image/cellphone.jpg';?>);
}
.banner-image.satu{
	background-image: url(<?= base_url().'assets/image/laptop.png';?>);
}
.banner-image{
	background-image: url(<?= base_url().'assets/image/mp3.png';?>);
}
</style>
<body>
	<!-- first main header -->
	<div class="container-fluid shadow-sm " style=" background: #CC5252;">

		<header class="main-header">
			<nav class="navbar navbar-expand-lg  p-0 ml-3 mr-3">
				<div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto ">
						<li class="nav-item active mr-2">
							<a class="nav-link" href="<?= site_url().'User/home'?>">Home <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item mr-2">
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

								<!-- Modal -->
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
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url().'User/profile'?>">
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

	<!-- carausel -->

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
				<img src="<?= base_url().'assets/uploadfile/'.$row['image'] ?>" alt="Los Angeles" width="100%" height="400px">
				<div class="carousel-caption">
					<div class="slogan">
						<h3 style="font-weight: bold; color: black;"><?= $row['item_name'];?></h3>
						<p style = "color: black;"> <?= $row['spesification']; ?> </p>
						<p class="lead">
							<a class="btn" href="<?= site_url().'User/item'?>" role="button">Learn
								more</a>
						</p>
					</div>
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

	<!-- keterangan -->
	<div class="container-fluid" style="background: #B3BEC0; color: black;">
		<div class="row">
			<div class="col-sm">
				<h4 style="text-align: center">Secure Shopping</h4>
			</div>
			<div class="col-sm">
				<h4 style="text-align: center">Secure Shopping</h4>
			</div>
			<div class="col-sm">
				<h4 style="text-align: center">Secure Shopping</h4>
			</div>
		</div>
	</div>

	<!-- card group -->

	<div class="mt-3 mb-3">
		<h4 style="text-align: center; font-weight:bold;">Popular item</h4>
	</div>

	<!-- <div class=" container-fluid card-deck">
	  <div class="card" style="height: 50%">
		<img class="card-img-top" src="image/heads.jpg" alt="Card image cap">
		<div class="like-btn suka">
			<a href=""><i class="fa fa-heart-o"></i></a>
		</div>
		<div class="cart-btn keranjang">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	    <div class="card-body">
	        <div class="star-rating" >
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
                    <h5 class="card-title" style="text-align: center"> truk</h5>
                    <p class="item-price" style="text-align: center;">
                        <strike>$890.00</strike>
                        <b>$700.00</b>
                    </p>
                    <div class="card-btn " style="text-align: center;">
                    	<a href="#" class="btn cart" >Add to Cart</a>
                    </div>
            </div>
	    </div>
	  </div>

	  <div class="card" style="height: 50%">
		<img class="card-img-top" src="image/heads.jpg" alt="Card image cap">
		<div class="like-btn suka">
			<a href=""><i class="fa fa-heart-o"></i></a>
		</div>
		<div class="cart-btn keranjang">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	    <div class="card-body">
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
                    <h5 class="card-title" style="text-align: center"> truk</h5>
                    <p class="item-price" style="text-align: center;">
                        <strike>$890.00</strike>
                        <b>$700.00</b>
                    </p>
                    <div class="card-btn " style="text-align: center">
                    	<a href="#" class="btn cart" >Add to Cart</a>
                    </div>
            </div>
	    </div>
	  </div>
	  
	  <div class="card" style="height: 50%">
		<img class="card-img-top" src="image/heads.jpg" alt="Card image cap">
		<div class="like-btn suka">
			<a href=""><i class="fa fa-heart-o"></i></a>
		</div>
		<div class="cart-btn keranjang">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	    <div class="card-body">
	        <div class="star-rating">
                <ul class="list-inline"style="text-align: center;">
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
                    <h5 class="card-title" style="text-align: center"> truk</h5>
                    <p class="item-price" style="text-align: center;">
                        <strike>$890.00</strike>
                        <b>$700.00</b>
                    </p>
                    <div class="card-btn " style="text-align: center">
                    	<a href="#" class="btn cart" >Add to Cart</a>
                    </div>
            </div>
	    </div>
	  </div>

	  <div class="card" style="height: 50%">
		<img class="card-img-top" src="image/heads.jpg" alt="Card image cap">
		<div class="like-btn suka">
			<a href=""><i class="fa fa-heart-o"></i></a>
		</div>
		<div class="cart-btn keranjang">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	    <div class="card-body">
	        <div class="star-rating">
                <ul class="list-inline" style="text-align: center;">
                	<li class="list-inline-item" >
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
                    <h5 class="card-title" style="text-align: center"> truk</h5>
                    <p class="item-price" style="text-align: center;">
                        <strike>$890.00</strike>
                        <b>$700.00</b>
                    </p>
                    <div class="card-btn " style="text-align: center">
                    	<a href="#" class="btn cart" >Add to Cart</a>
                    </div>
            </div>
	    </div>
	  </div>

	  <div class="card" style="height: 50%">
		<img class="card-img-top" src="image/heads.jpg" alt="Card image cap">
		<div class="like-btn suka">
			<a href=""><i class="fa fa-heart-o"></i></a>
		</div>
		<div class="cart-btn keranjang">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	    <div class="card-body">
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
                    <h5 class="card-title" style="text-align: center"> truk</h5>
                    <p class="item-price" style="text-align: center;">
                        <strike>$890.00</strike>
                        <b>$700.00</b>
                    </p>
                    <div class="card-btn " style="text-align: center">
                    	<a href="#" class="btn cart" >Add to Cart</a>
                    </div>
            </div>
	    </div>
	  </div>

	  <div class="card" style="height: 50%">
		<img class="card-img-top" src="image/heads.jpg" alt="Card image cap">
		<div class="like-btn suka">
			<a href=""><i class="fa fa-heart-o"></i></a>
		</div>
		<div class="cart-btn keranjang">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	    <div class="card-body">
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
                    <h5 class="card-title" style="text-align: center"> truk</h5>
                    <p class="item-price" style="text-align: center">
                        <strike>$890.00</strike>
                        <b>$700.00</b>
                    </p>
                    <div class="card-btn " style="text-align: center">
                    	<a href="#" class="btn cart" >Add to Cart</a>
                    </div>
            </div>
	    </div>
	  </div>
	</div> -->

	<!-- popular item -->
	
	<div class="container item">
	<?php
		foreach($awal as $row):
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

	<!-- main most popular category -->
	<div class="container-fluid p-0 m-0">
		<div class="main-category">
			<div class="category-grid">
				<div class="grid-c-item grid-c-item-1 banner-img satu">
					<div id="c1" class="inner-c-item	 box satu ">
						<p>Upgrade your computer hardware and the accesories from our collection</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-2 banner-imge">
					<div id="c2" class="inner-c-item banner-text">
						<p>Let’s see our smartphone collection, we have the latest smartphone on our catalog.
						</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-3 banner-image">
					<div id="c3" class="inner-c-item banner-box">
						<p>And those who were seen dancing were thought to be insane by those who could not hear the
							music.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- main testimonials -->

	<div class="testimonials">
		<div class="inner">
			<h1>Costumer reviews</h1>
			<div class="bord"></div>

			<div class="row">
				<div class="col ">
					<div class="testimonial "
						style=" background: rgba(245, 184, 178, 0.8);box-shadow: 4px 4px 50px rgba(0, 0, 0, 0.15);">
						<img src="<?= base_url().'assets/image/new_logo.png'?>">
						<p style="text-align: left; margin-bottom: 0px; font-weight: bold; font-size: 18px;">Mario Palo
						</p>
						<p
							style="text-align: left; margin-bottom: 0px; font-size: 12px; color: rgba(15, 76, 129, 0.6);">
							Student</p>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<br>
						<p><i class="fa fa-quote-left w3-xxlarge"></i></p>
						<h1 style="font-size:18px; font-weight: bold;"> Geat Experience</h1>
						<p>
							Love the website. It’s easy to pay, easy to use and also the shipping is awesome
						</p>
						<i class="fa fa-quote-right w3-xxlarge"></i>
					</div>
				</div>

				<div class="col">
					<div class="testimonial"
						style="background: rgba(73, 165, 211, 0.79);box-shadow: 4px 4px 50px rgba(0, 0, 0, 0.15);">
						<p><i class="fa fa-quote-left w3-xxlarge"></i></p>
						<h1 style="font-size:18px; font-weight: bold;"> Geat Experience</h1>
						<p>
							Love the website. It’s easy to pay, easy to use and also the shipping is awesome
						</p>
						<i class="fa fa-quote-right w3-xxlarge"></i>
						<br>
						<img src="<?= base_url().'assets/image/new_logo.png'?>">
						<p style="text-align: left; margin-bottom: 0px; font-weight: bold; font-size: 18px;">Mario Palo
						</p>
						<p
							style="text-align: left; margin-bottom: 0px; font-size: 12px; color: rgba(15, 76, 129, 0.6);">
							Student</p>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="testimonial "
						style=" background: rgba(70, 96, 111, 0.8);box-shadow: 4px 4px 50px rgba(0, 0, 0, 0.15);">
						<img src="<?= base_url().'assets/image/new_logo.png'?>">
						<p
							style="text-align: left; margin-bottom: 0px; font-weight: bold; font-size: 18px; color: white;">
							Mario Palo</p>
						<p
							style="text-align: left; margin-bottom: 0px; font-size: 12px; color: rgba(15, 76, 129, 0.6);">
							Student</p>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<br>
						<p><i class="fa fa-quote-left w3-xxlarge" style="color: white"></i></p>
						<h1 style="font-size:18px; font-weight: bold; color: white;"> Geat Experience</h1>
						<p style="color: white">
							Love the website. It’s easy to pay, easy to use and also the shipping is awesome
						</p>
						<i class="fa fa-quote-right w3-xxlarge" style="color: white"></i>
					</div>
				</div>

				<div class="col">
					<div class="testimonial" style="background: rgba(255, 255, 255, 0.8);
box-shadow: 4px 4px 50px rgba(0, 0, 0, 0.15);">
						<p><i class="fa fa-quote-left w3-xxlarge"></i></p>
						<h1 style="font-size:18px; font-weight: bold;"> Geat Experience</h1>
						<p>
							Love the website. It’s easy to pay, easy to use and also the shipping is awesome
						</p>
						<i class="fa fa-quote-right w3-xxlarge"></i>
						<br>
						<img src="<?= base_url().'assets/image/new_logo.png'?>">
						<p style="text-align: left; margin-bottom: 0px; font-weight: bold; font-size: 18px;">Mario Palo
						</p>
						<p
							style="text-align: left; margin-bottom: 0px; font-size: 12px; color: rgba(15, 76, 129, 0.6);">
							Student</p>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid" style="position: relative;">
		<div class="row" style="height: 450px;">
			<div class="col-lg-4 container-text">
			</div>
			<div class="col-lg-8 container-image">

			</div>
		</div>
		<div class="centered" style="color: white;">

			<div>
				<span>
					<h1 style="width: 215px;">See how your orders reaches to your hands.</h1>
				</span>
				<span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
				</span>
			</div>
			<br>
			<div>
				<span><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-truck fa-2x" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
				<span><i class="fa fa-minus" aria-hidden="true"></i></span>
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