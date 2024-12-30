<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/back9.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover,travel</span>
                    <h3>travel to lebanon</h3>
                    <a href="package.php" class="btn">disover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/back7.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover,travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">disover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/back6.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover,travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">disover more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<section class="services">

    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon1.png" alt="">
            <h3>adventures</h3>
        </div>

        <div class="box">
            <img src="images/icon2.png" alt="">
            <h3>tour giude</h3>
        </div>

        <div class="box">
            <img src="images/icon3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon6.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>

<section class="home-about">
    <div class="image">
        <img src="images/back1.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aperiam fugit quas ullam repellendus quam sapiente rerum obcaecati nam, excepturi dolorem, cupiditate, voluptatum alias minus deleniti culpa nisi aspernatur et.</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<section class="home-packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/pic1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure and ture</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, molestiae?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pic2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure and ture</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, molestiae?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pic3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure and ture</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, molestiae?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more">
        <a href="package.php" class="btn">load more</a>
    </div>

</section>

<section class="home-offer">
    <div class="content">
        <h3>upto 20% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempora sunt numquam ab similique necessitatibus non sint doloribus. Doloribus, sequi atque! Necessitatibus adipisci saepe autem sed quia possimus voluptatem delectus!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
    

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>