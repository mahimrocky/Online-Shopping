<?php
	session_start();
	error_reporting(0);
?>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> --!>
<script src="js/jquery.min.js"></script>
	 <script type="text/javascript" src="js/cycle.js"></script>
	 <script type="text/javascript" src="js/code.js"></script>
	 <script type="text/javascript" src="js/self.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript">	 </script>

<!--navbar start-->
				<div id="header">
						<div class="logo">
							<span>SEAGULL</span>
						</div>
						<div class="cart_panel">
							<div class="quantity">
								<span id='num_of_item'>
									<?php 
										if(!isset($_SESSION[total_item])){
											echo '00';
										}
										else if ($_SESSION[total_item]<10) echo "0".$_SESSION[total_item]; 
										else echo $_SESSION[total_item]; 
									?>
										
									</span>	
							</div>

							
							<div class="check_out">
								<span><a href="?action=checkout">Check Out</a></span>
							</div>
							
						</div>
				</div>
				<div class="min_bar">
					
				</div>
		 		 <div id="navbar">
		 		 	 <div id="menu">
		 		 	 	 <ul>
		 		 	 	 	<li><a id="nav_item" href=".">HOME</a></li>
		 		 	 	 	
		 		 	 	 	<li class="dropdown">
		 		 	 	 	<a id="nav_item" href="?cata=men" class="dropbtn">MEN</a>
								    <div class="dropdown-content">
								      <a href="?cata=men&sub_cata=t_shirt">T-Shirt</a>
								      <a href="?cata=men&sub_cata=polo">Polo T-Shirt</a>
								      <a href="?cata=men&sub_cata=pant">Pant</a>
								      <a href="?cata=men&sub_cata=formal_pant">Formal Dress</a>
								      <a href="?cata=men&sub_cata=coat">Coat</a>
								      <a href="?cata=men&sub_cata=panjabi">Panjabi</a>
								    </div>
		 		 	 	 	</li>
		 		 	 	 	<li class="dropdown">
		 		 	 	 	<a id="nav_item" href="?cata=women" class="dropbtn">WOMEN</a>
								    <div class="dropdown-content">
								      <a href="?cata=women&sub_cata=sharee">Saree</a>
								      <a href="?cata=women&sub_cata=ladies_shirt">Ladies Shirt</a>
								      <a href="?cata=women&sub_cata=salwar_kameez">Salwar-Kameez</a>
								      <a href="?cata=women&sub_cata=scarf">Scarf</a>
								    </div>
		 		 	 	 	</li>
		 		 	 	 	<li class="dropdown">
		 		 	 	 	<a id="nav_item" href="?cata=kids" class="dropbtn">KIDS</a>
								    <div class="dropdown-content">
								      <a href="?cata=women&sub_cata=toys">Toys</a>
								      <a href="?cata=women&sub_cata=cloths">Cloths</a>
								      <a href="?cata=women&sub_cata=baby_care">Baby Care</a>
								    </div>
		 		 	 	 	</li>
		 		 	 	 	<li class="dropdown"><a id="nav_item" href="?cata=gift_item" class="dropbtn">GIFT ITEM</a>
									<div class="dropdown-content">
								      <a href="?cata=gift_item&sub_cata=jewellery">Jewellery</a>
								      <a href="?cata=gift_item&sub_cata=makeup_kit">Makeup Kit</a>
								      <a href="?cata=gift_item&sub_cata=flower">Flower</a>
								    </div>
		 		 	 	 	</li>
		 		 	 	 	<!-- <li><a href="#" >GALLERY</a> -->
		 		 	 	 	</li>
		 		 	 	 	<li><a id="nav_item" href="?action=contact" >CONTACT US</a></li>
		 		 	 	 </ul>
		 		 	 	
		 		 	 </div>
		 		 	 <div id="form">
		 		 	 		<input id="search" type="text" placeholder="SEARCH PRODUCT">
		 		 	 		<input id="search_bt" onclick="search()" type="submit"  value="SEARCH" >
		 		 	 </div>
			
			 	 </div>
		 	     <!--end navbar-->
		 	     <?php
		 	     	include 'slide.php';
		 	     	
		 	     ?>

