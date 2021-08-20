<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="client")
{
  header("location:Login.php");
}


?>

<html>
<head>
    <title>BFF</title>
    <link rel="stylesheet" href="deco.css">
    <div class="nav">
        <ul type="none">
        
            <li><a href="Deliveries.php">Deliveries</a></li>
            <li><a href="Menu.php">Menu</li>
            <li><a href="profiledetails.php"><?= $_SESSION['username']?></a></li>
            <li><a class="link-button" href="logout.php" style="color:red";>Log Out</a></li>
            </ul>


        </div>
</head>
<body>
    <h1>*BFF*</h1>
    

    
    <p>
        <h2>BAIMET FAST FOODS</br>
            <image src="images\burger.jpg"width="200"height="200"></image> 
            <image src="images\pizza.jpg"width="200"height="200"></image>
            <image src="images\deli.jpg"width="200"height="200"></image>
            <image src="images\mix.jpg"width="200"height="200"></image>


         </h2>
        <p id=line1>Providing you with the most delicious dishes at friendly prices.</br>
             <strong><a href="orderpage.php">Order now ></a><strong>
            
        
        
    </p>

    <section class="benefits">
        <h4 id=ben>Customer Benefits</h4>
        Assured quick deliveries to any destination within the city.</br>
        Equal and convenient services to all our customers without any discrimination.</br>
        <image src="images\backg.jpg"width="700"height="400"></image></br><div id=benefits>Being a customer at BFF,</br> comes with a great deal of weekly offers,</br>
        weekend discounts and customer bonuses</br> also which can be redeemed to buy
        other delicious meals.</div>
    
    </section>

    <section class="features">
        <h3>Highlights</h3>
        <ul type="none">
            <li>Burgers <image src="images\burger.jpg"width="200"height="200"></image>&nbsp;
            Pizza<image src="images\pizza.jpg"width="200"height="200"></image>&nbsp;
            Waffle fries<image src="images\wafflefries.jpg"width="200"height="200"></image></br>&nbsp;
            Double-Double in n out<image src="images\doubleinout.jpg"width="200"height="200"></image>&nbsp;
            Chicken Sandwich<image src="images\sandwich.jpg"width="200"height="200"></image>&nbsp;
            Curly Fries<image src="images\curly fries.jpg"width="200"height="200"></image>&nbsp;
            </br>Blizzard<image src="images\blizz.jpg"width="200"height="200"></image>&nbsp;
            Chicken nuggets<image src="images\nuggets.jpg"width="200"height="200"></image></li>&nbsp;
        </ul>
        Among many others
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