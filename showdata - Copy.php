<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM clients");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> BFF</title>
 <link rel="stylesheet" type="text/css" href="showdata.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <h2>User Data</h2>
  <div class="table-wrapper">
  <table class="fl-table">
  <thead>
  <tr>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone</th>
    <th>User Type</th>
    <th colspan="2">Action</th>
  </tr>
</thead>  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["First_name"]; ?></td>
    <td><?php echo $row["Second_name"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["Password"]; ?></td>
    <td><?php echo $row["Phone"]; ?></td>
    <td><?php echo $row["User_Type"];?></td>
    <td>
      <a href="client.php?edit=<?php echo $row['User_ID'];?>" class="link-button" >Edit</a> 
      <a href="connect.php?delete=<?php echo $row['User_ID'];?>" class="link-button">Delete</a>
</td>
    
</tr>
<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}

?>
 </body>
</html>