<?php 
	session_start();
	$uname = $_POST['user'];
	$pass = $_POST['passw'];
	$pass = MD5($pass);

	$host = 'localhost';
	$user = 'root';
	$pas = '';
	$dbname = 'registar';
	$link = mysqli_connect($host,$user,$pas,$dbname);


	$state = true;

	if($uname == NULL || $uname == '')
	{
		$state = false;
		$_SESSION['error_uname'] = "Fill Username";
	}
	elseif($pass == NULL || $pass == '')
	{
		$state = false;
		$_SESSION['error_pass'] = "Fill Password";
	}

	if($state == false){
		header('location:../index.php');
		exit();
	}

	// function singin(){
		$checkstate = "SELECT * FROM student_list WHERE username = '$uname' AND password = '$pass' ";

		$query = mysqli_query($link,$checkstate);

		$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

		foreach ($result as $val) {			
			if($uname == $val['username'] && $pass == $val['password']){
				
				header('location:../user_base/user_form.php');
				
				function nm(){
					echo $val['First'].$val['Second'];
				}
				function u_name(){
					echo $val['username'];
				}
				function p_word(){
					echo $val['password'];
				}
				function e_mail(){
					echo $val['email'];
				}
				function b_day(){
					echo $val['birthday'];
				}
				function g_der(){
					echo $val['gender'];
				}
				function p_hone(){
					echo $val['mobile'];
				}
				function c_try(){
					echo $val['Country'];
				}
				function ad_drs(){
					echo $val['address'];
				}
				

			}
			else
			{
				print "Something";
			}
		}
	// if(isset($_POST['submit'])){
	// 	signin();
	// }
?>
