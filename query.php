<?php
require("connect.php");

$id=0;
$update=false;

$fname='';
$sname='';
$email='';
$phone='';
$password='';
$Usertype='';

if (isset($_POST["register"]))
{

$Firstname=$_POST['fname'];
$Secondname=$_POST['sname'];
$Email=$_POST['email_address'];
$Phone=$_POST['phone_number'];
$Password=$_POST['password'];
$Usertype=$_POST['user'];
//insert data
$sql_insert="INSERT INTO Clients(First_name,Second_name,Email,Password,Phone,User_Type)VALUES('$Firstname','$Secondname','$Email','$Password','$Phone','$Usertype')";


if($conn->query($sql_insert)===TRUE){
    echo "Inserted Successfully";
    header('location:showdata.php');
}else{
   echo "Error",$conn->error;
}

$sql_select="SELECT * FROM Clients";

$results=$conn->query($sql_select);
print_r($results);
}



if (isset($_POST["update"]))
{

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$email=$_POST['email_address'];
$phone=$_POST['phone_number'];
$password=$_POST['password'];
$Usertype=$_POST['user'];
//insert data
$sql_update="UPDATE Clients(First_name,Second_name,Email,Password,Phone,User_Type)VALUES('$fname','$sname','$email','$phone','$password','$Phone','$Usertype')";

if($conn->query($sql_update)===TRUE){
    echo "Inserted Successfully";
    header('location:showdata.php');
}else{
   echo "Error",$conn->error;
}



}



?>