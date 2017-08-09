<?php


	$conn = new mysqli("localhost", "root", "", "bilshari_new");

	if ($conn -> connect_error) {

		echo "Error";
	}

	else{
		echo "";
	}
?>