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

    <!-- Importing bootstrap css file over here: -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Importing bootstrap js file over here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Importing local css file over here -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url("../img/viewCategory.jpg");
            background-position: center;
            background-repeat: no-repeat;
        }
        i{
            color: #000;
            margin-top: 5%;
        }
        table {
            background-color: #fff;
            width: 80%;
            height: auto;
            border: 3px solid black;
            margin-left: 10%;
            margin-right: 10%;
        }
        th{
            border: 1px solid #000;
            background-color: #c2bebe;
        }
        tr{
            border-bottom: 1px solid #c2bebe;
        }
        td{
            font-family: 'Poppins', sans-serif;
            color: #4d4c75;
           
            

        }
        #view{
            position: relative;
        }

        #home_link{
            font-size:1rem;
        }
        

        
       
    </style>

    <!-- Importing local js file over here -->
    <script src="/js/index.js"></script>




</head>

<body style="background-color: white;">

<?php
            
            $con = mysqli_connect('localhost', 'root', '','anytimebalanza');
            // Select particular record 
            $sql1 = "select * from category";
            $rs1 = mysqli_query($con, $sql1);
?>


    <section style="width: 80%; margin-left: 10%; margin-right: 10%;" id="view">
    <span id="homeButton"><a href="profile.php" title="Go to Home"><i class="fa-solid fa-house"></i></a></span>
        <table>

        
        <?php 
        while($row1 = mysqli_fetch_assoc($rs1))
        {
        ?>
            <tr>
                <th>
                    
                    <?php echo $row1['c_name']; ?> 
                    
                </th>
            </tr>

            <?php 
                $sql2 = "select i_name from item where c_id = ".$row1['c_id'];
                $rs2 = mysqli_query($con, $sql2);
            ?>
            
            <?php 
                while($row2 = mysqli_fetch_assoc($rs2))
                {
            ?>
                <tr>
                <td>
                    ~ <?php echo $row2['i_name']; ?>
                </td>
                </tr>
            <?php
                }
            ?>
            
            
        <?php    
        }
        ?>

        </table> 

    </section>
    
    <section style="width: 80%; margin-left: 10%;" id="view">
        <a id="home_link" href="profile.php" style="font-size: 20px;">Home</a>
    <br><br>
    </section>

</body>

</html>