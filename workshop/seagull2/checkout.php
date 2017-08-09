<div class="content-warper">
	<?php
		include 'side_bar.php';
	?>
	<div class="cart_item">

		<?php
			
			//include 'operation.php';
			
			$checkObj = new purchase();
			
			$checkObj->getCheckOutItem();
			
		?>
		

	</div>
	<div class="calculation">
		<table style="width:100%">
			  <tr>
			    <td colspan="2">Total Number Of Item</td>
			    <td><?php echo $_SESSION[total_item]; ?></td>
			  </tr>

			  <tr>
			    <td colspan="2">VAT(15%)</td>
			    <td>
			    	<?php
			    		$vat =  $_SESSION[total_cost]*15;
			    		$vat = $vat/100;
			    		echo $vat;
			    	?>
			    		
			    </td>
			  </tr>

			  <tr>
			    <td colspan="2" class="last_cost">Delivery Cost</td>
			    <td class="last_cost">100</td>
			  </tr>

			  <tr>
			    <td colspan="2" class="total_cost">Total</td>
			    <td class="total_cost"><?php echo $_SESSION[total_cost]+$vat+100; 
					$_SESSION[total_cost] = $_SESSION[total_cost]+$vat+100;
					
				?></td>
			  </tr>
		</table>
		<div class="order">
			<a href=".">BACK TO SHOPPING</a>
			<a href="?action=order">ORDER</a>
		</div>
	</div>
</div>

<?php
	include 'footer.php';
?>