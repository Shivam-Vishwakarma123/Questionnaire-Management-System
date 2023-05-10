<?php 
include('top.php');
$msg="";
$name="";
$email="";
$mobile="";
$password="";
$score_card="";
$status="";
$id="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from a_user where id='$id'"));
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
  $password=password_hash($password,CRYPT_BLOWFISH);
	$mobile=$row['mobile'];
	$score_card=$row['score_card'];
	$status=$row['status'];
}

if(isset($_POST['submit'])){
	$name=get_safe_value($_POST['name']);
	$email=get_safe_value($_POST['email']);
	$password=get_safe_value($_POST['password']);
  $password=password_hash($password,CRYPT_BLOWFISH);
	$mobile=get_safe_value($_POST['mobile']);
	$score_card=get_safe_value($_POST['score_card']);
	$status=get_safe_value($_POST['status']);
	$added_on=date('Y-m-d h:i:s');
	
  
	if($id==''){
		$sql="select * from a_user where name='$name'";
	}else{
		$sql="select * from a_user where name='$name' and id!='$id'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Name already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into a_user(name,email,password,mobile,score_card,status,added_on) values('$name','$email','$password','$mobile','$score_card','$status','$added_on')");
		}else{
			mysqli_query($con,"update a_user set name='$name', email='$email', password='$password', mobile='$mobile', score_card='$score_card', status='$status', added_on='$added_on' where id='$id'");
		}
		
		redirect('user_module.php');
	}
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Add New Users</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" required value="<?php echo $name?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>E-mail</label>
                      <input type="textbox" class="form-control" placeholder="E-mail" name="email" required  value="<?php echo $email?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Mobile Number</label>
                      <input type="textbox" class="form-control" placeholder="Mobile Number" required name="mobile"  value="<?php echo $mobile?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Password</label>
                      <input type="textbox" class="form-control" placeholder="Password" name="password" required  value="<?php echo $password?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Score Card</label>
                      <input type="textbox" class="form-control" placeholder="Score Card" name="score_card"  value="<?php echo $score_card?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Status</label>
                      <input type="textbox" class="form-control" placeholder="Status 1(Active) or 0(Dective)" required name="status"  value="<?php echo $status?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>