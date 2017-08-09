<?php

		include '../data_connection.php';
		
		$sql = "DELETE FROM `contact` WHERE `id` = '$_GET[delete_contact]'";

		if($conn->query($sql) or die(mysqli_error($conn))){
			echo "Contact Deleted";
		}
		else{
			echo "Contact deleting error";
		}
		
?>