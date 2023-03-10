<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   
    <link rel="stylesheet" href="style.css">


</head>
<body>



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
        <a href="addtocart.php" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
        <?php 
        session_start();
        if (isset($_SESSION['username'])) { ?>
        <a href="logout.php" class="fas fa-sign-out-alt"></a>
       

    <?php } ?>
    
    </div>

</header>



<section class="home" id="home">

    <div class="content">
        <h3>fresh flowers</h3>
        <span> natural & beautiful flowers </span>
        <p>âIf you look the right way, you can see that the whole world is a garden.ââ Frances Hodgson Burnett.</p>
        <a href="products.php" class="btn">shop now</a>
    </div>
    
</section>



<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
   
</section>



<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>amazing products im so happy!.</p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3>name</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>the shipping is fast and so secure.</p>
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
                <h3>name</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>such an amazing website for flower community.</p>
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
                <h3>name</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>
</div>

</section>



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="products.php">products</a>        
            <a href="contact.php">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Kosovo</a>
            <a href="#">USA</a>
            <a href="#">France</a>
            <a href="#">Albania</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">049 - xx -xx</a>
            <a href="#">example@gmail.com</a>
            <a href="#">Kosovo</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Almir Shala and Altin Ibrahimaj </span> | all rights reserved </div>

</section>  
</body>
</html>