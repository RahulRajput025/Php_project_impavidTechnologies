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


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <head>

        <style>
            .img1 {
                background-image: url('images/backgrounds.webp');
                background-repeat: no-repeat;
                background-blend-mode: color-dodge;
                background-size: cover;
                font-weight: bolder;
                text-align: center;
                padding: 150px;
            }

            #borderbg {
                border-radius: 4px;
            }
        </style>

    </head>



<body>

    <?php include 'header.php' ?>

    <div class="img1">
        <h2>About Us</h2>
        <p>home > About Us</p>
    </div>

    <div class="container">
        <h2 class="text-center my-5">WELCOME TO SAACHI</h2>
        <div class="row mt-4">
            <div class="col-md-8">
                Saachi is a Japanese Language Institute based in Bangalore. We offer high-quality and in-depth Japanese
                language training for individuals and corporates. We provide various services such as Cross-Cultural
                Training, Translation Services, Interpretation Services and Placement Services.<br><br>

                We focus on teaching Japanese through conversational methods so that our students not only pass the
                Japanese proficiency test (JLPT) but are also able to converse in Japanese fluently.<br><br>

                Our goal is to get our students to use the language in real-life situations. To aid this process,
                students will be introduced to the Japanese culture including business and social etiquette followed in
                Japan, and practical uses of the language in Japanese society.<br><br>

                Our certified and highly experienced trainers are well-equipped to impart knowledge about the Japanese
                business and social culture as well as share their individual experiences of living and working in
                Japan.<br><br>

                Our online and classroom trainings are well-designed to facilitate an interactive session that makes
                language learning engaging and enjoyable.<br><br>

                So, if you are looking for a panoramic and immersive experience of learning the Japanese language that
                imparts true ethos of Japan, Saachi Japanese Language Institute is the right choice for you!
            </div>
            <div class="col-md-4">
                <img src="images/about.jpg" class="img img-fluid mt-5" alt="">
            </div>
        </div>
    </div>

    <!-- Carousel wrapper TESTIMONIALS -->
    <div class="container-fluid">
        <div class="row mt-5 bg-secondary">
            <h1 class="text-light text-center" style="margin-top:50px">What Learners Say About Us</h1>
            <div id="carouselExampleControls" class="carousel slide text-left carousel-dark" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <!-- ITEM 1-->
                        <div class="row d-flex justify-content-center bg-light my-5 p-5" id="borderbg">
                            <img class="rounded-circle  mb-4 ml-5" src="about_images/geetha.png" alt="geetha"
                                style="width: 150px; height: 120px;" />
                            <div class="col-lg-8">
                                <i class="fas fa-quote-left pe-2 "></i>
                                <p class="bg-light">
                                    It would not have been possible for mw to clear JLPL N2 without the coaching and
                                    training of Lata Sensei
                                </p>
                                <p style="font-weight: bolder;">C. Geetha</p>
                                <p>Translator Bangalore</p>
                            </div>
                        </div>
                    </div>

                    <!-- ITEM 2-->
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-center bg-light my-5 p-5" id="border-bg">
                            <img class="rounded-circle  mb-4 ml-5" src="images/seematesti.png" alt="sumit"
                                style="width: 150px; height: 120px;" />
                            <div class="col-lg-8">
                                <i class="fas fa-quote-left pe-2 "></i>
                                <p class="bg-light">
                                    I learnt Japanese language from Lata Sensei for two years and passed Japanese
                                    Language Proficiency Test level N4 and N3 under her guidance. I am a huge fan of
                                    her teaching methods and teaching materials.
                                </p>
                                <p style="font-weight: bolder;">-Seema S. Hegde</p>
                                <p> Amsterdam, The Netherlands</p>
                            </div>
                        </div>
                    </div>

                    <!-- ITEM 3-->
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-center bg-light my-5 p-5" id="border-bg">
                            <img class="rounded-circle  mb-4 ml-5" src="images/sumittesti.png" alt="sumit"
                                style="width: 150px; height: 120px;" />
                            <div class="col-lg-8">
                                <i class="fas fa-quote-left pe-2 "></i>
                                <p class="bg-light">
                                    I have learnt Japanese language from Lata Sensei for over a year and I feel
                                    quite blessed to be a student under her care and guidance.
                                </p>
                                <p style="font-weight: bolder;">-Sumit Kr Haldar</p>
                                <p>Consultant at SAP India, Bangalore</p>
                            </div>
                        </div>
                    </div>

                    <!-- ITEM 4-->
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-center bg-light my-5 p-5" id="border-bg">
                            <img class="rounded-circle  mb-4 ml-5" src="images/ramyatesti.png" alt="sumit"
                                style="width: 150px; height: 120px;" />
                            <div class="col-lg-8">
                                <i class="fas fa-quote-left pe-2 "></i>
                                <p class="bg-light">
                                    I had the pleasure and good fortune of pursuing my N3 and N2 with Lata sensei
                                    and I can’t be more thankful. Each of us has a different motivation for studying
                                    Japanese and Lata sensei takes that into cognisance while bringing the whole
                                    group together.
                                </p>
                                <p style="font-weight: bolder;">-Ramya Ramakrishnan</p>
                                <p> Dell Technologies , Japan</p>
                            </div>
                        </div>
                    </div>

                    <!-- ITEM 5-->
                    <div class="carousel-item ">
                        <div class="row d-flex justify-content-center bg-light my-5 p-5" id="border-bg">
                            <img class="rounded-circle  mb-4 ml-5" src="images/rajeevtesti.png" alt="sumit"
                                style="width: 150px; height: 120px;" />
                            <div class="col-lg-8">
                                <i class="fas fa-quote-left pe-2 "></i>
                                <p class="bg-light">
                                    I continued my Japanese language training after I returned from my stay in
                                    Japan. I passed Japanese Language Proficiency Test level N4 under Lata Sensei’s
                                    guidance.
                                </p>
                                <p style="font-weight: bolder;">-Rajeeva Narayan</p>
                                <p>Amsterdam, The Netherlands</p>
                            </div>
                        </div>
                    </div>

                    <!-- ITEM 6-->
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-center bg-light my-5 p-5" id="border-bg">
                            <img class="rounded-circle  mb-4 ml-5" src="images/dixitatesti.png" alt="sumit"
                                style="width: 150px; height: 120px;" />
                            <div class="col-lg-8">
                                <i class="fas fa-quote-left pe-2 "></i>
                                <p class="bg-light">
                                    Lata Sensei’s vast knowledge, experience with living and working in Japan, about
                                    the Japanese culture, and language helped me learn a lot and gain confidence
                                    during my journey.
                                </p>
                                <p style="font-weight: bolder;">-Dixita</p>
                                <p>Bangalore</p>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                    data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                    data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="false"></span>
                </button>
            </div>
            <!-- Carousel wrapper TESTIMONIALS ENDS -->

            <div class="row text-center justify-content-center">
                <div class="col-md-5">
                    <a href="testimonials.php"><button class="btn btn-danger mb-5"
                            style="padding:10px; width:160px; border-radius:6px; font-size:20px">Read More</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel wrapper -->

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

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</body>

</html>