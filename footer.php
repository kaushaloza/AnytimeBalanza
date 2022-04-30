<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
   
    <!-- Importing bootstrap css file over here: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- javascript aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- javascript aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Inconsolata&display=swap');

        .footer-container{
            min-width: 100%;
            margin-top: .5rem;
            padding: .5rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
            /* background-color: #341f97; */
            background-image: url("img/background-footer.jpg");
            background-position: center;
            padding: 2rem;
            background-repeat: no-repeat;
        }


        .img{
            max-width: 100%;
            min-width: 100%;
            height: 40vh;
            margin: 0 0;
        }

        .footer-info strong, .footer-info span, small{
            font-size: 3rem;
            
        }

        strong{
            color:#fff;
        }
        .footer-info span{
            color: #feca57;
        }
        .input{
            position:relative;
            width: 100%;

        }

        #s_email{
            width: 100%;
            padding: .5rem;
            border-radius: 12px;
            outline: none;
            border: none;
            margin-bottom:1rem ;
        }
        small{
            color: #fff;
            font-family: 'Inconsolata', monospace;
        }
        .subscribe-btn{
            border:3px solid whitesmoke;
            background-color: black;
            color: whitesmoke;
            font-weight: bolder;
        }
        .subscribe-btn:hover{
            border:3px solid darkgray;
            background-color: lightblue;
            color: black;
           
            transition: 0.3s;
        }



        @media only screen and (max-width:545px){
            .footer-info strong, .footer-info span, small{
            font-size: 2rem;
            
        }
        }
        @media only screen and (max-width:380px){
            .footer-info strong, .footer-info span, small{
            font-size: 1.5rem;
            
        }
        }
    </style>
</head>
<body>

<div class="container footer-container">
    <form action="SubscribeQuery.php" method="post">
    <div class="footer-info" data-aos="fade-right">
        <strong data-aos="fade-in">Get the <span>most</span> out of us!</strong>
        <br />
        <small>Subscribe now!</small>
        <br />
        <div class="input">
            <input type="email" name="s_email" id="s_email" placeholder="Enter your email ..." required>
        </div>
        <input type="submit" class="btn subscribe-btn"></input>
    </div>
    </from>
</div>
</body>
<script>
    AOS.init({
        duration:1000
    });
  </script>
</html>