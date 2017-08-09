<div class="content-warper">
	<?php
		session_start();
	 	include 'side_bar.php';

	 	if($_SESSION[total_item]>0){
	 		echo '
				<div class="user_data">
					<form action="submit_order.php" method="POST">
						<input type="text" name="name" placeholder="Customer Name"><br>
						<input type="text" name="phone" placeholder="Phone Number"><br>
						<input type="text" name="address" placeholder="Address"><br>
						<select name="payment" id="payment">
							<option value="cash">Cash on delivery</option>
							<option value="bkash">BKASH Payment</option>
							<option value="rocket">Rocket DBBL Payment</option>
						</select>
						<input id="reference" name="reference" hidden="hidden" value="" placeholder="reference"  />
						<input class="submit" type="submit" value="CONFIRM ORDER">
					</form>
				</div> 			
	 		';
	 	}

	 	else echo "<h3>No Item Selected</h3>";

	?>

	<script>
	
		$("#payment").change(function(){
			var item = $("#payment").val();
			
			if( item === "bkash" || item === "rocket"  ){
				$("#reference").show();
			}else{
				$("#reference").hide();
			}
		});
	
	</script>
	
</div>