<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/fevicon.png" type="image/jpg" >

    <!-- Importing bootstrap css file over here: -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Importing bootstrap js file over here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Importing font awesome file over here -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Importing jquery cdn over here -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
<!-- javascript aos css -->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- javascript aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="style.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Akshar&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
          
            background-position: center;
            background-repeat: no-repeat;
            min-width: 100%;
            min-height: 100vh;
            font-family: 'poppins', sans-serif
        }

        h1 {
            margin-bottom: 5%;
            color: white;
        }

        label {
            color: #5856a3;
            font-weight: bold;
           
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
            background-color: #130f40;
            color: #fff;    
        }

        .btn-send:hover{
            transform: translateY(-4px);
            transition: transform ease-in-out .1s;
            color: #fff;
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px
        }

        .card {
            margin-left: 10px;
            margin-right: 10px
        }

        .container{
            width: 100%;
            height: 100%;
        }
        #contact-form {
            background-color: #fff;
            /* padding: 6% 10% 6% 10%; */
            width: 100%;
            height: 100%;
            padding: 3  rem;
            margin-bottom: 10%;
            border-radius: 15px;
            /* border: 5px solid rgba(30, 100, 200, 300); */
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .form-control{
            padding: 1rem;
            border: 1px solid #686de0;
        }
      
       
      
    
    </style>
</head>

<body>  
    <?php
        include 'header.php';
    ?>

    <div class="container">
        <div class=" text-center mt-5 ">
            <h1 class="allheadings">Contact us <i class="fa-solid fa-comment-arrow-up-right"></i></h1>
        </div>

        <div class="container" data-aos="fade-right">

            <!-- form start here -->
            
            <form id="contact-form" role="form" action="ContactUsQuery.php" method="post">

                <div class="controls" data-aos="fade-right">

                    <!-- fullname -->

                    <div class="row" >
                        <div class="col-md-12" data-aos="fade-right">
                            <div class="form-group"> <label for="form_name">Fullname</label> <input id="form_name"
                                    type="text" name="cu_fullname" class="form-control"
                                    placeholder="Please enter your fullname" required="required"
                                    data-error="Firstname is required."> </div>
                        </div>

                    </div>

                    <!-- email -->
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right">
                            <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email"
                                    type="email" name="cu_email" class="form-control"
                                    placeholder="Please enter your email *" required="required"
                                    data-error="Valid email is required."> </div>
                        </div>

                        <!-- choose option -->
                        <div class="col-md-6" data-aos="fade-right">
                            <div class="form-group"> <label for="form_need">Please specify your need
                                    *</label> <select id="form_need" name="cu_issue" class="form-control"
                                    required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>--Select Your Issue--</option>
                                    <option>Rendering issue</option>
                                    <option>page loading error</option>
                                    <option>wrong information issue</option>
                                    <option>Other</option>
                                </select> </div>
                        </div>
                    </div>

                    <!-- other message -->
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> <label for="form_message">if you choose other option then please
                                    fill this</label>
                                <textarea id="form_message1" name="cu_othermessage" class="form-control"
                                    placeholder="Write your message here." rows="3"
                                    data-error="Please, leave us a message."></textarea>
                            </div>

                        </div> -->

                        <!-- message -->
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-right">
                                <div class="form-group"> <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="cu_message" class="form-control"
                                        placeholder="Write your message here." rows="3" required="required"
                                        data-error="Please, leave us a message."></textarea>
                                </div>
                                <br>
                            </div>

                            <!-- submit -->
                            <div class="col-md-3" data-aos="fade-right"> <input type="submit" class="btn btn-send pt-2 btn-block  "
                                    value="submit">
                            </div>
                        </div>
                    </div>
            </form>
        </div>

</body>
<script>
    AOS.init({
        duration:1000,
        offset:50
    });
  </script>
</html>