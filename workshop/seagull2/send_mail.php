<?php 

		addOffer();


	
	function addOffer(){
		include 'data_connection.php';
		
		$sql = "INSERT INTO `contact`(`subject`, `message`, `name`, `email`) 
		VALUES ('$_POST[subject]', '$_POST[massage]', '$_POST[user_name]','$_POST[user_contact]')";

		if($conn->query($sql) or die(mysqli_error($conn)) ){
			echo "Contact added";
		}
		else{
			echo "Contact adding error";
		}

		//header('Location: ./?option=update');

	}


?>