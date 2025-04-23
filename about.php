<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/9b315b9c54.js" crossorigin="anonymous"></script>
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require("header.php"); ?>



<div class="heading" style="background:url(images/Head_Bg.jpg) no-repeat">
<h1>About Us</h1>
</div>

<section class="about" >

<div class="image">
    <img src="images\travelhub.png" alt="">
</div>

<div class="content">
    <h3>Why Choose Us??</h3>
    <p>The Agency with its professionally managed travel engine specializes mainly in organizing Adventure, Cultural, Religious, hill station & wildlife tours in India through a sprawling network.<br>
Customers Satisfaction Is Our Main Motto And At A reasonable Price We Try Our Best To Give The Best Services To Our Customers.</p>

    <div class="icons-container">
    <div class="icons">
        <i class = "fas fa-map"></i>
    <span>Top Destinations</span>
    </div>

    <div class="icons">
        <i class = "fas fa-hand-holding-usd"></i>
    <span>Affordable Price</span>
    </div>

    <div class="icons">
        <i class = "fas fa-headset"></i>
    <span>24/7 Service</span>
    </div>


</div>
</div>
</section>

<section class="reviews">
    <h3 class="heading-title">Clients reviews </h3>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Wonderfull services..!! It Was Worth it..!!</p>
            <h3>Emily</h3>
            <span>traveller</span>
            <img src="images/emily.jpg" alt="">
        </div>


        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <p>Amazing Servcies Provided!! Thank You So Much For Making Our Journey Fantastic..!!</p>
            <h3>Orion</h3>
            <span>traveller</span>
            <img src="images/orion.jpg" alt="">
        </div>

        
        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>It Was Awesome And Fantastic..!! I'm Ready For The Next Adventure!!</p>
            <h3>Hari</h3>
            <span>traveller</span>
            <img src="images/Hari.jpg" alt="">
        </div>


        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
            </div>
            <p>Whoever Reading This Review I Must Say You Must Try This Their Services Are The Best..!!</p>
            <h3>Lily</h3>
            <span>traveller</span>
            <img src="images/Lily.jpg" alt="">
        </div>

        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <p>wonderfull services..!!</p>
            <h3>RJ</h3>
            <span>traveller</span>
            <img src="images/RJ.jpg" alt="">
        </div>

        
        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-sta"></i>

            <p>wonderfull services..!! Thank You So Much..!!</p>
            <h3>Mike</h3>
            <span>traveller</span>
            <img src="images/Mike.jpg" alt="">
        </div>
        </div>
    </div>
    </div>
</section>

<?php require "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>