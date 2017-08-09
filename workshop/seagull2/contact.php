
	<div class="contact_panel">
		<div class="contact_box">

			<form action="send_mail.php" method="POST">
				<input class="subject" type="text" name="subject" placeholder="Massage Subject"><br>
				<textarea class="massage" type="text" name="massage" placeholder="Massage"></textarea><br>
				<input class="user_name" type="text" name="user_name" placeholder="Your Name">
				<input class="user_contact" type="text" name="user_contact" placeholder="Email/Mobile Number"><br>
				<input class="submit" type="submit" value="SUBMIT">
			</form>
			
		</div>
	</div>


	<?php
		include 'footer.php';
	?>
