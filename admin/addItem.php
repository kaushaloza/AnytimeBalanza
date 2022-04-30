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
    <title>Document</title>
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
            box-sizing: border-box;
        }
        
        body{
            min-width: 100%;
            min-height: 100vh;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            /* background-image: url("../img/black-efil.jpg"); */
            background: url("../img/add_item.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            
           
            position:relative;
            /* overflow-y: hidden; */

        }
        option{
            outline: none;
            border: 1px solid #5856a3;
            margin-top: .3rem;
            width: 100%;
            padding: .5rem;

            border-radius: 10px;
        }
        #catselect{
            margin: .2rem;
            border-radius: 10px;
        }
        label{
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #5856a3;
            font-weight: 500;
            padding-bottom: .2rem;
            margin-bottom:.5rem;

        }

        .container{
            background:#F0FFFF;
            padding: 3rem;
          
            /* padding-top: 5rem; */
            position:relative;
            width: 100%;
            height: 80%;
            border-radius:50px;
            
        }

        input{
            outline: none;
            border: 1px solid #5856a3;
            margin-top: .3rem;
            width: 100%;
            padding: .1rem;
            
            border-radius: 10px;
        }

        textarea{
            outline: none;
            border: 1px solid #5856a3;
            width: 100%;
            margin-top: .3rem;
            padding: .1rem;

            border-radius: 10px;
        }
        #form{
            position: relative;
            width: 100%;
            height: 100%;
        }
        h1::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            background-color:#000;
            width: 60px;
            height: 3px;

        }

        #submit{
            background-color: #010154;
            padding: .2rem;
            cursor:pointer;
            margin-top:.7rem;
            font-size: 1.7rem;
            font-style: normal;
            color:#fff;

        }
        #H1{
            color:#010154;
        }

        #submit:hover{
            background-color: #0417C0;
            transform: translateY(-3px);
            transition: ease-in-out .1s;
            
        }
    </style>
</head>
<?php
            
            $con = mysqli_connect('localhost', 'root', '','anytimebalanza');
            // Select particular record 
            $sql = "select * from category";
            $rs = mysqli_query($con, $sql);
    ?>
<body>

        <?php

        include 'header-owner.php';
    ?>
    <br />
    <br />
  
    
    

    <div class="container" data-aos="fade-up">

        <form action="AddItemQuery.php" method="post" id="form">
        <h1 id = "H1">ADD NEW ITEM</h1>
            <label> Select Category :<select name="c_name" id="catselect" class="category"></label>
            <option value="select" selected disabled hidden>Select</option>
            
            <!-- <option value="cat1">Watch</option>
            <option value="cat2">Laptop</option>
            <option value="cat3">Shoes</option>
            <option value="cat4">Wear</option>
            <option value="cat5">Mobile-phone</option> --> 

            <?php 
                while($row = mysqli_fetch_assoc($rs))
                {
            ?>
                <option value = "<?php echo $row['c_id']; ?>">
                    <?php echo $row['c_name']; ?>
                </option>
            <?php    
            }
            ?>

            </select>
            <br>
            <label>Item Name <br><input type="text" placeholder="Enter Item name..." name="i_name" id="item-name"
                    class="category"></label>

            <br>
            <label>Price Of Item <br> <input type="text" id="price" placeholder="Enter Item price..." name="i_price" class="category"
                    id="price"></label>
            <br>
            <label>Description Of Item<br><textarea name="i_desc" class="" cols="39" rows="7"
                    placeholder="description Of Item....."></textarea></label>
            <br>
            <label>Photo Of Item <input type="file" name="i_photo" enctype="mutipart/form-data" class="category" id="file"></label>
            <br>

            <input type="submit" value="Submit" class="category" id="submit">
        </form>

    </div>
<br><br>
</body>
<script>
    AOS.init({
        duration:1000
    });
  </script>
</html>