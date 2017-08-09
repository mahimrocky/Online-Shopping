<?php
	session_start();
	error_reporting(0);
	include '../data_connection.php';

	$sql = "SELECT `email`, `password` FROM `admin` WHERE `email` = '$_POST[id]' AND `password`= '$_POST[pass]' ";

	$sql = $conn->query($sql);

	if($sql->num_rows>0){
		$_SESSION[admin]="yes";
		header('Location : localhost:81\bilshari\admin');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>shop</title>
	<script src="../js/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>   -->
	 <script type="text/javascript" src="../js/cycle.js"></script>
	 <script type="text/javascript" src="../js/code.js"></script>
	 <script type="text/javascript" src="../js/self.js"></script>
	 <!-- <script type="text/javascript" src="js/admin_js.js"></script> -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<script type="text/javascript">
	          
</script>
<body>

	<div id="header">
			<div class="logo">
				<span>SEAGULL</span>
			</div>
			<div class="cart_panel">
				<div class="quantity">
					
				</div>

				<div class="check_out">
					<?php
						if(isset($_SESSION[admin])){
							echo '<span><a href="logout.php">LogOut</a></span>';
						}
					?>
					
				</div>
			</div>
	</div>
	

	<?php
		if(!isset($_SESSION[admin])){
			include 'login.php';
		}
		else if(isset($_SESSION[admin])){

			echo '
					<div class="select_option">
						<a href="?option=update">UPDATE</a>
						<a href="?option=check_order">ORDER</a>
						<a href="?option=offers">OFFERS</a>
						<a href="?option=contact">CONTACTS</a>
					</div>
			';
			if($_GET[option]=="update"){
				include 'update.php';
			}
			else if($_GET[option]=="check_order"){
					include 'check_order.php';
			}	
			else if($_GET[option]=="offers"){
					include 'offers.php';
			}
			else if($_GET[delete_offer]){
					include 'delete_offer.php';
			}
			else if($_GET[delete_contact]){
					include 'delete_contact.php';
			}
			else if($_GET[option]=="contact"){
					include 'view_contact.php';
			}		
		}
		
	?>
	

</body>
</html>