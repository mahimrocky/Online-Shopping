<?php
// session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
	include 'operation.php';
	$obj=new data();
	if(!isset($_SESSION[user])){
		$obj->userSessionSet();
	}

	include 'header.php';

	if($_GET[action]=="checkout"){
     		include 'checkout.php';
     	}
 	else if($_GET[action]=="order"){
 		include 'order.php';
 	}
 	else if($_GET[action]=="contact"){
 		include 'contact.php';
 	}
 	
 	else{
 		include 'content.php';	
 	}
?>
</body>
</html>