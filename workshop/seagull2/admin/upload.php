<?php
	//if(isset($_POST['cata']) && isset($_POST['sub_cata'])){
	if(isset($_POST['cata']) ){
		uploadData();
	}else{
		echo 'whats wrong';
		exit();
	}

	function uploadData(){
		include '../data_connection.php';
		$sql = "INSERT INTO `item`(`cata`, `sub_cata`, `name`, `price`, `color`, `size`) 
		VALUES ('$_POST[cata]', '$_POST[sub_cata]', '$_POST[name]', '$_POST[price]', '$_POST[color]', '$_POST[size]')";

		if($conn->query($sql)){
			$last_id = $conn->insert_id;

			uploadImage($last_id);
		}
		else{
		}

		header('Location: ./?option=update');

	}


	function uploadImage($last_id){
		include "../data_connection.php";
		
		$target_dir = "../image/item_image/";
		if(!empty($_FILES['pic'])){

			$file = $_FILES['pic'];	
			$image_name = $file['name'];

			$file_ext = explode('.', $image_name);
			$file_ext = strtolower(end($file_ext));
			$target_file = $target_dir.$last_id.$_POST[cata].".".$file_ext;
			$file_name = $last_id.$_POST[cata].".".$file_ext;
			
			if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)){

				// $file_name_url = str_replace("../","",$target_file);
				$sql = "UPDATE `item` set `image`='$file_name' WHERE id = '$last_id'";

				if ($conn->query($sql) === TRUE) {
				} 
				else {
				}

			} 
	        
		}
	}
?>