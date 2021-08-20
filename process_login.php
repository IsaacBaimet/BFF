<?php
session_start();
require("connect.php");

$Email=$_POST["email_address"];
$Password=$_POST["password"];

$sql="SELECT *from clients where Email=? AND Password=?";


$stmt=$conn->prepare($sql);
$stmt->bind_param("ss",$Email,$Password);

$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

session_regenerate_id();
$_SESSION['username']=$row['First_name'];
$_SESSION['role']=$row['User_Type'];

session_write_close();

if ($result->num_rows==1 && $_SESSION['role']=="client") 
	{
		header("location: BFF2.php");
	}
	else if ($result->num_rows==1 && $_SESSION['role']=="admin") 
	{
		header("location:admin.php");
	}
	else
	{
		echo "<script>alert('Username or Password is Incorrect!')</script>";
                echo"<script>window.location='login.php'</script>";
	}
?>