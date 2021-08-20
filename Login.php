

<html>
    <head>
    <title>Login</title>
        <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
    <form method="post" action="process_login.php">
            <div class="registerbox"> 
                <div class="header">
                <h1>Login</h1>
                </div>

                <div class="textbox">
                <label for="Email">Email:</label>
            <input type="email" id="Email" name="email_address"></br></br>
        </div>

        <div class="textbox">
        <label for="Password">Password:</label>
            <input type="password" id="Password" name="password"></br></br>
        </div>

       
        
<div class="button">

<input type="submit" name="Login" id="submit_login" value="Login"></br>
</div>
Don't have an account? <a href="client.php">Register</a></p>
        </div>
</form>
</body>