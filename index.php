<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Sachi Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        #card1:hover {
            animation-name: example;
            animation-duration: 1s;
            cursor: pointer;
            animation-timing-function: ease-in;
        }

        @keyframes example {
            10% {
                background-color: red;
                bottom: 10px;
            }
    </style>

</head>

<body>

    <?php include 'header.php'; ?>

    <!--slider starts here-->
    <div class="row justify-content-center background">
        <div class="col-12" id="carouselsize">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height=400px;">
                    <div class="carousel-item active">
                        <img src="images/slider1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider5.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--slider ends here-->



    <div class="container-fluid" id="gradient_bg">
        <div class="row justify-content-center justify-content-around justify-content-between text-light "
            id="gradient_bg">
            <div class="col-md-3 my-3">
                <h5><img src="images/img1.png" alt="">Why Japanese Language</h5>
                <p style="color:white;">Learn Japanese for better career prospects.</p>
            </div>
            <div class="col-md-3 my-3">
                <h5><img src="images/img2.png" alt="">Course Details</h5>
                <p style="color:white;">At Saachi, the courses are well designed and systematically structured.</p>
            </div>
            <div class="col-md-3 my-3">
                <h5>Teachning Methodology</h5>
                <p style="color:white;">Conversational method of teaching with practical application.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center text-center mt-4">
            <div class="col-md-12 text-center">
                <h3>Saachi is the right place for you for high-quality and in-depth Japanese Learning.</h3>
            </div>
        </div>

        <div class="row row justify-content-center text-center justify-content-around">
            <div class="col-lg-2 my-2 bg-warning border-rounded " id="card1">
                <a href="courses.php">
                    <img src="images/card-icon1.png" alt="">
                    <a href="courses.php" class="text-light">COURSES</a>
                </a>
            </div>

            <div class="col-lg-2 my-2 bg-primary" id="card1">
                <a href="crossculture.php">
                    <img src="images/card-icon-2.png" alt="">
                    <a href="crossculture.php" class="text-light">CROSS CULTURE TRAINING</a>
                </a>
            </div>

            <div class="col-lg-2 my-2 bg-warning" id="card1">
                <a href="interpretation.php">
                    <img src="images/card-icon-3.png" alt="">
                    <a href="interpretation.php" class="text-light">INTERPERTATION</a>
                </a>
            </div>

            <div class="col-lg-2 my-2 bg-primary" id="card1">
                <a href="translation.php">
                    <img src="images/card-icon-4.png" alt="">
                    <a href="translation.php" class="text-light">TRANSLATION SERVICES</a>
                </a>
            </div>
        </div>

        <div class="row text-center justify-content-center justify-content-around mt-5">
            <div class="col-md-8">
                <h3>Experience the essence of Japanese culture.</h3>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <img src="images/budha.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 p-5">
                <p>The courses at Saachi are well-designed to help students master the four fundamentals of learning a
                    language: Speaking, reading, writing, and listening.<br>

                    Our highly qualified and experienced trainers who have lived and worked in Japan have tremendous
                    knowledge about the cultural and behavioural conventions of the country. We try to inculcate
                    Japanese values and business and social etiquette in our students which will help them develop
                    positive business relationships with Japanese people.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>





    <!-- JAVA SCRIPT LINK  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="js/jquery.hislide.js"></script>

</body>

</html>