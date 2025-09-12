<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

    <div class="content">
            <h3>why choose us?</h3>
            <p>Choose Shopever for a seamless shopping experience with high-quality products and secure transactions. Enjoy fast delivery, competitive prices, and excellent customer service. Benefit from convenient payment options, exclusive deals, and hassle-free returns. Trust Shopever for all your online shopping needs.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>At Shopever, we provide a diverse range of high-quality products, secure transactions, fast delivery services, competitive prices, excellent customer service, convenient payment options, exclusive deals, and hassle-free returns.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>who we are?</h3>
            <p>At Shopever, we are a dedicated team committed to providing an exceptional online shopping experience. Our mission is to offer high-quality products, secure transactions, and excellent customer service to meet the diverse needs of our valued customers. We strive to create a platform that is convenient, reliable, and enjoyable for all shoppers.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"I'm thoroughly impressed with Shopever's customer service. When I encountered an issue with my order, their support team responded promptly and resolved the issue with professionalism and efficiency. It's refreshing to see a company prioritize customer satisfaction like this."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Aarav</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"Shopever exceeded my expectations! The user-friendly interface made browsing a breeze, and the range of products available was impressive. Plus, the checkout process was seamless, and my order arrived earlier than expected. Highly recommend!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Aisha</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"Shopever has become my go-to destination for online shopping. The quality of the products is consistently excellent, and the prices are unbeatable. I appreciate the variety of payment options available, which makes shopping here even more convenient. Keep up the great work!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dev</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"Navigating through Shopever's website was a delight. The layout is clean and intuitive, making it easy to find exactly what I was looking for. I also appreciate the regular updates on my order status, which kept me informed every step of the way. Overall, a fantastic shopping experience!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Priya</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>"I've had nothing but positive experiences with Shopever. Not only do they offer a wide selection of products, but their shipping is incredibly fast. I've ordered from them multiple times, and each time, my items arrived well-packaged and in perfect condition. I couldn't be happier!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Arjun</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"Shopever has earned my trust as a reliable online retailer. The transparency in pricing, coupled with their commitment to customer satisfaction, sets them apart from other e-commerce platforms. Whether it's clothing, electronics, or home goods, I always turn to Shopever first. Highly recommended for anyone looking for a stress-free shopping experience!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anaya</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>