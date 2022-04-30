<!DOCTYPE html>
<html lang="en">

<head>
<style>
    h2 a{
        color: red;
    }
</style>
<link rel="shortcut icon" href="img/logo/favicon_cart.png" type="image/jpg" >

    <?php
        include('links.html');
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body class="indexbody">
    <!-- Creating navbar -->
    <?php 
        include('header.php');
    ?>

    <!-- Body part  -->

    <!-- making image slider -->

    <div id="imageSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>

        <div class="carousel-inner">

            <!-- first item -->
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/offer_2.png" alt="First slide" class="d-block w-100 offer_image">
                <div class="carousel-caption d-none d-md-block">
                        <!-- <h4>First slide</h4>
                        <p>Some text over here</p> -->
                </div>
            </div>

            <!-- second item -->
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/offer_3.png" alt="second slide" class="d-block w-100 offer_image">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h4>Second slide</h4>
                    <p>Some text over here</p> -->
                </div>
            </div>

            <!-- third item -->
            <div class="carousel-item">
                <img src="img/offer_2.png" alt="third slide" class="d-block w-100 offer_image">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h4>third slide</h4>
                    <p>Some text over here</p> -->
                </div>
            </div>




        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- owl carousel for product display  -->

    <?php
        // Select particular record 
        $sqlCat = "select * from category";
        $rsCat = mysqli_query($con, $sqlCat);
    
        while($rowCat = mysqli_fetch_assoc($rsCat))
        {
    ?>

    <section id="<?php echo $rowCat['c_id'];?>" >
        <h1 class="main-product-heading" data-aos="fade-right"> <?php echo $rowCat['c_name']; ?><i class="fa-solid fa-cart-arrow-down cart"></i></h1>
       
            <div class="container-fluid">

                <div class="slider align-items-lg-center align-items-md-center align-items-sm-center">
                    <div class="owl-carousel owl-theme owl-height">
                    

                    <?php 
                        $sqlItem = "select * from item where c_id = ".$rowCat['c_id'];
                        $rsItem = mysqli_query($con, $sqlItem);
                    ?>
            
                    <?php 
                        while($rowItem = mysqli_fetch_assoc($rsItem))
                        {
                    ?>
                        
                <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="img/category/<?php echo $rowItem['i_profile']; ?>" class="slider-img" alt="image1">
                        </div>
                        <h5 class="text-center slider-card-item-name"><?php echo $rowItem['i_name']; ?></h5>
                        <!-- <p class="text-center p-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, quaerat corrupti? Ad omnis laudantium sint vero earum, dicta fugiat repellat!</p> -->
                        <!-- <a href="/details.html"><button
                                class="btn btn-outline-dark explore-btn align-self-md-center">Explore!</button></a> -->
                            <div class="explore-btn">
                        <a href="details.php?id=<?php echo $rowItem['i_id']; ?>"><button type="button" class="btn btn-block btn-outline-dark">Explore!</button></a>
                        </div>

                    </div>            
            
                    <?php
                        }
                    ?>

                    </div>
                </div>
            </div>
    </section>
    
    <?php
        }
    ?>


    <!-- footer section -->

        <?php
            include('footer.php');
        ?>

    <div class="end-footer">
        <!-- <ul class="end-footer-list">
          <li>If you are a owner then click<a href="login.html">Here</a></li>
          <li>To register a new owner click<a href="registration.html">Here</a></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="aboutus.html">About-us</a></li>
          <li><a href="#">contact</a></li>
        </ul> -->
        <h2 id="owner-heading" class="text-center">Are you an owner? Then click <a href="admin/login.html">Here</a></h2>

    </div>

</body>
<script>
    AOS.init({
        duration:1000,
        offset:50
    });
  </script>
<script>
    // for owl carousel

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 5,
        responsiveClass: true,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        center: true,
        responsive: {
            0: {
                items: 2,

            },
            600: {
                items: 3,

            },
            1000: {
                items: 5,

            }
        }
    })
</script>
</html>