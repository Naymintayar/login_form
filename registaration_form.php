<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registaration</title>
	<link rel="stylesheet" type="text/css" href="css/registar_form_design.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Welcome My Learning Center</h1>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Computer</a></li>
				<li><a href="#">Mobile</a></li>
				<li><a href="index.php">Learning</a></li>
				<li><a href="registaration_form.php">Registar</a></li>
			</ul>
		</div>
		<div class="contant">
			<div class="reg_body">
				<div class="beauty_left">
					<img src="resources/bt.gif" width="70px" height="90px">
					<img src="resources/bt.gif" width="70px" height="90px">
					<img src="resources/bt.gif" width="70px" height="90px">
					<?php  
						if($_SESSION['error']):
					?>
					<div style="color: red;"><?php print $_SESSION['error']; $_SESSION['error'] = ''; ?></div>
					<?php endif; ?>
				</div>


				<!-- ************************* -->
				<!-- ##### Registar Area ##### -->
				<!-- ************************* -->
				<div class="reg_form">
					<div class="reg_table">
						<form action="db-connect/reg_connector.php" method="POST">
							<h1>Fill all INPORTANT !</h1>
							<div class="what_form">
								<ul>
									<li>First Name</li>
									<li>Last Name</li>
									<li>Username</li>
									<li>Password</li>
									<li>Confirm Password</li>
									<li>Email Address</li>
									<li>Birthday</li>
									<li>Gender</li>
									<li>Mobile</li>
								</ul>
							</div>
							<div class="fill_form">
								<ul>
									<li><input type="text" name="fname" placeholder="First Name"></li>
									<li><input type="text" name="lname" placeholder="Last/Sir Name"></li>
									<li><input type="text" name="username" placeholder="ex@Mpl3"></li>
									<li><input type="password" name="password" placeholder="Password"></li>
									<li><input type="password" name="conpassword" placeholder="Type again Password"></li>
									<li><input type="text" name="email" placeholder="example@gmail.com"></li>
									<li>
										<select type="select" name="date">
											<?php 
												for ($x=1; $x < 32; $x++) { 
													print "<option>".$x."</option>";
												}
											?>
										</select>
										Day
										<select type="select" name="month">
											<?php  
												for ($y=1; $y < 13; $y++) { 
													print "<option>".$y."</option>";
												}
											?>
										</select>
										Month
										<select type="select" name="year">
											<?php  
												for ($z=1947; $z < 2016; $z++) { 
													print "<option>".$z."</option>";
												}
											?>
										</select>
										Year
									</li>
									<li>
										<input type="checkbox" name="checkbox" value="Male">:Male
										<input type="checkbox" name="checkbox" value="Female">:Female
										<input type="checkbox" name="checkbox" value="Other">:Other
									</li>
									<li>
										<input type="text" name="phnumber" placeholder="+9591234567">
									</li>
								</ul>
							</div>
							<a href="index.php"><input type="button" name="login" value="Login"></a>
							<input type="reset" name="reset" value="Reset">
							<input type="submit" name="submit" value="Signup">
						</form>
						<br>
						<marquee direction="left">Please fill all field need!!! If you already Registaried Click Login</marquee>
					</div>
				</div>
				<!-- ************************* -->
				<!-- ##### Registar Area ##### -->
				<!-- ************************* -->


				<div class="beauty_right">
					<img src="resources/bt.gif" width="70px" height="90px">
					<img src="resources/bt.gif" width="70px" height="90px">
					<img src="resources/bt.gif" width="70px" height="90px">
				</div>
			</div>
		</div>
	</div>
</body>
</html>