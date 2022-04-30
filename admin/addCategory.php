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
    <title>Register NEW Category</title>
    <!-- javascript aos css -->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- javascript aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Akshar&display=swap');
        * {
            margin: 0px;
            padding: 0px;
            font-family: "Poppins", sans-serif;
        }

        body{
            background-image: url("../img/black-efil.jpg");
            background-repeat: no-repeat;
            min-width: 100%;
            min-height: 100vh;
            background-position: center;
            overflow-y: hidden;
        }
        #add-category{
            position:relative;
            min-width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            position:relative;
            /* background-color: aqua; */
            width: 200%;
            background-color:#F0FFFF;
           
           
          /*background-color:#fff;*/
           box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
           padding: 8rem;
            border-radius:50px;
        }

        .container h2{
            font-size: 2.5rem;
            /*color: #6842ff;*/
            color:#010154;
            padding-bottom:3rem;
            
            position: relative;
            /* border-bottom:1px solid #582ffc;  */
        }

        h2::before{
            content: '';
            position:absolute;
            left: 0;
            top:50px;
            /* bottom: 0; */
            
            width: 3rem;
            height: 3px;
            /*background-color: #6842ff;*/
            background-color:#000;
        }
        
       span{
           font-weight: 700;
           color: #5856a3;
           letter-spacing: 1px;
           font-size: 1.5rem;

       }

       .form{
           position:relative;
           width: 100%;
           height: 100%;
         
       }
       .input{
           position:relative;
           width: 100%;
       }

       .input input{
           outline: 1px;
           border: 1px solid #5856a3;
           border-radius: 12px;
           letter-spacing: 1px;
           padding:.5rem;
           width: 80%;
           margin-top: 1rem;
           margin-bottom: 1rem;
       }

       #btn{
           border-radius: 1rem;
           /*background-color: #ff6b7c;*/
           background-color: #010154;
           cursor: pointer;
           font-style: normal;
           font-weight: 600;
           font-size: 1.3rem;
           width:200px;
           color:#fff;
           /* align: center; */
           /* height: 50px; */
       }
       #btn:hover{
           background-color: #0000FF;
           transform: translateY(-3px);
           transition: ease-in-out .1s;

       }

       @media (max-width:620px){

        .container h2{
            font-size: 1rem;
            color:#010154;
            padding-bottom:1rem;
            
            position: relative;
            /* border-bottom:1px solid #582ffc;  */
        }

        h2::before{
            content: '';
            position:absolute;
            left: 0;
            top:25px;
            /* bottom: 0; */
            
            width: 2rem;
            height: 3px;
            background-color:#000;
        }

            
       span{
           font-weight: 700;
           color: #5856a3;
           font-size: 1rem;
           letter-spacing: 1px;
       }

       .input input{
           outline: none;
           border: none;
           border-radius: 12px;
           letter-spacing: 1px;
           padding:.3rem;
           width: 100%;
           margin-top: 1rem;
           margin-bottom: 1rem;
       }
       #btn{
           border-radius: 5px;
           background-color: #1E90ff;
           cursor: pointer;
           font-style: normal;
           font-weight: 600;
           font-size: 1rem;
       }
           
       }
    </style>

</head>

<body>
    <?php

    include 'header-owner.php';

    ?>
    
    <section id="add-category">
        <div class="container" data-aos="fade-up">
            <form action="AddCategoryQuery.php" method="POST">
            <h2>Register a new category</h2>
            <div class="form" data-aos="fade-up">
                <div class="input" data-aos="fade-up">
                    <span>Enter Category name:</span>
                    <input type="text" name="c_name" id="category-name">
                </div>
                <div class="input" data-aos="fade-up">
                    <!-- <span>Enter Category name:</span> -->
                    <input type="submit" name="c_submit" id="btn">
                </div>
            </div>
    </form>
        </div>
        
    </section>


</body>


<script>
    AOS.init({
        duration:1000
    });
  </script>
</html>