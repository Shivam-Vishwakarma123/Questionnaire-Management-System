<?php include ("database.inc.php"); ?>
<?php 
	session_start();
	//For first question
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
 if($_POST){
 	$query = "SELECT * FROM a_question";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));
	
 	$number = $_POST['number'];
	
 	$selected_choice = $_POST['choice'];
	
	//next question number
 	$next = $number+1;
	
	//Determine the correct choice for current question
 	$query = "SELECT * FROM a_option WHERE q_id = $number AND is_correct = 1";
 	 $result = mysqli_query($con,$query);
 	 $row = mysqli_fetch_assoc($result);

 	 $correct_choice = $row['id'];
	
	//Increase the score if selected cohice is correct
 	 if($selected_choice == $correct_choice){
 	 	$_SESSION['score']++;
 	 }
		//Redirect to next question or final score page. 
 	 if($number == $total_questions){

		
    	$userid=$_SESSION['FOOD_USER_ID'];
    	$userfinalscore=$_SESSION['score'];
    
      	$sql_score_update = mysqli_query($con,"UPDATE a_user SET score_card = $userfinalscore WHERE id=$userid;");
      	
    
 	 	header("LOCATION: final_score.php");
 	 }else{
 	 	header("LOCATION: question.php?n=". $next);
 	 }

 }



?>