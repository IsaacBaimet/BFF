<html>

<head>
    <title>Register</title>
    <h1>Register</h1>
</head>
<body>
    <form>
        <label for="Fname">FirstName:</label>
        <input type="text" id="Fname" name="name" value="<?php echo $fname;?>"></br></br>

        <label for="Sname">SecondName:</label>
        <input type="text" id="Sname" name="name" value="<?php echo $sname;?>"></br></br>

        <label for="Email">Email:</label>
        <input type="email" id="Email" name="email_address" value="<?php echo $email;?>"></br></br>

        <label for="Password">Password:</label>
        <input type="password" id="Password" name="password" value="<?php echo $password;?>"></br></br>

        <?php
        if($update==true):
            ?>
        <input type="submit" name="update" id="submit_registration" value="Update">
            <?php else: ?>
                <input type="submit" name="register" id="submit_registration" value="Register">
                <?php endif; ?>
  

    </form>
    </body>
    </html>