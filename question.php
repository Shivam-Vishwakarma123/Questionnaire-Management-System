<?php
  include ("header.php");
	$number = $_GET['n'];

	$query = "SELECT * FROM a_question WHERE q_id = $number";

	// Get the question
	$result = mysqli_query($con,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM a_option WHERE q_id = $number";
	$choices = mysqli_query($con,$query);
	// Get Total questions
	$query = "SELECT * FROM a_question";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));

?>



<div class="card text-center" style="margin:65px;">
  <div class="card-header">
  	Questionnaire Management System
  </div>
  <br>
  <div class="card-body">
    
  
  <div class="container" style="text-align: left;">
		<div class="alert alert-success" role="alert" style="text-align: center;">
			<strong>
				Question <?php echo $number; ?> of <?php echo $total_questions; ?> 
			</strong>
		</div>
				
		<p class="question"><?php echo $question['question']; ?> </p>

			
		<form method="POST" action="process.php">
			
			<?php while($row=mysqli_fetch_assoc($choices)){ ?>
			<input type="radio" style="width: 15px;margin: 7px;height: 10px;" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['q_option']; ?><br><?php } ?>
					
			<input type="hidden" name="number" value="<?php echo $number; ?>">
			<button type="submit" class="btn btn-outline-primary" name="submit" value="Submit" style="margin: 20px;">Submit</button>
		</form>
  </div>

  <div class="card-footer text-muted">  </div>
</div>

<?php
include("footer.php");
?>