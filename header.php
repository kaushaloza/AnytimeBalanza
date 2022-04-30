
<?php
            $con = mysqli_connect('localhost', 'root', '','anytimebalanza');
?>

    <!-- Creating navbar -->
     <section id="header">

    <!-- <div class="container-fluid"> -->
    <nav class="navbar navbar-expand-lg  navigation-bar">
        <div class="logo">
                <a class="navbar-brand" href="index.php"><img src="img/logo/cart.png" alt="brandLogo" id="logo"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="openNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link items"  href="index.php">Home</a>
                        </li>
                        <?php
                            // Select particular record 
                            $sql1 = "select * from category";
                            $rs1 = mysqli_query($con, $sql1);
                        ?>
                        <li class="nav-item dropdown">

                            <a class="nav-link items dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>

                            <!-- dropdown menu  -->

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                    while($row = mysqli_fetch_assoc($rs1))
                                    {
                                ?>
                                        <li><a class="dropdown-item" style="color:#001f3f;" href="#<?php echo $row['c_id'] ?>"> <?php echo $row['c_name'] ?> </a></li>
                                <?php
                                    }
                                ?>

                            </ul>

                        <!-- dropdown content over -->

                        </li>
                        <li class="nav-item">
                            <a class="nav-link items"  href="aboutus.php">AboutUs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link items" href="contactus.php">ContactUs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link items" href="feedback.php">Feedback</a>
                        </li>


                    </ul>
                </div>
            </nav>
        <!-- </div> -->
</section>