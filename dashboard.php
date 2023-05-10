<?php
include ("header.php");
$query = "SELECT * FROM a_question";
$total_questions = mysqli_num_rows(mysqli_query($con,$query));
?>

<div class="card text-center" style="margin:65px;">
  <div class="card-header">
  Questionnaire Management System
  </div>
  <div class="card-body">

    <div class="alert alert-primary" role="alert">
        <strong>There are some multiple choise questions to test your skill.</strong>
    </div>

    <div class="alert alert-light" role="alert">
        <strong>Number of Questions: </strong> <?php echo $total_questions; ?>
    </div>
    <div class="alert alert-light" role="alert">
        <strong>Type of Questions: </strong> MCQ
    </div>
    <div class="alert alert-light" role="alert">
        <strong>Estimated Time: </strong> <?php echo $total_questions*1.5;?> Min
    </div>

    <?php
		if(!isset($_SESSION['FOOD_USER_NAME'])){
	?>

    <div class="alert alert-light" role="alert">
        <strong>Please Sign-in to Start the Quiz </strong>
        <br>
        <a href="login_register.php" class="btn btn-primary" style="margin-top: 25px;">Sign In</a>
    </div>
    
    <?php
	}else{ ?>
        <a href="question.php?n=1" class="btn btn-outline-primary">Start Quize</a>
    <?php   }
	?>

  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>

<?php
include("footer.php");
?>