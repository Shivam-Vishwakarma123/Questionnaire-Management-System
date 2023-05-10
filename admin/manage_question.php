<?php 
include('top.php');
$msg="";
$question="";
$correct_choice="";
$id="";


if(isset($_POST['submit'])){
	$q_id = $_POST['q_id'];
	$question = $_POST['question'];
	$correct_choice = $_POST['correct_choice'];
	$added_on=date('Y-m-d h:i:s');

	
	$choice = array();
	$choice[1] = get_safe_value($_POST['choice1']);
	$choice[2] = get_safe_value($_POST['choice2']);
	$choice[3] = get_safe_value($_POST['choice3']);
	$choice[4] = get_safe_value($_POST['choice4']);

 // First Query 

	$query = "INSERT INTO a_question (";
	$query .= "q_id, question, added_on )";
	$query .= "VALUES (";
	$query .= " '{$q_id}','{$question}','{$added_on}' ";
	$query .= ")";

	$result = mysqli_query($con,$query);
	
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
			


				//Second Query
				$query = "INSERT INTO a_option (";
				$query .= "q_id,is_correct,q_option)";
				$query .= " VALUES (";
				$query .=  "'{$q_id}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($con,$query);

				if($insert_row){
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);
					
				}

			}
		}
    
    redirect('question.php');
	}

	

}

		$query = "SELECT * FROM a_question";
		$questions = mysqli_query($con,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;


    
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Add New Question</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Question Number:</label>
                      <input type="text" class="form-control" name="q_id" required value="<?php echo $next;  ?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Question Text:</label>
                      <input type="textbox" class="form-control" placeholder="Enter the Question" required name="question">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Choice 1:</label>
                      <input type="textbox" class="form-control" name="choice1" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Choice 2:</label>
                      <input type="textbox" class="form-control" name="choice2" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Choice 3:</label>
                      <input type="textbox" class="form-control" name="choice3" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Choice 4:</label>
                      <input type="textbox" class="form-control" name="choice4" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Correct Choice</label>
                      <input type="textbox" class="form-control" name="correct_choice" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>