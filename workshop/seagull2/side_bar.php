
<div class="sidebar">
		 	 	<?php
		 	 		error_reporting(0);
		 	 		if($_GET[cata]=="men"){
		 	 			echo '
		 	 			<span>MEN</span>
			 	 			<ul>
								<li> <a href="?cata=men&sub_cata=t_shirt">T-Shirt</a></li>
								<li><a href="?cata=men&sub_cata=polo">Polo T-Shirt</a></li>
								<li> <a href="?cata=men&sub_cata=pant">Pant</a></li>
								<li><a href="?cata=men&sub_cata=formal_pant">Formal Dress</a></li>
								<li><a href="?cata=men&sub_cata=coat">Coat</a></li>
								<li><a href="?cata=men&sub_cata=panjabi">Panjabi</a></li>
							</ul>
		 	 			';
		 	 		}
		 	 		else if($_GET[cata]=="women"){
		 	 			echo '
		 	 			<span>WOMEN</span>
			 	 			<ul>
								<li> <a href="?cata=women&sub_cata=sharee">Sharee</a></li>
								<li><a href="?cata=women&sub_cata=ladies_shirt">Ladies Shirt</a></li>
								<li><a href="?cata=women&sub_cata=salwar_kameez">Salwar-Kameez</a></li>
								<li><a href="?cata=women&sub_cata=scarf">Scarf</a></li>
							</ul>
		 	 			';
		 	 		}
		 	 		else if($_GET[cata]=="gift_item"){
		 	 			echo '
		 	 			<span>GIFT ITEM</span>
			 	 			<ul>
								<li><a href="?cata=gift_item&sub_cata=jewellery">Jewellery</a></li>
								<li><a href="?cata=gift_item&sub_cata=makeup_kit">Makeup Kit</a></li>
								<li><a href="?cata=gift_item&sub_cata=show_pice">Flower</a></li>
							</ul>
		 	 			';
		 	 		}
		 	 		else if($_GET[cata]=="kids"){
		 	 			echo '
		 	 			<span>KIDS</span>
			 	 			<ul>
								<li><a href="?cata=kids&sub_cata=toys">Toys</a></li>
								<li><a href="?cata=kids&sub_cata=cloths">Cloths</a></li>
								<li><a href="?cata=kids&sub_cata=baby_care">Baby Care</a></li>
							</ul>
		 	 			';
		 	 		}
		 	 		else{
		 	 			echo '
		 	 				<span>HOME</span>
			 	 			<ul>
								<li><a href="?cata=men">Men</a></li>
								<li><a href="?cata=women">Women</a></li>
								<li><a href="?cata=kids">Kids</a></li>
								<li><a href="?cata=gift_item">Gift Item</a></li>
							</ul>
		 	 			';	
		 	 		}
					
					
		 	 	?>
				
				
				<div class="notice">
					<p>Notice board</p>
				</div>
					
		 	 </div>
			 