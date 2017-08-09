
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
<script src="js/jquery.min.js"></script>
<?php

ERROR_REPORTING(E_ALL);
	include 'data_connection.php';

	
$sql = "select * from client where order_id = '$_SESSION[user]'";
$sql = $conn->query($sql);
if($sql->num_rows>0){
	
	while($row = $sql->fetch_assoc()){
		
		echo '
		
			<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row"  style="background-color: #223D62;">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
						
						<div class="logo">
							<span>SEAGULL</span>
						</div>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em style="color:white">Date: '.$row['date'].'</em>
                    </p>
					<p>
                        <em style="color:white">Payment: '.$row['payment_type'].'</em>
                    </p>
                    <p>';
					?>
					<?php if($row['payment_type']!="cash"){
						
						echo' <em style="color:white">Receipt #: '.$row['reference'].'</em> ';
					}else{
						echo ' <em style="color:white">Receipt #: '.$_SESSION['user'].'</em>';
					}
						
					echo '	 
						
						
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>';
					?>
					
					<?php
					$sql2 = "select item_id from cart where user = '$_SESSION[user]'";
					$sql2 = $conn->query($sql2);
					
					if($sql2->num_rows>0){
						while($row2 = $sql2->fetch_assoc()){
							
							getItem($row2['item_id']);
						}
					}?>
                        
						
                        <tr>
							<td> </td>
                            <td class="text-right"><h4><b>Total:</b></h4></td>
                            <td class="text-center text-danger"><h4><b><?php echo $row['cost']; ?> tk</b></h4></td>
                        </tr>
                    </tbody>
                </table>
				
				
				
                <input type="submit" class="btn btn-success btn-lg btn-block button" name="sub" value="Download"/>
				
				
                    
                </td>
            </div>
        </div>
    </div>
	<?php
		
	}
}

function getItem($id){
	include 'data_connection.php';
	$sql3 = "select name,price from item where id='$id'";
	$sql3 = $conn->query($sql3);
	$tk = 0;		
	if($sql3->num_rows>0){
		
		while($row3 = $sql3->fetch_assoc()){
			
			$tk += $row3['price'];
			echo '
			
			<tr>
                <td class="col-md-9"><em>'.$row3['name'].'</em></h4></td>
                <td class="col-md-1" style="text-align: center"> 1 </td>
                <td class="col-md-1 text-center">'.$row3['price'].' tk</td>
             </tr>
                        
			';
		}
		
		
	}
}
?>

<script>
					$(document).ready(function(){
						$('.button').click(function(){
							var clickBtnValue = $(this).val();
							var ajaxurl = 'bill_slip.php',
							data =  {'action': clickBtnValue};
							$.post(ajaxurl, data, function (response) {
								// Response div goes here.
								alert("action performed successfully");
							});
						});

					});
				</script>

<?php

	if (isset($_POST['action'])) {
		select();
}

function select() {
    $content = get_include_contents('/submit_order.php.php');

	require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
	$html2pdf = new HTML2PDF('P', 'A4', 'en');
	$html2pdf->WriteHTML($content);
	$html2pdf->Output('bill_slip.pdf');
}
?>


