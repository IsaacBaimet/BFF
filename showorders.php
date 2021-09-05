<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM orders");
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
  <h2>Orders</h2>
  <div class="table-wrapper">
  <table class="fl-table">
  <thead>
  <tr>
    <th>Customer</th>
    <th>Order Id</th>
    <th>Product Name</th>
    <th>Product price</th>
    <th>Total</th>
    
  </tr>
</thead>  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Customer"]; ?></td>
    <td><?php echo $row["OrderID"]; ?></td>
    <td><?php echo $row["ProductName"]; ?></td>
    <td><?php echo $row["ProductPrice"]; ?></td>
    <td><?php echo $row["Total"]; ?></td>
    
</tr>

<?php
$i++;
}
?>
</table>
<br><br>
<a  href="admin.php" class="link-button" >Back</a> 
</div>
 <?php
}
else{
    echo "No result found";
}

?>
 </body>
</html>