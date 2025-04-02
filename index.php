<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food Ordering System</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <section id="Home">
            <div class="hero">

                <nav>

                    <div class="logo">
                        <a href="#Home" class="logo">FOODHUB</a>
                    </div>

                    <ul>
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#About">About</a></li>
                        <!-- <li><a href="#Menu">Menu</a></li> -->
                    </ul>

                    <?php
                        session_start();
                        if(isset($_SESSION['auth']))
                        {
                    ?>
                            <ul>
                                <li><a href="my_orders.php">My orders</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                <li><a><?= $_SESSION['auth_user']['name'] ?></a></li>                                
                            </ul>

                            

                            <?php
                        }
                                else
                                {
                            ?>

                                    <div class="icon">
                                        <!-- <i class="fa-solid fa-magnifying-glass"></i>
                                        <i class="fa-solid fa-cart-shopping"></i> -->
                                        <a href="login.php"><button>Login</button></a>
                                        <a href="register.php"><button>Register</button></a>
                                    </div>
                                    <?php
                                }
                                    ?> 
                </nav>

                <div class="content">
                    <div class="left">
                        <p>Are You Hungry?</p>
                        <h1>Don't Wait!</h1>
                        <p>Let start to order food now</p>

                        <button>Order Now</button>
                        <button class="know_more">Know More</button>
                    </div>
                </div>

            </div>
        </section>


        <!-- menu -->

        <div class="menu" id="Menu">
            <h1>Our<span>Menu</span></h1>
    
            <div class="menu_box">

                <div class="menu_card">

                    <div class="menu_image">
                        <img src="img">
                    </div>

                    <div class="menu_info">
                        <h2>Food1</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                        </p>
                        <h3>$Price</h3>
                        
                        <a href="#" class="menu_btn">Order Now</a>
                    </div>    
                </div> 

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="img">
                    </div>      
                    <div class="menu_info">
                        <h2>Food1</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                        </p>
                        <h3>$Price</h3>
                        
                        <a href="#" class="menu_btn">Order Now</a>
                    </div>    
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="img">
                    </div>      
                    <div class="menu_info">
                        <h2>Food1</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                        </p>
                        <h3>$Price</h3>
                        
                        <a href="#" class="menu_btn">Order Now</a>
                    </div>    
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="img">
                    </div>      
                    <div class="menu_info">
                        <h2>Food1</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                        </p>
                        <h3>$Price</h3>
                        
                        <a href="#" class="menu_btn">Order Now</a>
                    </div>    
                </div>
                
            </div>
    
        </div>

         <!-- about us -->

         <div class="about" id="About">
            <div class="about_main">
    
                <div class="image">
                    <img src="assets/images/Food-Plate.png">
                </div>
    
                <div class="about_text">
                    <h1><span>About</span>Us</h1>
                    <h3>Why Choose us?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, est. Doloremque 
                        sapiente veritatis laboriosam corrupti optio et maxime. Ad, amet explicabo eaque labore 
                        cupiditate quasi nostrum nemo recusandae id quibusdam? Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Doloremque ab, dolores pariatur cum exercitationem, illo nisi 
                        veritatis vitae ea deleniti fugiat quisquam tempora, accusantium corrupti excepturi optio. 
                        Inventore, cupiditate recusandae.
                    </p>
                </div>
    
            </div>
    
            <a href="#" class="about_btn">Order Now</a>
    
        </div>

        <!-- footer -->

        <footer>
            <div class="footer_main">
    
                <div class="footer_tag">
                    <h2>Quick Link</h2>
                    <p><a href="#Home">Home</a></p>
                    <p><a href="#About">About</a></p>
                    <p><a href="#Menu">Menu</a></p>
                </div>
    
                <div class="footer_tag">
                    <h2>Contact</h2>
                    <p>+977 9807227048</p>
                    <p>+977 </p>
                    <p>ashwinchaudhary511@gmail.com</p>
                    <p>prajwonjungt@gmail.com</p>
                </div>
    
                <div class="footer_tag">
                    <h2>Our Service</h2>
                    <p>Fast Delivery</p>
                    <p>Easy Payments</p>
                    <p>24 x 7 Service</p>
                </div>
    
                <div class="footer_tag">
                    <h2>Follows</h2>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <div class="footer_tag">
                    <!-- <h2>Location</h2> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.495379491617!2d84.56627948070515!3d27.609170314972733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e8676c67cb1b%3A0x42cc7462bb3af372!2sSungava%20College!5e0!3m2!1sen!2snp!4v1715960125326!5m2!1sen!2snp"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
    
            </div>
    
            <p class="end">Copyright © by <span></i>Aashwin and Prajwol</span></p>
    
        </footer>

    </body>
</html>