<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Cart</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="">Tamares</a>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="home.php?username=<?php echo $_GET['username'];?>">Home</a></li>
              <li class="nav-item active submenu dropdown"><a href="" class="nav-link dropdown-toggle" >Shop Category</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="women.php?username=<?php echo $_GET['username'];?>">Women</a></li>
                  <li class="nav-item"><a class="nav-link" href="men.php?username=<?php echo $_GET['username'];?>">Men</a></li>
                  <li class="nav-item"><a class="nav-link" href="Accessories.php?username=<?php echo $_GET['username'];?>">Accessories</a></li>
                  <li class="nav-item"><a class="nav-link" href="Skin.php?username=<?php echo $_GET['username'];?>">Skine & MakeUp</a></li>
                  <li class="nav-item"><a class="nav-link" href="Kids.php?username=<?php echo $_GET['username'];?>">Kids</a></li>
                </ul>
			   </li>
              <li class="nav-item submenu dropdown"><a href="About.php?username=<?php echo $_GET['username'];?>" class="nav-link dropdown-toggle">About us</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php?username=<?php echo $_GET['username'];?>">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <!--<li class="nav-item"><button><i class="ti-search"></i></button></li>-->
              			  <li class="nav-item"> 
				<img src="icon/username.png" class="picUser" /><span class="UserSpan" >
				<?php 
					if(isset($_GET['username']))
					{
						echo $_GET['username'];
						$_session['username']=$_GET['username'];
					}
					else
					{
						echo "piew";
					}
					
				?></span>
			</li>
			<li class="nav-item"><a href="cart.php?username=<?php echo $_GET['username'];?>"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button></a> </li>
			  
			<li class="nav-item"><a class="button button-header" href="index.html">SignOut</a></li>
            </ul>
			
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================= End Header Menu Area ==================-->

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1 class="headerAbout" >Cart</h1>
					
					<p>here you'll find all the product you chose </p>
					<p>check them !</p>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Product</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="img/product/product1.png" height="150px" width="150px"alt="">
                                      </div>
                                      <div class="media-body">
                                          <p>Watch</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>500 Dh</h5>
                              </td>
                              <td>
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                          class="input-text qty">
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                          class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                          class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                  </div>
                              </td>
                              <td>
                                  <h5>1000 DH</h5>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="img/product/product_8.jpg" height="150px" width="150px" alt="">
                                      </div>
                                      <div class="media-body">
                                          <p>Flower Dress</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>799 DH</h5>
                              </td>
                              <td>
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                          class="input-text qty">
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                          class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                          class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                  </div>
                              </td>
                              <td>
                                  <h5>799 DH</h5>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="img/cart/cart3.png" height="150px" width="150px"alt="">
                                      </div>
                                      <div class="media-body">
                                          <p>Charging car</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>360 DH</h5>
                              </td>
                              <td>
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                          class="input-text qty">
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                          class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                          class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                  </div>
                              </td>
                              <td>
                                  <h5>360 DH</h5>
                              </td>
                          </tr>
                          <tr class="bottom_button">
                              <td>
                                  <a class="button" href="#">Update Cart</a>
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              
                          </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Sub total</h5>
                              </td>
                              <td>
                                  <h5>2 159‬ DH</h5>
                              </td>
                          </tr>
                          
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->



  
  <!--================ Start footer Area  =================-->	
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title large_title">Gallery</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/r1.jpg" alt=""></li>
								<li><img src="img/gallery/r2.jpg" alt=""></li>
								<li><img src="img/gallery/r3.jpg" alt=""></li>
								<li><img src="img/gallery/r5.jpg" alt=""></li>
								<li><img src="img/gallery/r7.jpg" alt=""></li>
								<li><img src="img/gallery/r8.jpg" alt=""></li>
								
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Our office
								</p>
								<p> Ayt Mousa ou 3mar and lazzib , Imzouren Hoceima</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+212 6890 7890 
									<br>
									+123 6235 4567
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									OoumaimaWidad@Tamares.com <br>
									www.Tamares.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						Store of Tamares licensed under Copyright ©2020 All rights reserved, Tamares made by Oumaima Amlou & Widad Ammarti
					</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
