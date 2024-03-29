<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Blek Garage</title>

    <!-- FONT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
    
    <!-- Header -->
    <section class="header">
        
        <a href="index.php" class="logo"><i>Blek<span>Garage</span></i></a>
        
        <!-- NAV Bar -->
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="project.php">Cards of Custom</a>
            <a href="error.php">Shop</a>
            <a href="about.php">Community</a>
            <a href="error.php">Member Area</a>
        </nav>

        <div id="menu-btn" class="fas fa-gear"></div>
    </section>
    <!-- END HEADER -->
    <!-- Section Home -->
    <section class="home">
        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(assets/harley-davidson-LUWVMSyNsR4-unsplash.jpg) no-repeat;" >
                    <div class="content">
                        <span>Lorem.</span>
                        <h3>Community</h3>
                        <a href="about.php" class="btn">Discover</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(assets/gijs-coolen-pXf3txdLbSw-unsplash.jpg) no-repeat;" >
                    <div class="content">
                        <span>Lorem.</span>
                        <h3>Shop</h3>
                        <a href="project.php" class="btn">Discover</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(assets/revolt-sAC1bmFCUrA-unsplash.jpg) no-repeat;" >
                    <div class="content">
                        <span>Lorem.</span>
                        <h3>Cards of Custom</h3>
                        <a href="project.php" class="btn">Discover</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- END HOME -->
    <!-- Section about -->
    <section class="home-about">
        <div class="image">
            <img src="assets/jusdevoyage-C9nDxzGKXgM-unsplash.jpg" alt="">
        </div>

        <div class="content">
            <h3>Our Story</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure molestiae quaerat tempore optio ullam id. Maxime quam fuga repellat eaque nesciunt.</p>
            <a href="about.php" class="btn">Read More . . .</a>
        </div>
    </section>
    <!-- End Section About -->
    <!-- Section Customized -->
    <section class="home-customized">
        <h1 class="heading-title">Top Project</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/modifikasi-motor.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Eyes on Me</h3>
                    <p>Makes everythings looks noob and always shinny</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/matthew-de-zen-sdcOLRpg6js-unsplash.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Scrambler Egg</h3>
                    <p>Like Breakfast Like Me</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/evgeny-ndn-iCbBwKuv22Y-unsplash.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Batman</h3>
                    <p>Justice may be blind, but it can see in the dark</p>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="project.php" class="btn">Cards of Custom</a></div>
        <a href="user.php" class="btn">Join Our Membership</a>
    </section>
    <!-- End Customized -->
    <!-- FOOTER -->
    <section class="footer">
        
        <div class="credit">2023 Copyright.Created by <span>Blek</span></div>
        
    </section>
        <!-- END FOOTER -->
        
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--Javascript  -->
<script src="script.js"></script>
</body>
</html>