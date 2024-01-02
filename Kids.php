<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Tamares Shop - Home</title>
	<link rel="icon" href="img/T.png" type="image/png">
	<link rel="stylesheet" href="css/bootstrap.min.css"><!--pg-->
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css"><!--icon-->
	<link rel="stylesheet" href="css/style.css"><!--pg-->
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
	<!--================ End Header Menu Area =================-->
	<section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>All the items For Kids</p>
          <h2> <span class="section-intro__style">Kids Items</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/shirtK.JPG" height="300px" alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Blue Shirt</a></h4>
                <p class="card-product__price">210 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/502132_45641_41.jpg" height="300px"alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Blue pants</a></h4>
                <p class="card-product__price">250 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/Kids-Cute-Cartoon-Printed-T-Shirts.jpg" height="300px"alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Printed TShirts</a></h4>
                <p class="card-product__price">199 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/kids-dark-blue-jeans-pants-500x500.jpg" height="300px"alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">

                <h4 class="card-product__title"><a href="single-product.html">cuten jeanse</a></h4>
                <p class="card-product__price">500 DH</p>
              </div>
            </div>
          </div>
          
		  <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/summer_fun_kids_dress_1024x1024.jpg" height="350px" alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Dress</a></h4>
                <p class="card-product__price">410 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/light.jpg" height="350px" alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">lightful sneckers</a></h4>
                <p class="card-product__price">790 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/cactus_kids_dress.jpg" height="350px alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">colurful dress</a></h4>
                <p class="card-product__price">399 DH</p>
              </div> 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/IMG_9741_1_opt.jpg" height="350px alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="#">sneackers</a></h4>
                <p class="card-product__price">150 DH</p>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/601670_4.jpg" height="350px" alt="">
                <ul class="card-product__imgOverlay">
                 <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">pinky shose</a></h4>
                <p class="card-product__price">210 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/Skirt.jpg" height="350px"alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Black Skirt</a></h4>
                <p class="card-product__price">320 DH</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/Minion.jpg" height="350px"alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Minion Cap</a></h4>
                <p class="card-product__price">299 DH</p>
              </div>
            </div>
			
          </div>
		   <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/summerhat.jpg" height="350px"alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="single-product.html">Summer Hat</a></h4>
                <p class="card-product__price">199 DH</p>
              </div>
            </div>
			
          </div>
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  
	
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
	<!--================ End footer Area  =================-->
</body>
</html>