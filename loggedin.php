<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$user_name=get_safe_value($_POST['user_name']);
	$password=get_safe_value($_POST['user_password']);
	// echo "hii";
	$res=mysqli_query($con,"select * from a_user where name='$user_name'");
	$check=mysqli_num_rows($res);
	if($check>0){	
		// echo "hii";
		$row=mysqli_fetch_assoc($res);
		$dbpassword=$row['password'];
		// echo $dbpassword;
		$status=$row['status'];
		if($status==1){
			if(password_verify($password,$dbpassword)){
				$_SESSION['FOOD_USER_ID']=$row['id'];
				$_SESSION['FOOD_USER_NAME']=$row['name'];
				// echo "hii10";
				// echo $_SESSION['FOOD_USER_NAME'];
				redirect('dashboard.php');
			}
		}else{
			$_SESSION['login_msg1']="You are disabled by you administrator, Please contact to your Admin";
			redirect('login_register.php');
		}
	}else{
		$_SESSION['login_msg2']="Please enter correct login details";
		redirect('login_register.php');
	}
}


?>