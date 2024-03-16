<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<?php @include 'header.php'; ?>

    <section class="heading">
        <h3>about us</h3>
        <p> <a href="home.php">home</a> / about </p>
    </section>


    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="./2 about.jpg" alt="" width="" height="">
            </div>

            <div class="content">
                <h3>why choose us ?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate obcaecati dolorum voluptas totam? Ut commodi optio, facilis distinctio repudiandae eum.</p>
                <a href="shop.php" class="btn">shop now</a>
            </div>

        </div>

        <div class="flex">

            <div class="image">
                <img src="./1 about.jpg" alt="" width="" height="">
            </div>

            <div class="content">
                <h3>what we provide ?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate obcaecati dolorum voluptas totam? Ut commodi optio, facilis distinctio repudiandae eum.</p>
                <a href="contact" class="btn">contact us</a>
            </div>
            
        </div>

        <div class="flex">

            <div class="image">
                <img src="./3 about.jpg" alt="" width="" height="">
            </div>

            <div class="content">
                <h3>who we are ?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate obcaecati dolorum voluptas totam? Ut commodi optio, facilis distinctio repudiandae eum.</p>
                <a href="#reviews" class="btn">client reviews</a>
            </div>
            
        </div>
    </section>

    <section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="./client 2" alt="" width="" height ="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere corporis alias nihil in rerum aliquid autem ipsam ex. Veritatis, labore.</p>

            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <h3>john deo</h3>
        </div>
        
        <div class="box">
            <img src="./client 3" alt="" width="" height ="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere corporis alias nihil in rerum aliquid autem ipsam ex. Veritatis, labore.</p>

            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="./client 4" alt="" width="" height ="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere corporis alias nihil in rerum aliquid autem ipsam ex. Veritatis, labore.</p>

            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <h3>john deo</h3>
        </div>
    </div>
    </section>

<?php @include 'footer.php'; ?>
    
</body>

<script src="./script.js"></script>
</html>