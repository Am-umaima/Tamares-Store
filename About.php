<!DOCTYPE html>
<html>
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
          <a class="navbar-brand logo_h" href="#">Tamares</a>
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
	
	<!-- ================ start descraption ================= -->
	<section class="description" >
		<div class="text">
			<h2 class="headerAbout" >About Us</h2>
			<p>
				<span class="navbar-brand logo_h" style="font-size: xx-large;">Tamares</span> in our language (Tamazight) means the Precise or the Perfect work.
				We chose this name for our store because we seek and hope that our service will be always suitable for you
				anywhere and anytime you can easly shop from our store.
			</p>
			<p>
				The location of our Store is in North Morocco in a city called  Al hoceima ,but we make delivery to all cities in morocco
				and also to all over the world just to let our client satisfaied.
				Soon we will have branches in others Moroccan cities and through your continued support maybe there will be branches outside Morocco
				why not :).
			</p> 
			<p>
				in <span class="navbar-brand logo_h" style="font-size: xx-large;">Tamares</span> Our products are various from all categouries (Clothes, accessories, home decor, makeup,Skine Care, kids Toy, shoes,....etc)
				We offer you the best in the markets to suit your tastes and to keep you  satisfaid always :).
			</p>
			<p>
				if you have any qustion or suggestion don't hestite to Contact us by sending us a message from the <a href="contact.php?username=<?php echo $_GET['username'];?>">contact page</a>. 
				<br>Enjoy your shopping
			</p>
		</div>
	</section>
	<!-- ================ end descripptipn================= -->
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
									
									Our office
								</p>
								<p> Ayt Mousa ou 3mar and lazzib , Imzouren Hoceima</p>
	
								<p class="sm-head">
									
									Phone Number
								</p>
								<p>
									+212 6890 7890 
									<br>
									+123 6235 4567
								</p>
	
								<p class="sm-head">
									
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