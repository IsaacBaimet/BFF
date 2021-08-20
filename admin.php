<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="admin")
{
  header("location:login.php");
}


?>


<html>
<head>
    <title>ADMIN</title>
    <link rel="stylesheet" href="deco.css">
    <link rel="stylesheet" type="text/css" href="showdata.css">
    <div class="nav">
        <ul type="none">
       
            
            <li><a href="showdata.php">Users Table</li>
            <li><a href="adminprofiledetails.php"><?= $_SESSION['username']?></a></li>
            <li><a class="link-button" href="logout.php" style="color:red;" >Log Out</a></li>
            </ul>


        </div>
</head>
<body>
    <h1>*ADMIN*</h1>
    

    
    <p>
        <h2>BAIMET FAST FOODS</br>
            <image src="images\burger.jpg"width="200"height="200"></image> 
            <image src="images\pizza.jpg"width="200"height="200"></image>
            <image src="images\deli.jpg"width="200"height="200"></image>
            <image src="images\mix.jpg"width="200"height="200"></image>


         </h2>
        <p id=line1>Providing you with the most delicious dishes at friendly prices.</br>
             <strong><a href="">Order now </a><strong>
            
        
        
    </p>


    <?php
     $conn=mysqli_connect("localhost","root","","bff");
  
 $id=0;
$update=false;

$foodname='';
$foodprice='';



 

  if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;


		$result = mysqli_query($conn,"SELECT * FROM productsdb WHERE id=$id")or die ($conn->error());

    
      $row=$result->fetch_array();
      $foodname=$row['product_name'];
      $foodprice=$row['product_price'];
      
      # code...
		

		
	}

 if (isset($_POST['update']))
 {
  $id=$_POST['id'];
  $foodname=$_POST['fooditem'];
  $foodprice=$_POST['price'];
 
  
  $query="UPDATE  productsdb SET product_name='$foodname',product_price='$foodprice' WHERE id=$id";
  mysqli_query($conn,$query);

    

  echo "<script>alert('Product Updated')</script>";
    echo "<script>window.location='admin.php'</script>";
}




  

if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$conn->query("DELETE FROM productsdb WHERE id=$id")or die ($conn->error());


        echo "<script>alert('Product Deleted')</script>";
        echo "<script>window.location='admin.php'</script>";

	}
if (isset($_POST['submitImage'])) { 

  
    $food_name=$_POST["fooditem"];
    $file=$_FILES["file"];
    $food_price=$_POST["price"];


    $filename = $_FILES["file"]["name"]; 
    $fileTmpName=$_FILES["file"]["tmp_name"];
    $fileSize=$_FILES["file"]["size"];
    $fileError=$_FILES["file"]["error"];
    $fileType=$_FILES["file"]["type"];

    $fileExt= explode('.', $filename);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)) 
    {
      if ($fileError=== 0)
         {
           if ($fileSize < 10000000) 
              {
                $fileNameNew=uniqid('', true).".".$fileActualExt;

                $folder='images/'.$fileNameNew;

                $fileDestination='images/'.$fileNameNew;
                if(move_uploaded_file($fileTmpName, $fileDestination))
                {
                    echo "<script>alert('Uploaded Succesfully')</script>";
                    echo "<script>window.location='admin.php'</script>";
                }else
                {
                    echo "Error";
                }

              }
              else
                  {
                    echo "Your file is too big!";
                  }
        }
        else
        {
          echo "There was an error uploading your file!";
        }
    }
    else
    {
      echo "You cannot upload files of this type!";
    }

    

          

    
        $sql = "INSERT INTO `productsdb`(`product_name`,`product_price`, `product_image`)VALUES ('$food_name','$food_price','$folder')";

        mysqli_query($conn, $sql); 

}
  

  $result = mysqli_query($conn, "SELECT * FROM productsdb"); 

?>


    <section class="Add Food">
       

      
  
  <div >
   <div >
            <div >
              <h1 >upload image</h1>


            </div>
            <div >
             <form action="" method="POST" enctype="multipart/form-data">


      <input type="hidden" name="id" value="<?php echo $id; ?>" >
               


                <div >
                  

                  <input type="text"  name="fooditem"  value="<?php echo $foodname; ?>"   required="true" placeholder="Enter food name" id="fooditem" >

                </div>
                <br><br>





                <div >
                  <?php
                     if($update==true):
                  ?>

                  <?php else: ?>  
                  <input type="file" name="file" class=" form-control-lg" required="true" id="foodimage" >
                  <?php endif;?> 

                </div>
                <br><br>

               




                <div class="input-group my-3">

                   <input type="number"  name="price" class="form-control form-control-lg" value="<?php echo $foodprice; ?>" id="foodprice" class="form-control" placeholder="Enter Price" required="true">

                </div>
                <br><br>

                 <?php
        if($update==true):
        ?>
            <button type="submit" name="update"class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>update</button>

              <?php else: ?>  
            <button type="submit" name="submitImage" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Upload</button>
             <?php endif;?>  




              </form>

            </div>


          </div>
        </div>



    </div>
        
    
    </section>



    <section class="viewfood">

    <?php
if (mysqli_num_rows($result) > 0) {
?>
  <h2>Products</h2>
  <div class="table-wrapper">
  <table class="fl-table">
  <thead>
  <tr>
  <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Price</th>
    
    
    <th colspan="2">Action</th>
  </tr>
</thead>  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><img src="<?php echo $row["product_image"] ?>" width="130" height="130" alt=""></td>
    <td><?php echo $row["product_name"]; ?></td>
    <td><?php echo $row["product_price"]; ?></td>
   
    
    <td>
      <a href="admin.php?edit=<?php echo $row['id'];?>" class="link-button" >Edit</a> 
      <a href="admin.php?delete=<?php echo $row['id'];?>" class="link-button">Delete</a>
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
        
    </section>

    <section class="trust">
        <h3>Reviews</h3>
        <p>
            "Thanks to BFF I nowadays have lunch</br>in my office due to their fast deliveries and tasty meals"</br>
            ~Samuel Jairo<image src="images\samjairo.png"width="50"height="50"></image></br>

            <p><span>"Nothing but praise to one</br>of the best fast food restaurants I've"</br> had the pleasure to be served by
                ~Franscine Birir<image src="images\msupa.jpg"width="50"height="50"></image>&nbsp;&nbsp;</span></p>

                <p id=review>"Wow wow wow @BFF you guys</br>are simply the best delicious foods assured"</br>
                    ~Blessing Mutinda<image src="images\mutis.jpg"width="50"height="50"></image>&nbsp;&nbsp;</p>

                    <p id=review2>"Thanks to BFF I nowadays have lunch</br>in my office due to their fast deliveries and tasty meals"</br>
                        ~Samuel Jairo<image src="images\sido.jpg"width="50"height="50"></image>&nbsp;&nbsp;</p>


        </p>
    </section>

    <section class="AdditonalContent">
        <p class="add">
            Working hours: 6am to 10pm</br>
            Location:Nairobi,Lavington.</br>
            For deliveries Dial: 020-999-255</br>
            Helpline:020-900-252</br>
            @2021 Baimet Fast Food</br>
            Email:BFF@gmail.com</br>

            
        </p>

    </section>

    
</body>
</html>