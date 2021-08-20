<?php
session_start();
?>

<html>
    <head>
        <title>Deliveries</title>
        <link rel="stylesheet" href="deliveriesdeco.css">
            <link rel="stylesheet" href="menudeco.css">
            <div class="nav">
                <ul type="none">
                <li><a href="BFF2.php">Home</li>
                <li><a href="Menu.php">Menu</a></li>
                       <li><a href="profiledetails.php"><?= $_SESSION['username']?></a></li>
            <li><a class="link-button" href="logout.php" style="color:red";>Log Out</a></li>
    
                   
                    </ul>
                </div>
        </head>
        </head>
        <body>
            <section class="AdditonalContent">
                <p class="add">
                    Working hours: 6am to 10pm</br>
                    Location:Nairobi,Lavington.</br>
                    For deliveries Dial: 020-999-255</br>
                    Helpline:020-900-252</br>
                    @2021 Baimet Fast Food</br>
                    Email:BFF@gmail.com</br>
        </br>
                    
                </p>
                <p class="images">
            <image src="images\chef1.jpg"width="400"height="200"></image> 
            <image src="images\chef2.jpg"width="400"height="200"></image>
            <image src="images\chef3.jpg"width="400"height="200"></image>
                </p>
        
            </section>
<p class="thanks">
    THANK YOU </br>
    ORDER NOW!!!
</p>        
        </body>
</html>