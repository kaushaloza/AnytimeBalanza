<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS ABOUT THE PRODUCT</title>
    <link rel="shortcut icon" href="img/fevicon.png" type="image/jpg" >


    <!-- Importing bootstrap css file over here: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Importing bootstrap js file over here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Importing font awesome file over here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Importing jquery cdn over here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Importing owl carousel css over here -->
    <link rel="stylesheet" href="owl.carousel.min.css">

    <!-- Importing owl carousel js -->
    <script src="/js/owl.carousel.min.js"></script>

    <!-- Importing local css file over here -->
    <link rel="stylesheet" href="style.css">

    <!-- Importing local js file over here -->
    <script src="/js/index.js"></script>
</head>

<body>

    <?php 
        include('header.php');
    ?>    

    <?php
        $id = $_GET['id'];
        $sql = "select * from item where i_id =".$id;
        $rs = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($rs);
    ?>
        
    <!-- description of every product -->
    <section id="description">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-div">
                        <img class="product-img" src="img/category/<?php echo $row['i_profile']; ?>" alt="ProductImage">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details">
                        <h4 class="product-title"><?php echo $row['i_name']; ?></h4>
                        <br/>

                        <?php
                            $price = $row['i_price']; 
                            if($price <= 500){
                                $fPrice = $price+197;
                            }
                            else{
                                $fPrice = $price+517;
                            }
                                                    
                        ?>
                        <span class="product-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $price; ?></span>
                        <span class="product-fake-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fPrice; ?></span>

                        <br>
                        <br>
                        <p class="product-info">Description</p>
                        <p>
                        <?php echo $row['i_detail']; ?>
                        </p>

                        <br>
                        <br>
                        <p class="ratings">Ratings and Reviews:</p>
                        <p><span class="rating-value">4.5</span></p>


                        <i class="fa-solid fa-star rating-icon"></i>
                        <i class="fa-solid fa-star rating-icon"></i>
                        <i class="fa-solid fa-star rating-icon"></i>
                        <i class="fa-regular fa-star-half-stroke rating-icon"></i>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>