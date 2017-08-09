<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




	         <!--header start-->
	         <!--slider-warper start-->
	     <div id="warper"> 
				
				
			<?php

				include 'data_connection.php';
				
				
				$sql = "SELECT * FROM `offers`";
				$sql = $conn->query($sql);
				
				
				if($sql->num_rows>0){
					while($row = $sql->fetch_assoc()){
						echo "<div style=\"padding: 10px; background: #223D62; color: #fff; clear: both;\">
							<h4>OFFER! $row[offer]<h4>
						</div>";
					}
				}
			
			?>
		 
		
	     	    <!-- <div id="next">></div> -->
	     	    <!-- <div id="previous"><</div> -->
	     	    		 	 	 
		 	 <div id="slider">
		 	 	 <div id="data">
				 	<div class="slideimg">
				 		<img src="image/slide1.jpg">
					 </div>
				 </div>	  
				 <div id="data">
				 	<div class="slideimg">
				 		<img src="image/slide2.jpg">
					 </div>
			 	 </div>	 
				  
				 <div id="data">
					 <div class="slideimg">
				 		<img src="image/slide3.png">
				 	</div>
				 </div>	 
				  
				 <div id="data">
				 	<div class="slideimg">
				 		<img src="image/slide4.png">
					 </div>
				</div>	 
			 	<div id="data">
				 	<div class="slideimg">
				 		<img src="image/2.jpg">
				 	</div>
				</div>	
					<div id="data">
				 	<div class="slideimg">
				 		<img src="image/slider6.jpg">
				 	</div>
				</div>	
					<div id="data">
				 	<div class="slideimg">
				 		<img src="image/1.jpg">
				 	</div>
				</div>	 
				  
			 </div>
		 </div>

		 
</body>
</html>