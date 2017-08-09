<?php 
	if(isset($_POST['offer']) ){
		addOffer();
	}else{
		echo 'whats wrong';
		exit();
	}

	
	function addOffer(){
		include '../data_connection.php';
		
		$sql = "INSERT INTO `offers`(`offer`, `start`, `end`) 
		VALUES ('$_POST[offer]', '$_POST[start]', '$_POST[end]')";

		if($conn->query($sql) or die(mysqli_error($conn)) ){
			echo "Offer added";
		}
		else{
			echo "Offer adding error";
		}

		//header('Location: ./?option=update');

	}


?>