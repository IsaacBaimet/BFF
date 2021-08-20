<html>
    <head>
        <title>Client</title>
        <link rel="stylesheet" type="text/css" href="styleclient.css">
</head>
<body>
        <?php include_once 'connect.php';?>
    <form method="post" action="connect.php">
    <?php
        if($update==true):
            ?>
            <div class="registerbox"> 
                <div class="header">
                    <h1>Update</h1>
                </div>
                <?php else: ?>
                        <div class="registerbox"> 
                <div class="header">
                    <h1>Register</h1>
                </div>
                <?php endif; ?>

                <input type="hidden" name="id" value="<?php echo $id;?>">

                <div class="textbox">
        <label>FirstName:</label>
        <input type="text" name="fname"  value="<?php echo $fname;?>" required> <br><br>
        </div>

        <div class="textbox">
        <label for="second_name">SecondName:</label>
        <input type="text" name="sname" id="second_name" value="<?php echo $sname;?>" required><br><br>
        </div>

        <div class="textbox">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="email_address" value="<?php echo $email;?>" required></br></br>
</div>

<div class="textbox">
        <label for="Phone">Phone:</label>
        <input type="number" id="phone" name="phone_number" value="<?php echo $phone;?>" required></br></br>
</div>

<div class="textbox">
        <label for="Password">Password:</label>
        <input type="password" id="Password" name="password" value="<?php echo $password;?>" required></br></br>
</div>

<div class="radio">
       
            <label id="usertype">UserType :</label>
            <label for="cli">Client</label>
            <input type="radio" name="user" value="client" id="client" required>
            <label for="cli">Admin</label>
            <input type="radio" name="user" value="admin" id="admin" required></br></br>
</div>
        


<?php
        if($update==true):
            ?>
            <div class="button">
        <input type="submit" name="update" id="submit_registration" value="Update">
        </div>
            <?php else: ?>
                <div class="button">
                <input type="submit" name="register" id="submit_registration" value="register">
                </div>
                <?php endif; ?>
  
        </div>
</form>



</body>