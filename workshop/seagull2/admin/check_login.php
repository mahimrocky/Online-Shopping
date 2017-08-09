<?php
	session_start();

	include '../data_connection.php';

	$sql = "SELECT `email`, `password` FROM `admin` WHERE `email` = '$_POST[id]' AND `password`= '$_POST[pass]' ";

	$sql = $conn->query($sql);

	if($sql->num_rows>0){
		$_SESSION[admin]="yes";
		header('Location : localhost:81\bilshari\admin');
	}
	else{
		echo 'admin not found';
	}

?>