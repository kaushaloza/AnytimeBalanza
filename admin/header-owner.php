<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Section</title>
    <link rel="shortcut icon" href="../img/logo/favicon_cart.png" type="image/jpg" >
    <?php
        include 'links.html';
    ?>

    <link rel="stylesheet" href="style-admin.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg  profile-navbar">
           
           
        <a class="navbar-brand" href="../index.php"><img src="../img/logo/final-logo.jpg" alt="brandLogo" id="logo"></a>
   

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


      <div class="collapse navbar-collapse" id="openNavbar">

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" href="profile.php" id="clr">Home</a>

            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="addCategory.php" id="clr">Add Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addItem.php" id="clr">Add Items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewCatItem.php" id="clr">View Category & Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registration.html" id="clr">Add Owner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="LogoutQuery.php" id="clr">LogOut</a>
            </li>
           

        </ul>
      </div>
</nav>
</body>
</html>