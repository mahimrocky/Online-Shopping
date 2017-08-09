 $(document).ready(function(){


 	// remove item instantly
 // 	$('div.cart_item_box').click(function(){
	//    $(this).remove();
	// });
	//javascript function removeItem
	// remove item instantly
 

 	$('select.status').on('change', function() {
 		var string = this.value.split('_');

 		var status=string[0];
 		var orderId=string[1];

 		$.ajax({
				type: "GET",
				url: "../operation.php",
				data: "task=changeStatus&status="+status+"&orderId="+orderId,
				cache: false,
				async: false,
				success: function(result) {
					// alert(result);
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
		});
 	});

 	$('.cata_area select').on('change', function() {
		  var value = this.value;
		  
		  // $("#men").css("cssText", "display:none;");
		  // $("#women").css("cssText", "display:none;");
		  // $("#gift_item").css("cssText", "display:none;");
		  
		  // $("#"+value).css("cssText", "display:block;");
		  if(value=="men"){
		  	$("#men").remove();
		  	$("#women").remove();
		  	$("#gift_item").remove();
		  	$("#kids").remove();
		  	$(".sub_cata_area").append('<select name="sub_cata" id="men">'+
				  '<option value="t_shirt">T-Shirt</option>'+
				  '<option value="polo">Polo</option>'+
				  '<option value="pant">Pant</option>'+
				  '<option value="formal_dress">Formal Dress</option>'+
				  '<option value="coat">Coat</option>'+
				  '<option value="panjabi">Panjabi</option>'+
				'</select>');	
		  }
		  else if(value=="women"){
		  	$("#men").remove();
		  	$("#women").remove();
		  	$("#gift_item").remove();
		  	$("#kids").remove();
		  	$(".sub_cata_area").append('<select name="sub_cata" id="women">'+
				 ' <option value="sharee">Sharee</option>'+
				  '<option value="ladise_shirt">Ladise Shirt</option>'+
				 ' <option value="salwar_kameez">Salwar Kameez</option>'+
				 ' <option value="scarf">Scarf</option>'+
				'</select>');
		  }
		  else if(value=="kids"){
		  	$("#men").remove();
		  	$("#women").remove();
		  	$("#gift_item").remove();
		  	$("#kids").remove();
		  	$(".sub_cata_area").append('<select name="sub_cata" id="kids">'+
				 ' <option value="toys">Toys</option>'+
				  '<option value="cloths">Cloths</option>'+
				 ' <option value="baby_care">Baby Care</option>'+
				'</select>');
		  }
		  else if(value=="gift_item"){
		  	$("#men").remove();
		  	$("#women").remove();
		  	$("#gift_item").remove();
		  	$("#kids").remove();
		  		$(".sub_cata_area").append('<select name="sub_cata" id="gift_item">'+
				  '<option value="kids_item">Kids Item</option>'+
				  '<option value="soft_toys">Soft Toys</option>'+
				  '<option value="jewellery">Jewellery</option>'+
				  '<option value="makeup_kit">Makeup Kit</option>'+
				  '<option value="show_pieces">Show Pieces</option>'+
				'</select>');
		  }
		  
	});	

 });


 function addToCart(itemId){
 	
	 	$.ajax({
				type: "GET",
				url: "operation.php",
				data: "task=addCart&itemId="+itemId,
				cache: false,
				async: false,
				success: function(result) {
					if(result == 'Item already selected'){
						alert(result);	
					}
					else{
						if(result<10){
							$(".quantity span").text('0'+result);		
						}
						else{
							$(".quantity span").text(result);			
						}
						
					}
					// document.getElementById("num_of_item").innerHTML = "<span id='num_of_item'>100</span>";
					// document.getElementById("branch_map").innerHTML = result;

					
					
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
		});
 }


 function seeOrder(orderId){
 	

 	$.ajax({
				type: "GET",
				url: "../operation.php",
				data: "task=seeOrder&orderId="+orderId,
				cache: false,
				async: false,
				success: function(result) {
					document.getElementById("add_order").innerHTML = result;
					// document.getElementById("branch_map").innerHTML = result;

					
					
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
		});
 }



 function search(){
 	var string = document.getElementById("search").value;


 	$.ajax({
				type: "GET",
				url: "operation.php",
				data: "task=search&sString="+string,
				cache: false,
				async: false,
				success: function(result) {
					if(result=="" || result == null){
						document.getElementById("main_panel").innerHTML = "<h3>Nothing Found</h3>";	
					}
					else
					document.getElementById("main_panel").innerHTML = result;
					// document.getElementById("branch_map").innerHTML = result;

					
					
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
	});


 }


 function removeItem(itemId){
 	$.ajax({
				type: "GET",
				url: "operation.php",
				data: "task=itemRemove&itemId="+itemId,
				cache: false,
				async: false,
				success: function(result) {
					
					$('.quantity').load(document.URL +  ' .quantity');
					$('.content-warper').load(document.URL +  ' .content-warper');
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
	});
 }

 function deleteItem(itemId){
 	$.ajax({
				type: "GET",
				url: "operation.php",
				data: "task=itemDelete&itemId="+itemId,
				cache: false,
				async: false,
				success: function(result) {
					
					alert(result);
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
	});
 }