<div class="container update">
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		
		<div class="cata_area">
			<select name="cata">
			  <option >SELECT CATAGORY</option>
			  <option value="men">Men</option>
			  <option value="women">Women</option>
			  <option value="kids">Kids</option>
			  <option value="gift_item">Gift Item</option>
			</select>
		</div>

		<div class="sub_cata_area">
			

			

			
		</div>

		<div class="image_area">
			<input type="file" name="pic" accept="image/*">
		</div>

		<div class="data_area">
			<input type="text" name="name" placeholder="Item Name">
			<input type="text" name="price" placeholder="Price">
			<input type="text" name="color" placeholder="Color">
			<input type="text" name="size" placeholder="Size">
		</div>
		<input type="submit" value="SUBMIT">
	</form>
</div>