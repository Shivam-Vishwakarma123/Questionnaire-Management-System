<?php 
include('top.php');

if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['q_id']) && $_GET['q_id']>0){
	$type=get_safe_value($_GET['type']);
	$q_id=get_safe_value($_GET['q_id']);
	if($type=='delete'){
		mysqli_query($con,"delete from a_question where q_id='$q_id'");
		redirect('question.php');
	}
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update a_question set status='$status' where q_id='$q_id'");
		redirect('question.php');
	}

}

$sql="select * from a_question order by q_id asc";
$res=mysqli_query($con,$sql);


// $sql1="select * from a_option order by q_id asc";
// $res1=mysqli_query($con,$sql1);


?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Question Master</h1>
			  <a href="manage_question.php" class="add_link">Add New Question</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="20%">Question No. #</th>
                            <th width="45%">Questions</th>
                            <!-- <th width="20%">Correct Choice</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['question']?></td>
							<!-- <td><?php echo $row['correct_choice']?></td> -->
                           
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
<?php include('footer.php');?>