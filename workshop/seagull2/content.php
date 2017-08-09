

	    <!--main content here-->
     <!--content-warper start-->
	     <div class="content-warper">
		 	 <?php
		 	 	include 'side_bar.php';
		 	 ?>
		 	 <div class="main_panel" id="main_panel">

		 	 			<?php
		 	 				$obj->getContent($_GET[cata], $_GET[sub_cata]);

		 	 				if(!isset($_SESSION[user])){
		 	 					$obj->userSessionSet();
		 	 				}
		 	 			?>
		 	 </div>
	     </div>
	 <!--end conetnt-warper-->					 
      <!--footer start-->
	 
		  <!--end footer-->
	<!--end main content-->	
<?php
	include 'footer.php';
?>