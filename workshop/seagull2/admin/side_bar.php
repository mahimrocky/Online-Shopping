<div class="admin_sidebar">
<?php
	include '../data_connection.php';

	error_reporting(0);
	$sql = "SELECT * from `client` WHERE `order_status`='WAITING' OR `order_status`='PENDING'";
	$sql= $conn->query($sql);

	if($sql->num_rows>0){
		while($row = $sql->fetch_assoc()){
			echo '
					<div class="every_order">
						<div class="clint_info">
							<span>'.$row[name].'</span><br>
							<span>Purchase: '.$row[cost].'</span><br>
							<span>Phone: '.$row[m_number].'</span><br>
							<span>Address: '.$row[address].'</span><br>
							
							<span>Payment Type: ';
							if( $row[payment_type] === 'bkash' ){
								echo 'Bkash</span><br><span>Reference: '.$row[reference];
							}else if( $row[payment_type] === 'rocket' ){
								echo 'Rocket DBBL</span><br><span>Reference: '.$row[reference];
							}else{
								echo 'Cash on delivery';
							}
							 echo '</span><br>';
		
							
						echo '<span>Date: '.$row[date].'</span>
						</div>
						<div class="order_status">
							<span>'.$row[order_status].'</span><br>
							<a href="#0" onclick="seeOrder(\''.$row[order_id].'\')">See Order</a>
							<select class="status" name="order_status">
								<option>Change Status</option>
								<option value="PENDING_'.$row[order_id].'">Pending</option>
								<option value="COMPLETE_'.$row[order_id].'">COMPLETE</option>
								<option value="CANCLE_'.$row[order_id].'">CANCLE</option>
							</select>
						</div>
					</div>			
			';
		}
	}
?>
	<!-- <div class="every_order">
		<div class="clint_info">
			<span>Name</span><br>
			<span>Purchase: 957232</span><br>
			<span>Phone: 01739995117</span><br>
			<span>Address: Dhanmondi, Jigatola</span><br>
			<span>Date: 17/06/2016</span>
		</div>
		<div class="order_status">
			<span>STATUS</span><br>
			<a href="#0" onclick="seeOrder">See Order</a>
			<a href="#0" onclick="orderCancle()">Cancle</a>
		</div>
	 	 	--> 
					
</div>