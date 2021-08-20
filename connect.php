
<?php
/*
//$sql="CREATE DATABASE BFF";
if($conn->query($sql)===TRUE){
    echo" Database created";
}
else{
    echo"Error in creating database".$conn->error;
}
//Connecting to MYSQL
$conn=new mysqli("localhost","root","","BFF");

//Check connection
if($conn->connect_error){
    die("Not connected".$conn->connect_error);

}
else{
    echo "Connected successfuly";
}

//create database
check connection
if($conn->connect_error){
    die("Not connected".$conn->connect_error);
} else{
    echo "Connected Successfully";
}
$sql="CREATE DATABASE SYDNEYS_RESTAURANT";
if($conn->query($sql)==TRUE){
    echo"Database Created";
} else{
    echo"Error in creating database".$conn->error;
}





if($conn->connect_error){
    die("Not connected".$conn->connect_error);
} else{
    echo "Connected Successfully";
}
$sql="CREATE DATABASE SYDNEYS_RESTAURANT";
if($conn->query($sql)==TRUE){
    echo"Database Created";
} else{
    echo"Error in creating database".$conn->error;
}*/

$server="localhost";
$username="root";
$password="";
$database="bff";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
    die("Could not connect".mysqli_connect_error());
}
echo "";

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
    header('location:login.php');
}else{
   echo "Error",$conn->error;
}

$sql_select="SELECT * FROM Clients";

$results=$conn->query($sql_select);
print_r($results);
}



if (isset($_POST["update"]))
{
    $id=$_POST['id'];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$email=$_POST['email_address'];
$phone=$_POST['phone_number'];
$password=$_POST['password'];
$Usertype=$_POST['user'];
//insert data
$sql_update="UPDATE Clients SET First_name='$fname',Second_name='$sname' ,Email='$email',Password='$password',Phone='$phone',User_Type='$Usertype' WHERE User_ID=$id";

if($conn->query($sql_update)===TRUE){
    echo "Updated Successfully";
    header('location:showdata.php');
}else{
   echo "Error",$conn->error;
}



}

if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$conn->query("DELETE FROM clients WHERE user_id=$id")or die ($conn->error());


		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger";

        header('location:showdata.php');

	}

if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;


		$result = mysqli_query($conn,"SELECT * FROM clients WHERE User_ID=$id")or die ($con->error());

		
			$row=$result->fetch_array();
			

            $fname=$row['First_name'];
            $sname=$row['Second_name'];
            $email=$row['Email'];
            $phone=$row['Phone'];
            $password=$row['Password'];
			# code...
		

		
	}









?> 
