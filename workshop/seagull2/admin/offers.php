<div class="container update">
	
	<?php 
	
				include 'data_connection.php';
				
				$sql = "SELECT * FROM `offers`";
				$sql = $conn->query($sql);
				
				if($sql->num_rows>0){
					echo "<h4 style=\"margin-bottom: 10px;\">Current Offers</h4><table><thead><tr><th>Offer</th><th>Action</th></tr></thead><tbody>";
					while($row = $sql->fetch_assoc()){
 						echo '<tr><td>'.$row["offer"].'</td>
						
						<td><a href="?delete_offer='.$row["id"].'">Delete</a></td>
						</tr>';
					}
					echo "</tbody></table><br><br>";
				}
	
	?>
	
	
	<form method="post" action="set_offer.php">
		<div class="data_area">
			<h4 style="margin-bottom: 10px;">Add offer</h4>
			<input type="text" name="offer" placeholder="Offer details"><br><br>
			<input type="text" name="start" placeholder="Start date"><br><br>
			<input type="text" name="end" placeholder="End date"><br><br>
			<input type="submit" value="Submit" >
		</div>
	</form>
	
</div>