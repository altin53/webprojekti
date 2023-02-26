

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <title>Login and Register</title>
          <link rel="stylesheet" href="style.css">

          <script src="slide.js"></script>
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
            <?php 
        session_start();
        if (isset($_SESSION['username'])) { ?>
        <a href="logout.php" class="fas fa-sign-out-alt"></a>

    <?php } ?>
        </div>
    




        <?php
require 'databaseconnect.php';

class Registration {
    private $conn;
    private $username;
    private $email;
    private $password;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function register() {

      
        
        if (isset($_POST['registersub'])) {
            $this->username = $_POST['useri'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $errors = array();

            if (empty($this->username)) {
                $errors['username'] = "Please enter a username";
            }
            
            if (empty($this->email)) {
                $errors['email'] = "Please enter an email";
            }
            
            if (empty($this->password)) {
                $errors['password'] = "Please enter a password";
            } else if (strlen($this->password) < 8) {
                $errors['password'] = "Password must be at least 8 characters long";
            }
            
            // Check if username is already taken
            $queryUsername = "SELECT * FROM login WHERE name = '$this->username'";
            $resultUsername = mysqli_query($this->conn, $queryUsername);


            if (mysqli_num_rows($resultUsername) > 0) {
              
            }
 
            // Check if email is already taken
            $queryEmail = "SELECT * FROM login WHERE email = '$this->email'";
            $resultEmail = mysqli_query($this->conn, $queryEmail);
            if (mysqli_num_rows($resultEmail) > 0) {
           
            } else {
                if (empty($errors)) {
                    $this->insertData();
                    header('location:login.php');
                }
               
            }
        }
    }

    public function insertData() {
        $sql = "INSERT INTO login (name, email, password,role) VALUES ('$this->username', '$this->email', '$this->password','user')";
        if (mysqli_query($this->conn, $sql)) {
            echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . mysqli_error($this->conn);
        }
    }
}

$registration = new Registration($conn);
$registration->register();
?>


    </header>
         <section class="loginback">
        <form class="login-form" action="loginverify.php" method="post">
         <h2>Login<span>.</span></h2>
         <label for="username">Username</label>
         <input type="text" name="username" id="username" placeholder="Enter your Username" required>
         <div id="usernameError" class="error" ></div>
         <label for="password">Password</label>
         <input type="password" name="password" id="password" placeholder="Enter your Password" required><br>
         <div id="passwordError" class="error"></div>
         <button type="submit"  name="loginsubmit" action = "loginverify.php"; onclick="validateFormLogin();" id="submitButton">Login</button>
           <p id="account">Don't have an Account ?</p> 

           <a id="link" href="#" onclick="next();">Create an Account<span>.</span></a>
        </form>

    

        <form class="register-form"  action="" method="post" style="display: none;">
        <form  class="register-login" style="display: none;">
            <h2>Sign Up<span>.</span></h2>
            <label for="username">Username</label>
            <input type="text" name="useri" id="useri" placeholder="Enter your Username" >
            <div id="erroruser"  class="error"></div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <div id="erroremail" class="error"></div>
            <label for="pass">Password</label>
            <input type="password" name="password" id="pass" placeholder="Enter your Password">
            <div id="errorpass" class="error"></div>
            <label for="confirmpass">Confirm Password</label>
            <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password">
            <div id="errorconfirm" class="error"></div>
             

            <button type="submit" name="registersub" onclick="return validateRegisterForm();" id="signsubmit">Sign</button>
            <p id="have">I Have An Account</p>
            <a id="backtologin" href="#" onclick="prev();">Back to Login</a>
             

        </form>
                    
        <div class="slider">
 
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/1.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/14.jpg">
  <img class="slide"  style="height: 300px; width: 500px;" src="flowerslide/4.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/11.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/16.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/2.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/15.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/7.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/12.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/13.jpg">
  <img class="slide"  style="height: 300px; width: 500px;"  src="flowerslide/15.jpg">

</div>

<h1 class="logintext">"Discover the Beauty of <span> Nature."</span></h1>
<script src="slide.js"></script>
    </body>
</html>