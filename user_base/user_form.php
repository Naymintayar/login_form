<?php 
	// include('../functions/settting.php');
	// include('../db-connect/login_connector.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/user_form_design.css">
</head>
<body>
	<div class="container">
		<div class="header">
			
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Web Lessons</a></li>
				<li><a href="#">Computer Lessons</a></li>
				<li><a href="#">Mobile Lessons</a></li>
				<li><a href="#">Tutioal Video</a></li>
			</ul>
		</div>
		<div class="contant">
			<div class="profile_info">
				<div class="info">
					<form action="../db-connect/login_connector.php" method="POST">
						<h2>Profile</h2>
						Name.............................:<br>
						<?php $_GET['nm()']; ?>
						<input type="button" name="edit" value="Edit"><br>


						Username.............................:<br>
						<?php u_name(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Password.............................:<br>
						<?php p_word(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Email Address.............................:<br>
						<?php e_mail(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Date Of Birth.............................:<br>
						<?php b_day(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Gender.............................:<br>
						<?php g_der(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Mobile Number.............................:<br>
						<?php p_hone(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Country.............................:<br>
						<?php c_try(); ?>
						<input type="button" name="edit" value="Edit"><br>


						Address.............................:<br>
						<?php ad_drs(); ?>
						<input type="button" name="edit" value="Edit"><br>


						<a href="#"><input type="button" name="cancle" value="Cancle"></a>
						<input type="submit" name="save" value="Save">
					</form>
				</div>
			</div>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>