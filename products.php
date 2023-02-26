<!DOCTYPE html>

<html>
    <head>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <title>Products</title>
 
    <script src="cart.js"></script>
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
                <a href="#"  class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-user"></a>

                <?php 
        session_start();


        if (isset($_SESSION['username'])) { ?>
        <a href="logout.php" class="fas fa-sign-out-alt"></a>

    <?php } ?>
    
            </div>
        
        </header>

        <section class="products" id="products">

            <h1 class="heading"> Latest <span>Products</span> </h1>
        
            <div class="box-container">
        
              <div class="box" >               
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src="images/img-1.jpg" alt="">
                        <div class="icons">
                            
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
   
                        </div>
                    </div>
                    <div class="content">
                        <h3>Aconite</h3>
                        <div class="price"> $12.99 <span>$15.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="1">
                        <input type="hidden" name="productName" value="Daffodil">
                        <input type="hidden" name="productPrice" value="12.99">
                        <a href="#" class="cart-btn">Add to Cart</a>
                      </form>
                </div>
        
                <div class="box">
                    <span class="discount">-15%</span>
                    <div class="image">
                        <img src="images/img-2.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Allium</h3>
                        <div class="price"> $10.99 <span>$19.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="2">
                        <input type="hidden" name="productName" value="Allium">
                        <input type="hidden" name="productPrice" value="10.99">
                      </form>
                    </div>
        


                <div class="box" >

                    <span class="discount">-5%</span>
                    <div class="image">
                        <img src="images/img-3.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Ageratum</h3>
                        <div class="price"> $9.99 <span>$15.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="3">
                        <input type="hidden" name="productName" value="Ageratum">
                        <input type="hidden" name="productPrice" value="9.99">
                      </form>
                </div>




                <div class="box">

                  <span class="discount">-20%</span>
                    <div class="image">
                        <img src="images/img-4.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Angelica</h3>
                        <div class="price"> $7.99 <span>$18.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="4">
                        <input type="hidden" name="productName" value="Ageratum">
                        <input type="hidden" name="productPrice" value="7.99">
                      </form>
                </div>


        
                <div class="box">

                    <span class="discount">-17%</span>
                    <div class="image">
                        <img src="images/img-5.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Baneberry</h3>
                        <div class="price"> $13.99 <span>$20.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="5">
                        <input type="hidden" name="productName" value="Baneberry">
                        <input type="hidden" name="productPrice" value="7.99">
                      </form>

                </div>
        
                   <div class="box">

                    <span class="discount">-3%</span>
                    <div class="image">
                        <img src="images/img-6.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Coleus</h3>
                        <div class="price"> $14.99 <span>$15.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="6">
                        <input type="hidden" name="productName" value="Coleues">
                        <input type="hidden" name="productPrice" value="14.99">
                      </form>
                </div>
        



                <div class="box">

                    <span class="discount">-18%</span>
                    <div class="image">
                        <img src="images/img-7.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Comfrey</h3>
                        <div class="price"> $18.99 <span>$15.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="7">
                        <input type="hidden" name="productName" value="Comfrey">
                        <input type="hidden" name="productPrice" value="18.99">
                      </form>
                </div>
        


                <div class="box">

                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src="images/img-8.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Cosmos</h3>
                        <div class="price"> $16.99 <span>$15.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="8">
                        <input type="hidden" name="productName" value="Cosmos">
                        <input type="hidden" name="productPrice" value="16.99">
                      </form>
                </div>
        
                  <div class="box">

                    <span class="discount">-5%</span>
                    <div class="image">
                        <img src="images/img-9.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add to Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Daffodil</h3>
                        <div class="price"> $11.99 <span>$16.99</span> </div>
                    </div>
                    <form method="post" action="addtocart.php">
                        <input type="hidden" name="productId" value="9">
                        <input type="hidden" name="productName" value="Daffodil">
                        <input type="hidden" name="productPrice" value="11.99">
                      </form>
                </div>
            </div>



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
            <div class="style">
                <h5></h5>
            </div>
        
        </section>
        
    </body>
</html>