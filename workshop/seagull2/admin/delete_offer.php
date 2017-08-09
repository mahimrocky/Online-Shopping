<?php

		include '../data_connection.php';
		
		$sql = "DELETE FROM `offers` WHERE `id` = '$_GET[delete_offer]'";

		if($conn->query($sql)){
			echo "Offer Deleted";
		}
		else{
			echo "Offer adding error";
		}
		
?>