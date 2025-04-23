<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9b315b9c54.js" crossorigin="anonymous"></script>
    <title>About</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    
</head>
<body>

<?php require "header.php"; ?>


<div class="heading" style="background:url(images/Head_Bg.jpg) no-repeat">
<h1>Book Now</h1>
</div>
<section class="booking">
    <h1 class="heading-title">Book Your Trip</h1>
    <form action="book_form.php" method="post" class="book-form" onsubmit="return handleSubmit(event)">


    <div class="flex">
        <div class="inputBox">
            <span>name</span>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
        </div>

        <div class="inputBox">
            <span>email</span>
            <input type="email"id="email" name="email" placeholder="Enter Your Email" required>
        </div>

        <div class="inputBox">
            <span>phone</span>
            <input type="tel" id="phone" name="phone"  placeholder="Enter Your Phone Number" maxlength="10" required>
        </div>

        <div class="inputBox">
            <span>address</span>
            <input type="text" id="address" name="address" placeholder="Enter Your Address" required>
        </div>


        <div class="inputBox">
            <span>where to</span>
            <input type="text" id="tour_package" name="tour_package" placeholder="Place You Want To Visit" required>
        </div>

        <div class="inputBox">
            <span>how many</span>
            <input type="number" id="guests"  name="guests" placeholder="Number Of Guests" min="1" max="3" required>
        </div>

        <div class="inputBox">
            <span>arrivals</span>
            <input type="date" id="arrivals" name="arrivals" required>
        </div>

        <div class="inputBox">
            <span>leaving</span>
            <input type="date"  id="leaving" name="leaving" required>
        </div>

        <div class="inputBox">
            <span>Package Price</span>
            <input type="text" value = "12,000" id="package_price" name="packageprice">
        </div>

        <div class="inputBox">
            <span>Card Number</span>
            <input type="number"  id="card" name="card" placeholder="1234 5678 9101 1121" required>
        </div>

        <div class="inputBox">
            <span>Expiry Date</span>
            <input type="month"  id="expiry" name="expiry" required>
        </div>

        <div class="inputBox">
            <span>CVV</span>
            <input type="password"  id="cvv" name="cvv" placeholder="***" required>
        </div>
    </div>

    <input type="submit" name="submit" class="btn" value="Submit / pay">

    </form>
</section>



<?php require "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>