<div class="container update">
	
	<?php 
	
				include 'data_connection.php';
				
				$sql = "SELECT * FROM `contact`";
				$sql = $conn->query($sql);
				
				if($sql->num_rows>0){
					echo "<h4 style=\"margin-bottom: 10px;\">Contacts</h4><table><thead><tr><th>Subject</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Action</th>
					</tr></thead><tbody>";
					while($row = $sql->fetch_assoc()){
 						echo '<tr><td>'.$row["subject"].'</td>
						<td>'.$row["name"].'</td>
						<td>'.$row["email"].'</td>
						
						<td><a href="?delete_contact='.$row["id"].'">Delete</a></td>
						</tr>';
					}
					echo "</tbody></table><br><br>";
				}
	
	?>
	

	
</div>