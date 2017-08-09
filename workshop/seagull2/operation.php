<?php
	session_start();
	error_reporting(0);
	if($_GET[task]=="addCart"){
		$objItem= new data();
		$objItem->addItem(); 
	}
	else if($_GET[task]=="seeOrder"){
		$objItem= new data();
		$objItem->getOrder();
	}
	else if($_GET[task]=="changeStatus")
	{
		$changeOb= new purchase();
		$changeOb->changeStatus();
	}
	else if($_GET[task]=="search"){
		$objItem= new data();
		$objItem->search();
	}
	else if($_GET[task]=="itemRemove")
	{
		$changeOb= new purchase();
		$changeOb->removeItem();
	}
	else if($_GET[task]=="itemDelete")
	{
		$delete= new data();
		$delete->deleteItem();
	}

	class data{

		function search(){
			$newOb = new data();
			$newOb->getContent("", "", $_GET[sString]);
		}


		function deleteItem(){
			include 'data_connection.php';
			$sql = "DELETE FROM `item` WHERE `id`='$_GET[itemId]'";
			if($conn->query($sql)){
				echo "Delete Successfull";
			}
			else{
				echo "Somehow Delete is not Successfull";	
			}
		}

		function getOrder(){
			include 'data_connection.php';
			$sql = "SELECT cart.item_id, cart.user, item.name, item.image, item.price, item.color, item.size FROM cart
					LEFT JOIN item ON cart.item_id = item.id WHERE cart.user = '$_GET[orderId]'";
			$sql= $conn->query($sql);

				if($sql->num_rows>0){
					while($row = $sql->fetch_assoc()){
						echo '
						<div class="content_box">
						<script type="text/javascript" src="../js/self.js"></script>
						<div class="add">
							<button onclick="changeStatus()">Change Status</button>
						</div>
							<div class="img_box">
								<img src="../image/item_image/'.$row[image].'">
							</div>
							
							<div class="data_box">
								
								<span class="name">'.$row[name].'</span>
								<span class="price">'.$row[price].'</span>
								<span class="color">'.$row[color].'</span>
								<span class="size">'.$row[size].'</span>
							</div>
						</div>
						';
					}
				}
		}

		function getContent($cata, $sub_cata, $string){
			include 'data_connection.php';
			

			if(isset($string)){
				$string = "%".$string."%";
				$sql = "SELECT * from `item` WHERE `name` LIKE '$string'";
				
			}
			else if(isset($sub_cata)){	
				$sql = "SELECT * from `item` WHERE `sub_cata`='$sub_cata' AND `cata`='$cata'";
			}
			else if(isset($cata)){	
				$sql = "SELECT * from `item` WHERE `cata`='$cata'";
			}

			else{	
				$sql = "SELECT * from `item`";
			}

				$sql= $conn->query($sql);

				if($sql->num_rows>0){
					while($row = $sql->fetch_assoc()){

						if(isset($_SESSION[admin])){
							$overflow = '
								<div class="add">
										<button onclick="deleteItem(\''.$row[id].'\')">DELETE</button>
								</div>
							';
						}
						else{
							$overflow = '
								<div class="add">
										<button onclick="addToCart(\''.$row[id].'\')">QUICK PURCHASE</button>
								</div>
							';	
						}


						echo '
						<div class="content_box">
							'.$overflow.'
							<div class="img_box">
								<img src="image/item_image/'.$row[image].'">
							</div>
							
							<div class="data_box">
								
								<span class="name">'.$row[name].'</span>
								<span class="price">'.$row[price].'</span>
								<span class="color">'.$row[color].'</span>
								<span class="size">'.$row[size].'</span>
							</div>
						</div>
						';
					}
				}

		}


		function userSessionSet(){
			date_default_timezone_set('Asia/Dhaka'); // CDT

			$info = getdate();
			
			// $day  =  $info['weekday'];

			$year = $info['year'];
			$month = $info['mon'];
			$date = $info['mday'];
			$hour = $info['hours'];
			$min = $info['minutes'];
			$sec = $info['seconds'];
			// $mili = $info['millisecond'];
			$mili =  round(microtime(true) * 1000);

			$_SESSION[user] = $year.$month.$date.$hour.$min.$sec.$mili;
		}

		function addItem(){
			include 'data_connection.php';
			
			// $check = "SELECT item_id, user FROM cart WHERE item_id = '$_GET[itemId]' AND user = '$_SESSION[user]'";
			// $check = $conn->query($check);

			// if($check->num_rows>0){
			// 	echo "Item already selected";
			// }
			// else{

					$sql = "INSERT `cart`(`item_id`,`user`) VALUES('$_GET[itemId]', '$_SESSION[user]')";
					if($conn->query($sql)){
							$getNumber = "SELECT COUNT(user) AS total FROM `cart` WHERE `user`='$_SESSION[user]';";

							$result = $conn->query($getNumber);

							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									$_SESSION[total_item] = $row[total];
									echo $_SESSION[total_item];
								}
							}
					}
					else{
						echo "not Inserted";
					}	
			// }



			
		}

	}


	class purchase{

		function removeItem(){
			include 'data_connection.php';

			$sql = "DELETE FROM `cart` WHERE item_id = '$_GET[itemId]' AND user = '$_SESSION[user]'";

			if($conn->query($sql)){
				echo "removed";
					$getNumber = "SELECT COUNT(user) AS total FROM `cart` WHERE `user`='$_SESSION[user]';";

					$result = $conn->query($getNumber);

					if($result->num_rows>0){
						while($row=$result->fetch_assoc()){
							$_SESSION[total_item] = $row[total];
						}
					}
			}
			else{
				echo 'not removed';
			}
		}

		function getCheckOutItem(){
				include 'data_connection.php';
					$getCheck = "SELECT item.name, item.image, item.price, cart.item_id, cart.user 
								FROM item LEFT JOIN cart ON item.id = cart.item_id WHERE cart.user='$_SESSION[user]';";

					$result = $conn->query($getCheck);
					$total_cost = 0;
					if($result->num_rows>0){
						while($row=$result->fetch_assoc()){
							$total_cost = $total_cost+$row[price];
							// echo '
							// <div class="cart_item_box">
							// 	<div class="cart_item_boxm_img">
							// 		<img src="image/item_image/'.$row[image].'">
							// 	</div>

							// 	<div class="cart_item_data">
							// 		<span class="cart_item_name">'.$row[name].'</span>	
							// 		<span class="cart_item_name">'.$row[price].'</span>	
							// 		<span><a href="#0" onclick="removeItem()">Remove</a></span>
							// 	</div>

							// </div>
							// ';
						echo '
						<div class="cart_item_box">
							<table style="width:100%">
							  <tr>
							    <td>
							    		<div class="cart_item_boxm_img">
									 		<img src="image/item_image/'.$row[image].'">
									 	</div>
							    </td>

							    <td>
							    	<span class="cart_item_name">'.$row[name].'</span>
							    </td>

							    <td>
							    	<span class="cart_item_name">'.$row[price].'</span>	
							    </td>

							    <td>
							    	<span><a href="#0" onclick="removeItem(\''.$row[item_id].'\')">Remove</a></span>
							    </td>
							  </tr>
							</table>
						</div>
							';
						}
					}

					$_SESSION[total_cost] = $total_cost;
		}

		function changeStatus(){
			include 'data_connection.php';
			echo ">>".$_GET[status]."<";
			echo ">>==  ".$_GET[orderId]."  >==>";
			$sql = "UPDATE `client` SET `order_status`='$_GET[status]' WHERE `order_id`='$_GET[orderId]'";

			if($conn->query($sql)){
				echo "change";
			}
			else{
				echo "not changed";
			}
		}
	}
?>