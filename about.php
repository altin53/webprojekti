<!DOCTYPE html>
<html>
    <head>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <title>About Us</title>
  
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
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-user"></a>
                <?php 
        session_start();
        if (isset($_SESSION['username'])) { ?>
        <a href="logout.php" class="fas fa-sign-out-alt"></a>

    <?php } ?>
            </div>
        
        </header>

        <section class="about" id="about">

          <h1 class="heading"> <span> about </span> us </h1>
      
          <div class="row">
      
              <div class="video-container">
                  <video src="images/about-vid.mp4" loop autoplay muted></video>
                  <h3>best flower sellers</h3>
              </div>
      
              <div class="content">
                  <h3>why choose us?</h3>
                  <p>"Welcome to our flower shop! We are a locally owned and operated business based in Kosovo. Our passion for flowers drives us to offer a wide selection of beautiful, fresh blooms to our customers.

                    Our team is dedicated to providing excellent customer service and helping you find the perfect flowers for any occasion. Whether you're looking for a bouquet for a special someone, a lush arrangement for a wedding, or simply a way to brighten up your home, we have something for everyone.
                    
                    We source our flowers from the best local and international suppliers to ensure that our arrangements are always of the highest quality. We also offer delivery services to make it easy for you to get your flowers wherever you are.
                    
                    Thank you for choosing us for your floral needs. We look forward to helping you find the perfect flowers to suit your style and budget."</p>
                  <p></p>
                  <a href="#" class="btn">Learn More</a>
              </div>
      
          </div>
       </body>
</html>