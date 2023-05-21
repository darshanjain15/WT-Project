<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodForU Restaurant </title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- css file link -->
    <link rel="stylesheet" type="text/css" href="style1.css">
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>/
<body>
    <header>
        <a href="#" class="logo"><img src="logo.png"</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#reservation">reservation</a>
            <a href="#blog">blog</a>
            <a href="login.php">login</a>
            <a href="register.php">signup</a>
            <a href="logout.php">logout</a>

        </nav>
        <!--<div class="icons">
            <i class="fas fa-bars" id="menu"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-heart"></i>
            <i class="fas fa-shopping-cart"></i>
        </div><-->
        <div class="logo">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                  <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"><h2> <?php echo "Welcome ". $_SESSION['username']?></h2></a>
            </li>
           </ul>
         </div>
    </header>
    <!-- header section end-->
    <!--slider section start-->
    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                 <div class="swiper-slide slide slide1">
                    <div class="content">
                        <img src="crown-symbol.png" >
                        <h3>delicious royate</h3>
                        <h1>gift voucher</h1>
                        <p>
                            give away your beloved customers
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                 </div>
                 <div class="swiper-slide slide slide2">
                    <div class="content">
                        <img src="crown-symbol.png" >
                        <h3>sale of 10% this dish</h3>
                        <h1>the fresh</h1>
                        <p>
                            food restaurant
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                 </div>
                 <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="crown-symbol.png" >
                        <h3>we are open</h3>
                        <h1>fresh fruits</h1>
                        <p>
                            you will love it 
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                 </div>
            </div>
            
            <div class="swiper-pagination"></div>
        </div>
    </div>

     <!-- slider section ended-->

    <section class="welcome" id="about">
        <h1 class="heading">WELCOME TO ROYATE</h1>
        <center><h3 class="sub-heading">~ Luxury & Quality ~</h3></center>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="post-thumb-1.jpg">
                </div>

                <div class="content">
                    <h3>
                        PROFESSTIONAL LEVEL
                    </h3>
                    <p>
                        nor again is there anyone who loves or pursues or desire to
                        obtain pain of itself, beacause it is pain,but because occasionally
                        circumstances occur.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="post-thumb-2.jpg">
                </div>

                <div class="content">
                    <h3>
                        FRESH FOOD GUARANTEED
                    </h3>
                    <p>
                        nor again is there anyone who loves or pursues or desire to
                        obtain pain of itself, beacause it is pain,but because occasionally
                        circumstances occur.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="post-thumb-3.jpg">
                </div>

                <div class="content">
                    <h3>
                        THE MENU IS PLENTIFUL
                    </h3>
                    <p>
                        nor again is there anyone who loves or pursues or desire to
                        obtain pain of itself, beacause it is pain,but because occasionally
                        circumstances occur.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>



    <!-- Welcome section start-->



    <!-- Our menu section start-->
    <section class="our-menu" id="menu">
        <h1 class="heading">Our food menu</h1>
        <center><h3 class="sub-heading">~  see what we offer ~ </h3></center>

        <div class="menu-container">

            <div class="item">
                <div class="item-name">
                    <h2>Main Course</h2>
                    <img src="drinks.png">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super-Delicious Zuppa Toscana</h3>
                        <span class="dots"> </span>
                        <h3>₹300</h3>
                        <ul>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Sausage</a></li>
                            <li><a href="#">Spinach</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Super-Delicious Zuppa Toscana</h3>
                        <span class="dots"> </span>
                        <h3>₹500</h3>
                        <ul>
                            <li><a href="#">Mushrooms</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Sausage</a></li>
                            <li><a href="#">Spinach</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-name">
                    <h2>Soups & salads</h2>
                    <img src="drinks.png">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super-Delicious Zuppa Toscana</h3>
                        <span class="dots"> </span>
                        <h3>₹300</h3>
                        <ul>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Sausage</a></li>
                            <li><a href="#">Spinach</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Super-Delicious Zuppa Toscana</h3>
                        <span class="dots"> </span>
                        <h3>₹500</h3>
                        <ul>
                            <li><a href="#">Mushrooms</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Sausage</a></li>
                            <li><a href="#">Spinach</a></li>
                        </ul>
                    </div>
                </div>
           
     </div>
     <div class="item">
        <div class="item-name">
            <h2>Drinks</h2>
            <img src="drinks.png">
        </div>
        <div class="item-body">
            <div class="item-menu">
                <h3>Super-Delicious Zuppa Toscana</h3>
                <span class="dots"> </span>
                <h3>₹300</h3>
                <ul>
                    <li><a href="#">Chicken</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Spinach</a></li>
                </ul>
            </div>
            <div class="item-menu">
                <h3>Super-Delicious Zuppa Toscana</h3>
                <span class="dots"> </span>
                <h3>₹500</h3>
                <ul>
                    <li><a href="#">Mushrooms</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Spinach</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="item-name">
            <h2>Dessert</h2>
            <img src="drinks.png">
        </div>
        <div class="item-body">
            <div class="item-menu">
                <h3>Super-Delicious Zuppa Toscana</h3>
                <span class="dots"> </span>
                <h3>₹300</h3>
                <ul>
                    <li><a href="#">Chicken</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Spinach</a></li>
                </ul>
            </div>
            <div class="item-menu">
                <h3>Super-Delicious Zuppa Toscana</h3>
                <span class="dots"> </span>
                <h3>₹500</h3>
                <ul>
                    <li><a href="#">Mushrooms</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Spinach</a></li>
                </ul>
            </div>
        </div>
    </div>
        </div>
    </section>
    <!--Our menu section End-->

    <!-- our team section start -->
  
    <section class="out-team" id="team">
        <h1 class="heading">our talented chef</h1>
        <center>
            <h3 class="sub-heading"> ~ Experience $ Enthusiasm ~</h3>
    
        </center>
        <div class="our-chef">
            <div class="item">
                <div class="image">
                    <img src="our-chef-1.jpg" alt="">
                </div>

                <div class="chef-info">
                    <!-- <div>
                        <h3>Raju Patra</h3>
                        <span>master chef</span>

                        <ul>
                            <li><a href="$"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="our-chef-2.jpg" alt="">
                </div>

                <div class="chef-info">
                    <!-- <div>
                        <h3>Sanjeev Kapoor</h3>
                        <span>master chef</span>

                        <ul>
                            <li><a href="$"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="our-chef-3.jpg" alt="">
                </div>

                <div class="chef-info">
                    <!-- <div>
                        <h3>Vikas Khanna</h3>
                        <span>master chef</span>

                        <ul>
                            <li><a href="$"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="$"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- our team section end -->

    <!-- reservation section start -->
    <div class="reservation" id="reservation">
        <div class="image">

        </div>
        <div class="form">
            <h1 class="heading">book a table</h1>
            <center><h3 class="sub-heading"></h3> ~ check out our place ~</center>
            <form>
                <div class="form-holder">
                    <div>
                        <select>
                            <option>1 people</option>
                            <option>2 people</option>
                            <option>3 people</option>
                            <option>4 people</option>
                        </select>

                        <input type="text" name="" placeholder="Time">
                        <input type="text" name="" placeholder="Phone">
                    </div>

                    <div>
                        <input type="text" name="" placeholder="Date">
                        <input type="text" name="" placeholder="Name">
                        <input type="email" name="" placeholder="email">
                    </div>
                </div>
                <center><a href="#" class="btn">Book now</a></center>

            </form>
        </div>
    </div>
    <!-- reservation section end -->

<!--new section start -->

<section class="blog" id="blog">
    <h1 class="heading">Latest news</h1>
    <center><h3 class="sub-heading"> ~ Greate artical ~ </h3></center>

    <div class="boc-container">
        <div class="box">
            <div class="image">
               <img src="post-thumb-4.jpg"> 
               <div>

                <div class="content">
                    <h3>PROFESSTIONAL LEVEL</h3>
                </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!--new section end -->
     <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 
        {
            delay: 7500,
            disableOnInteraction: false,
        },
        pagination: 
        {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop:true,
    });
    </script>
    <script type="text/javascript">
        let menu = document.querySelector('#menu');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
