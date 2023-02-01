<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

          <link rel="stylesheet" href="style.css">

          <script src="login.js"></script>
          <title>Log in and Sign up</title>

       

    </head>
</body>
  
    <header>
        <body>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
    
        <a href="#" class="logo">flower<span>.</span></a>
    
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="products.php">Products</a>
            <a href="about.php">About us</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
           
        </nav>
    
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    
    </header>
         <section class="loginback">
        <form class="login-form">
         <h2>Login<span>.</span></h2>
         <label for="username">Username</label>
         <input type="text" id="username" placeholder="Enter your Username" required>
         <div id="usernameError" class="error" ></div>
         <label for="password">Password</label>
         <input type="password" id="password" placeholder="Enter your Password" required><br>
         <div id="passwordError" class="error"></div>
         <button type="submit" onclick="validateFormLogin();" id="submitButton">Login</button>
           <p id="account">Don't have an Account ?</p> 

           <a id="link" href="#" onclick="next();">Create an Account<span>.</span></a>
        </form>

    

        <form class="register-form" style="display: none;">
        <form action="" class="register-login" style="display: none;">
            <h2>Sign Up<span>.</span></h2>
            <label for="username">Username</label>
            <input type="text" id="useri" placeholder="Enter your Username" >
            <div id="erroruser"  class="error"></div>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your Email">
            <div id="erroremail" class="error"></div>
            <label for="pass">Password</label>
            <input type="password" id="pass" placeholder="Enter your Password">
            <div id="errorpass" class="error"></div>
            <label for="confirmpass">Confirm Password</label>
            <input type="password" id="confirmpass" placeholder="Confirm Password">
            <div id="errorconfirm" class="error"></div>
             

            <button type="submit" onclick="validateRegisterForm();" id="signsubmit">Sign</button>
            <p id="have">I Have An Account</p>
            <a id="backtologin" href="#" onclick="prev();">Back to Login</a>
             

        </form>
        </section>

      

        
    </body>
</html>