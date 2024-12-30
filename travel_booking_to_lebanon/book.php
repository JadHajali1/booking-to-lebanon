<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="heading" style="background:url(images/back13.jpg)">
    <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>first name :</span>
                <input type="text" placeholder="Enter Your First Name" name="fname">
            </div>

            <div class="inputBox">
                <span>last name :</span>
                <input type="text" placeholder="Enter Your Last Name" name="lname">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Enter Your Email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="Enter Your Phone Number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter Your address" name="address">
            </div>

            <div class="inputBox">
                <span>number traviling :</span>
                <input type="number" placeholder="Number Of Passengers" name="passengers">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>


    

<?php include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>
    
</body>
</html>