<!DOCTYPE html>
<html>
    <head>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <title>Contact Us</title>

 <link rel="stylesheet" href="style.css">

    </head>
    <body>

  <?php
require 'databaseconnect.php';
  class contact {

private $conn;
private $name;
public $email;
public $textarea;

  public function __construct($conn) {
    $this->conn = $conn;
  }

    public function contact(){

        if(isset($_POST['contactsubmit'])) {
             $this->name = $_POST['contactname']; 
             $this->email = $_POST['contactemail']; 
             $this->textarea = $_POST['textarea']; 
             
              $this->getformdata();

        }
    }

    public function getformdata(){

         $sq = "INSERT INTO contact(name,email,textarea) VALUES ( '$this->name',  '$this->email' ,' $this->textarea')";

         mysqli_query($this->conn, $sq);
           } 
          }

        $contact = new contact($conn);
         $contact->contact();
  ?>



        <header>

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
        
        </header>
   



        <section class="contact" id="contact">

            <h1 class="heading"> <span> Contact </span> Us </h1>
        
            <div class="row">
        
                <form  id="formcontact" action="contact.php" method="post">
                    <input type="text" name="contactname" placeholder="name" class="box">
                    <input type="email" name="contactemail" placeholder="email" class="box">
                    <textarea name="textarea" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                    <input type="submit" name="contactsubmit" value="send message" class="btn">
                </form>
        
                <div class="image">
                    <img src="images/contact-img.svg" alt="">
                </div>
        
            </div>
        
        </section>
        
    </body>
</html>