<?php include('top.php');?>

<div class="card text-center">
  <div class="card-header">
    Welcome to Questionnary
  </div>
  <div class="card-body">
    <h5 class="card-title">
        <div class="alert alert-success" role="alert" style="margin: 5px;">
            Hello <strong><?php echo $_SESSION['ADMIN_USER']?></strong>
        </div>
    </h5>
    <h5 class="card-title">
        <h4 style="margin: 25px;">Instruction</h4>
        <p style="margin: 35px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere accusamus ad deserunt vero nulla cum nisi expedita nam ducimus. Provident, adipisci porro magnam saepe delectus neque ea, consectetur nostrum nulla expedita ad perspiciatis excepturi quam, hic rem ex totam veritatis accusantium tenetur praesentium officia inventore. Voluptas autem qui suscipit quaerat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere accusamus ad deserunt vero nulla cum nisi expedita nam ducimus. Provident, adipisci porro magnam saepe delectus neque ea, consectetur nostrum nulla expedita ad perspiciatis excepturi quam, hic rem ex totam veritatis accusantium tenetur praesentium officia inventore. Voluptas autem qui suscipit quaerat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere accusamus ad deserunt vero nulla cum nisi expedita nam ducimus. Provident, adipisci porro magnam saepe delectus neque ea, consectetur nostrum nulla expedita ad perspiciatis excepturi quam.</p>
    </h5>
    
    
    
  </div>
  <div class="card-footer text-muted">
  <a href="logout.php" class="btn btn-outline-success">Logout</a>
  </div>
</div>

<?php include('footer.php');?>