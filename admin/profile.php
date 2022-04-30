<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
        
        header("location : login.html");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>

    
    <!-- Importing bootstrap css file over here: -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Importing bootstrap js file over here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Importing font awesome file over here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Importing jquery cdn over here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


      
    <!-- Importing local css file over here -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="profile.css">

    
</head>
<body>
       
  
           
       <?php

       include 'header-owner.php';

       ?>
    

    <?php
            
            $con = mysqli_connect('localhost', 'root', '','anytimebalanza');
            // Select particular record 

            if(!isset($_SESSION['o_name'])){
                ?>
                <script>
                    alert("NO Ok");
		            window.location.href = "login.html";   
                </script>
                <?php
                // alert("No Never");
                // header('location:login.php');
                // header("location : login.html");
            }

            $sql = "select * from admin_details where a_fname = '" . $_SESSION['o_name'] . "'";
            $rs = mysqli_query($con, $sql);
            
            $row = mysqli_fetch_assoc($rs)
    ?>

    <section id="profile">

        <div class="container profile-container">
            <div class="row">
                <div class="col-lg-6">
               
                    <img src="../img/profile/<?php echo $row['a_image']; ?>" alt="" class="p_img img-fluid">
               
            </div>

                <div class="col-lg-6">
                    <!-- <div class="user_profile_details"> -->
                    <h1><?php echo $row['a_fname']; ?> <?php echo $row['a_lname']; ?> </h1>
                    <p> <?php echo $row['a_role']; ?> </p>
                    <hr />
                    <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis officiis, reiciendis a consequatur fuga non.</p> -->
                   
                    <p class="p_birthday"> <i class="fa-solid fa-calendar"></i> <?php echo $row['a_bdate']; ?> </p>

                    
                    <p class="p_number"><i class="fa-solid fa-phone"></i> <?php echo $row['a_phoneno']; ?> </p>

                    
                    <p class="p_email"><i class="fa-solid fa-envelope"></i> <?php echo $row['a_email']; ?> </p>


                   
                    <!-- <p class="p_address"> <i class="fa-solid fa-house"></i> Home</p> -->

                    <!-- <i class="fa-brands fa-facebook social-icon"></i>
                    <i class="fa-brands fa-instagram social-icon"></i>
                    <i class="fa-brands fa-linkedin social-icon"></i> -->
                </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- <div class="container profile-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="profile-img">
                        <img src="/img/profile.png" alt="profile Image" class="img-fluid">
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="user-details">
                        <h3>Kaushal Oza</h3>
                        <p>FullStack Developer</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dolorem ratione consequuntur possimus atque iure quis aperiam quas delectus deserunt. Quibusdam eaque fuga hic, voluptates quia eligendi ex ullam in.</p>

                        <i class="fa-solid fa-calendar"></i>
                        <p>17-05-2002</p>
                        <i class="fa-solid fa-phone"></i>
                        <p>1234567890</p>
                        <i class="fa-solid fa-envelope"></i>
                        <p>kaushaloza8@gmail.com</p>
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                    </div>

                
                    
                
          
        </div> -->
    </section>
 
</body>
</html>