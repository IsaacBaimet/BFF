
<html>
    <head>
        <title>Login and Registration</title>
        <link rel="stylesheet" href="registerdeco.css">
    </head>
    <body>
        <form>
        <div class="container">
            <div class="card">
                <div class="inner-box"id="card">
                <div class="card-front">
                <h2>LOGIN</h2>
                <form>
                    <input type="email" class="input-box"placeholder="Your Email id"required>
                    <input type="password" class="input-box"placeholder="password"required>
                    <button type="submit"class=submit-btn>submit</button>
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button type="button"class=btn onclick="openRegister()">I'm new here</button>
                </div>
               
               
                <div class="card-back">
                 <h3>REGISTER</h3>
                 <form action="process_register.php" method="post">
                    <input type="text "name="uname" class="input-box"placeholder="Your Name"required>
                    <input type="email"name="mail" class="input-box"placeholder="Your Email id"required>
                    <input type="password"name="password" class="input-box"placeholder="password"required>
                    <input type="Phone " name="phone" class="input-box"placeholder="Your Number"required>
                    <button type="submit"class=submit-btn>submit</button>
                    
                </form>
                <button type="button"class=btn onclick="openLogin()">Already have an account</button>
                <a href="">Forgot password</a>
                </div>
                </div>
                </div>
                </div>
</form>
    </body>
       <script>
           var card = document.getElementById("card");
           function openRegister(){
               card.style.transform="rotateY(-180deg)";
           }
           function openLogin(){
               card.style.transform="rotateY(0deg)";
           }
       </script>
</html>