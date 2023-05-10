<?php
// session_start();
include ("header.php");

?>

<div class="card text-center" style="margin:65px;">
  <div class="card-header">
  Questionnaire Management System
  </div>
  <div class="card-body">
    <div class="alert alert-success" role="alert">
      <a>Welcome <a><b><?php echo $_SESSION['FOOD_USER_NAME'];?></b></a> ready to get your Score Card</a>
    </div>

    <?php
    $userid=$_SESSION['FOOD_USER_ID'];
    $sql_find_score = mysqli_query($con,"select score_card from a_user where id=$userid;");
		$row_score=mysqli_fetch_assoc($sql_find_score);
		 $final_score_card=$row_score['score_card'];
        // echo $final_score_card;
    ?>


    <div class="alert alert-light" role="alert">
      Your <strong>Score</strong> is :   <?php echo $final_score_card; ?>
    </div>

    <?php unset($_SESSION['score']); ?>

    <a href="dashboard.php" class="btn btn-primary">Go to Home</a>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>

<?php
include("footer.php");
?>