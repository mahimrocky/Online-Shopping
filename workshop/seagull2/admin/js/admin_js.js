
 function seeOrder(){
 	var itemId = "afas";
 	$.ajax({
				type: "GET",
				url: "get_content.php",
				data: "task=addCart&itemId="+itemId,
				cache: false,
				async: false,
				success: function(result) {
					alert("afdsdadad");
				},
				error: function(result) {
					alert("some error occured, please try again later");
				}
		});
 	alert("asdadd");
 }