<?php
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
$name=get_safe_value($_POST['name']);
$email=get_safe_value($_POST['email']);
$password=get_safe_value($_POST['password']);
$new_password=password_hash($password,CRYPT_BLOWFISH);
$mobile=get_safe_value($_POST['mobile']);
$type=get_safe_value($_POST['type']);
$added_on=date('Y-m-d h:i:s');


if($type=='register'){
	$check=mysqli_num_rows(mysqli_query($con,"select * from a_user where email='$email'"));
	if($check>0){
		$arr=array('status'=>'error','msg'=>'Email id already registered','field'=>'email_error');
	}else{
		mysqli_query($con,"insert into a_user(name,email,password,mobile,status,added_on) values('$name','$email','$new_password','$mobile','1','$added_on')");
		$arr=array('status'=>'success','msg'=>'Thank you for register, please Log-in','field'=>'form_msg');
	}
	echo json_encode($arr);
}




?>