<?php
session_start();
require_once('component.php');

$conn=mysqli_connect("localhost","root","","bff");

if(isset($_POST['add']))
 {
 	if(isset($_SESSION['cart']))
 	{


 	$item_array_id=array_column($_SESSION['cart'], "product_id");

 	if (in_array($_POST['product_id'],$item_array_id)) 
 	{
 		echo "<script>alert('Product has already been added in the cart...!')</script>";
 		echo "<script>window.location='orderpage.php'</script>";
 	}

 	else
 	{
 		$count=count($_SESSION['cart']);
 		$item_array=array('product_id'=>$_POST['product_id']);

 		$_SESSION['cart'][$count]=$item_array;
 		

 	}
 	//print_r($_POST['product_id']);
	


 	

 	}else
 		{
 			$item_array=array('product_id'=>$_POST['product_id']);

 			//create new session variable
 			$_SESSION['cart'][0]=$item_array;
 			print_r($_SESSION['cart']);
 		}
 }


?>

<html>
    <head>
        <title>Orders</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<header id="header">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 >
        <a href="BFF2.php" class="text-capitalize">home</a>
        </h3>
    <a href="orderpage.php" class="navbar-brand">
    <h3 class="px-5">
        <i class="fa fa-shopping-basket"></i> Shopping Cart
    </h3>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="mr-auto"></div>
        <div class="navbar-nav">
            <a href="cart.php" class="nav-item nav-link active">
                <h5 class="px-5 cart">
                    <i class="fa fa-shopping-cart"></i>Cart
                    <?php 
                        if (isset($_SESSION['cart'])) 
                        {
                            $count=count($_SESSION['cart']);
                           echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\"> $count </span>";
                        }else
                            {
                                echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\"> 0 </span>";
                            }


                     ?>

                </h5>

            </a>


        </div>
    </div>
</nav>



</header>

<div class="container">
	<div class="row text-center py-5">
		<?php
		
        $result = mysqli_query($conn, "SELECT * FROM productsdb");
		while($row=mysqli_fetch_assoc($result))
		{
			component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
		}


		?>

	</div>

</div>
      


</body>
</html>