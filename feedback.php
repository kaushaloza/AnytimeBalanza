<!-- f_name : name of the user -->
<!-- f_email : email of user -->
<!-- f_message : message of the user -->

<html>

<head>
<link rel="shortcut icon" href="img/fevicon.png" type="image/jpg" >


    <?php 
        include('links.html');
    ?>
   
    <!-- javascript aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- javascript aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Linking feedback css file -->
    <link rel="stylesheet" href="feedback.css">

    <!-- Importing bootstrap css file over here: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
   
</head>

<body>

    <!-- Creating navbar -->

    <?php
        include('header.php');
    ?>
    
    <!-- feedback form -->
    <div class="container">
        <!-- <div class="feedback-image">
            <img src="img/rocket.png" class="img-thumbnail" alt="">
        </div> -->
        <form method="POST" action="FeedbackQuery.php">
        <div class="row">
            <h2 class="text-center">Feedback Form</h2>
            <div class="col-md-6">
                <div class="form-group" data-aos="fade-left">
                    <label for="name">Enter Your name:</label>
                    <input type="text" name="f_name" id="name" placeholder="Enter your name.." class="form-control" required/>
                </div>
                <div class="form-group" data-aos="fade-right">
                    <label for="email">Enter email:</label>
                    <input type="email" name="f_email" id="email" placeholder="Enter your email.." class="form-control" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" data-aos="fade-left">
                    <p>Did you satisfy with our service?</p>
                    <label for="1">
                    Yes<input type="radio" name="1" class="one">
                    No<input type="radio" name="1" class="one">
                </label>
                </div>
                <div class="form-group" data-aos="fade-right">
                    <p>Rate our website</p>
                    <label for="2">
                    1<input type="radio" name="2" class="t2">
                    2<input type="radio" name="2" class="t2">
                    3<input type="radio" name="2" class="t2">
                    4<input type="radio" name="2" class="t2">
                    5<input type="radio" name="2" class="t2">
                </label>
                   
                </div>
            </div>
            <label for="msg">Feedback:</label>
            <textarea data-aos="fade-in" name="f_message" id="msg" cols="20" rows="5" placeholder="type your message here..."></textarea>
        </div>
        <div class="form-group sButton" data-aos="fade-up">
            <input type="submit" class="btn btn-primary btn-lg" value="Submit Feedback" id="submitFeedbackBtn">
        </div>
        </form>
    </div>




   

   
</body>
<script>
    AOS.init({
        offset:5,
        duration:700,
        delay:100
    });
  </script>
</html>