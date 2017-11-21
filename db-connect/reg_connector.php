<?php 
	session_start();
	$first=$_POST['fname'];
	$last= $_POST['lname'];
	$uname= $_POST['username'];
	$pass = $_POST['password'];
	$email =$_POST['email'];
	$day = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$gender = $_POST['checkbox'];
	$mobile = $_POST['phnumber'];
	$pass = MD5($pass);

	$host = 'localhost';
	$user = 'root';
	$pas = '';
	$dbname = 'registar';
	$link = mysqli_connect($host,$user,$pas,$dbname);

	$state = true;

	if($first == null || $first == '')
	{
		$state = false;
		$_SESSION['error'] = 'First Name is required !';
	}
	elseif($last == null || $last == '')
	{
		$state = false;
		$_SESSION['error'] = 'Last Name is required !';
	}
	elseif($uname == null || $uname == '')
	{
		$state = false;
		$_SESSION['error'] = 'Username is required !';
	}
	elseif($pass == null || $pass == '')
	{
		$state = false;
		$_SESSION['error'] = 'Password is required !';
	}
	elseif($email == null || $email == '')
	{
		$state = false;
		$_SESSION['error'] = 'Email is required !';
	}
	elseif($day == null || $day == '')
	{
		$state = false;
		$_SESSION['error'] = 'Day is required !';
	}
	elseif($month == null || $month == '')
	{
		$state = false;
		$_SESSION['error'] = 'Month is required !';
	}
	elseif($year == null || $year == '')
	{
		$state = false;
		$_SESSION['error'] = 'Year is required !';
	}
	elseif($gender == null || $gender == '')
	{
		$state = false;
		$_SESSION['error'] = 'Gender is required !';
	}
	elseif($mobile == null || $mobile == '')
	{
		$state = false;
		$_SESSION['error'] = 'Mobile Number is required !';
	}


	if($state == false)
	{
		header('location:../registaration_form.php');
		exit();
	}
	else
	{
		$conpass = $_POST['conpassword'];
		$conpass = MD5($conpass);
		if($conpass != $pass){
			$_SESSION['error'] = 'Password do not match !';
			header('location:../registaration_form.php');
			exit();
		}
		else{

			$selt = "SELECT * FROM student_list WHERE email = '".$email."'";
			$query = mysqli_query($link,$selt);
			$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
			if(count($result) > 0){
				$_SESSION['error'] = 'Your email is registered !';
				header('location:../registaration_form.php');
				exit();
			}
			else
			{	
				$reg = "INSERT INTO student_list(id,First,Second,username,password,email,birthday,gender,mobile) VALUES(' ','$first','$last','$uname','$pass','$email','$year-$month-$day','$gender','$mobile')";
					$test = mysqli_query($link,$reg);
					if (!$test) {
						die(mysqli_error($link));
					}else{
						print 'Success !!!';
					}
			}
		}
	}
?>