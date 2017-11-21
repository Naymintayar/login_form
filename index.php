<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo_photo">
				<h1>Login Learning Center</h1>
			</div>
			<div class="menu">
				<div class="menu_up">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Computer</a></li>
						<li><a href="#">Mobile</a></li>
					</ul>
				</div>
				<div class="menu_down">
					<ul>
						<li><a href="index.php">Learning</a></li>
						<li><a href="registaration_form.php">Registar</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="contant">
			<div class="left_menu">
				
			</div>
			<div class="right_login">
				<h1>Welcome Learning Center</h1>
				<div class="login_body">

				<!-- @@@@@@@@@@@@@@@@@@@@@ -->
				<!-- @@@@@ Login Area @@@@ -->
				<!-- @@@@@@@@@@@@@@@@@@@@@ -->
					<form action="db-connect/login_connector.php" method="POST">
						<div class="profile_pic">
							<img src="resources/login_profile.PNG" width="100px" height="100px;">
						</div>
						<div class="login_row">
							Username:<br><br>
							Password:
						</div>
						<div class="login_col">
							<input type="text" name="user" placeholder="<?php if($_SESSION['error_uname']){print @$_SESSION['error_uname']; $_SESSION['error_uname']='';} ?>"><br><br><br>
							<input type="password" name="passw" placeholder="<?php if($_SESSION['error_pass']){print @$_SESSION['error_pass']; $_SESSION['error_pass']='';} ?>">
						</div>
						<div class="login_button">
							<input type="reset" name="reset">
							<a href="registaration_form.php"><input type="button" name="registar" value="Registar"></a>
							<input type="submit" name="submit" value="Login">
						</div>
					</form>
					<h4><a href="#">Forgot Password?</a></h4>
				<!-- @@@@@@@@@@@@@@@@@@@@@ -->
				<!-- @@@@@ Login Area @@@@ -->
				<!-- @@@@@@@@@@@@@@@@@@@@@ -->

				</div>
			</div>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>