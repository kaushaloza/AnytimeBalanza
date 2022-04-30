<html lang="en">

<head>
    <?php 
        include('links.html');
    ?>
<link rel="shortcut icon" href="img/fevicon.png" type="image/jpg" >

    
    <!-- internal styling for about -->

    <style>
        #logo{
            z-index: 0;
        }
        #about {
            /* background-image: url("img/cart-book.png"); */
            background: #2193b0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            padding: 10%;
            z-index: 1;
            margin-bottom: 3%;
        }
        .about-div p{
            color: #fff;
            
        }
        .about-div h1{
            color: #fff;
            font-size: 2.5rem;
        }
    </style>
</head>

<body>

    <?php
        include('header.php');
    ?>

    <section id="about">
        <div class="about-div text-center">
            <h1 class="allheadings">ABOUT US</h1>
            <p>anytimebalanza ia a one stop center tht claims to offer wide range of basic products & accessories including food,gadgets etc..</br> our core object is to offer customer good product at great value.. </p>
        </div>
    </section>

    <div id="about-2">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-item text-center">
                            <i class="fa fa-book"></i>
                            <h3 class="allheadings">mission</h3>
                            <hr>
                            <p>we research,identify and make available new products and categories that suit the everyday needs of indian family..our mission is to provide best value possible for our customers </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about-item text-center">
                            <i class="fa fa-globe"></i>
                            <h3 class="allheadings">vision</h3>
                            <hr>
                            <p> we strongly believe that honesty and sincerity are critical in achieving complete customer satisfication.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about-item text-center">
                            <i class="fa fa-satellite"></i>
                            <h3 class="allheadings">service</h3>
                            <hr>
                            <p>we place strong emphasis on providing excellence service.our emoloyees believe in values of action, care and truth.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>