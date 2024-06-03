<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- awsome font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--header section-->
<section class="header">
    <a href="index.php" class="logo">JustTravel</a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">booking</a>
    </nav>
    <div id="menu-btn" class="fas fa bars"></div>
</section>

<div class="heading" style="background:url(image/book-page.jpg) no-repeat" >
    <h1>Book now</h1>
</div>





<!--booking section-->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="bookform">
        <div class="flexes">
            <div class="inputbox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" autocomplete="given-name">
            </div>
            <div class="inputbox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" autocomplete="off">
            <div class="inputbox">
                <span>phone :</span>
                <input type="number" placeholder="enter your phone number" name="phone" autocomplete="off">
            </div>
            <div class="inputbox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" autocomplete="off">
            </div>
            <div class="inputbox">
                <span>Destination :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="no. of guest" name="guest">
            </div>
            <div class="inputbox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputbox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>






<!--footer-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="index.php"><i class="fa fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fa fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fa fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fa fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fa fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fa fa-angle-right"></i>about us</a>
            <a href="#"><i class="fa fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fa fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <a href="#"><i class="fa fa-phone"></i>+23-34443-4432</a>
            <a href="#"><i class="fa fa-phone"></i>+91-112365-342</a>
            <a href="#"><i class="fa fa-envelope"></i>ranchi, jharkhand 831004</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook  </a>
            <a href="#"><i class="fab fa-twitter"></i>twitter  </a>
            <a href="#"><i class="fab fa-instagram"></i>instagram  </a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin  </a>
        </div>
    </div>
    <div class="credit"> created by <span>Sumit kumar munda</span> | all right reversed!</div>

</section>


    <!-- swipper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js link-->
    <script src="js/script.js"></script>
</body>
</html>