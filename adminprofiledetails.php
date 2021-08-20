<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "bff");
$name=$_SESSION['username'];
$result = mysqli_query($conn,"SELECT * FROM Clients WHERE First_name='$name' ");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	

	<div class="container">
    <div class="main-body">
    
         <br><br>

         <?php

$row = mysqli_fetch_array($result);
?>
    
          
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["First_name"]; ?>
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Second Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["Second_name"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $row["Email"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $row["Phone"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">User Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $row["User_Type"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["Password"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      
                       <a class="btn btn-info " href="Register.php?edit=<?php echo $row['User_ID'];?>" class="link-button" >Edit</a> 
                       <a class="btn btn-info " href="admin.php" class="link-button" >Back</a> 
                    </div>
                  </div>

                </div>
              </div>

               



            </div>
          </div>

        </div>
    </div>
   

</body>
</html>