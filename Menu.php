<?php
session_start();

?>

<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" href="menudeco.css">
        <div class="nav">
            <ul type="none">
               
                <li><a href="BFF2.php">Home</li>
                <li><a href="Deliveries.php">Deliveries</a></li>
                       <li><a href="profiledetails.php"><?= $_SESSION['username']?></a></li>
            <li><a class="link-button" href="logout.php" style="color:red";>Log Out</a></li>

               
                </ul>
            </div>
    </head>
    <body>
        <h1>Menu</h1>
        <p class="Foods">
                <strong>Foods</strong></br>
                Hotdog......................................@Kshs 200</br>
                Plain fries.................................@Kshs 250</br>
                Waffle fries................................@Kshs 300</br>
                Curly fries.................................@Kshs 300</br>
                Chicken nuggets.............................@Kshs 300</br>
                Chicken Sandwich............................@Kshs 400</br>
                Doubleinout.................................@Kshs 500</br>
                Burger......................................@Kshs 550</br>
                Pizza(medium)...............................@Kshs 800</br>
                Bacon Cheeseburger..........................@Kshs 1000</br>
                Pizza(large)................................@Kshs 1050</br>


        </p>

        <p class="Snacks">
            <strong>Snacks</strong></br>
                Biscuits......................................@Kshs 150</br>
                Cookies.......................................@Kshs 200</br>
                Candy.........................................@Kshs 300</br>
                Chocolates....................................@Kshs 300</br>
                Cakes.........................................@Kshs 450</br>
                
        </p>

        <p class="Drinks">
            <strong>Cold Drinks</strong></br>
                Water.....................................@Kshs 100</br>
                Sodas.....................................@Kshs 150</br>
                Juice.....................................@Kshs 200</br>
                Yoghurts..................................@Kshs 250</br>
                Cocktails.................................@Kshs 300</br>
                Milkshakes................................@Kshs 300</br></br>

        </br><strong>Hot Drinks</strong></br>
                Milk.......................................@Kshs 70</br>
                Tea........................................@Kshs 120</br>
                Black coffee...............................@Kshs 150</br>
                White coffee...............................@Kshs 200</br>
                Hot chocolate..............................@Kshs 250</br>
                Caffe latte................................@Kshs 280</br>
                Cappuccino.................................@Kshs 300</br>
                Double Espresso............................@Kshs 350</br>

                
        </p>
    </body>
</html>