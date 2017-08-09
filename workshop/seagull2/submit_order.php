<?php
ERROR_REPORTING(E_ALL);
	session_start();
	include 'data_connection.php';
	

	$payment_type = $_POST["payment"];
	$reference = $_POST["reference"];
	
	// editing start by rocky 
	
	function generateRandomString($length = 5) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	
	if($payment_type=='cash'){
		$s = generateRandomString();
		$n = rand(100,1000);
		$reference .= $s."-".$n;
	}
	
	//end

	$insertOrder = "INSERT INTO `client`(`name`, `m_number`, `address`, `cost`, `order_id`, `order_status`, `date`, `payment_type`, `reference`) 
	VALUES('$_POST[name]', '$_POST[phone]', '$_POST[address]', '$_SESSION[total_cost]', '$_SESSION[user]', 'WAITING', now(), '$payment_type', '$reference')";

	if($conn->query($insertOrder) or die(mysqli_error($conn))){
		 echo "Order successfully submitted
		<a href=\"http://localhost/workshop/seagull2\">Go back To main Site<a>
		 ";
		 include 'bill_slip.php';
		// $_SESSION['success'] = "Order successfully submitted";
	}
	else{
		 echo "FAILED why";
	}
	session_destroy();

	//header('Location: http://localhost/seagull');
	exit();
?>