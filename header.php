<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Header</title>

    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
        /* DROPDOWN STYLING STARTS HERE */
        .dropbtn {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 190px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            border-top: 3px solid red;

        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;


        }

        .dropdown-content a:hover {
            text-decoration: none;
            color: red;
            background-color: #e6f2ff;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            color: red;
        }

        /* DROPDOWN STYLING ENDS HERE */


        /* ICONS STYLINGS START */
        #phonecall {
            color: red;
        }

        .icons {
            text-decoration: none;
        }

        #insta {
            color: gold;
        }

        /* ICONS STYLING ENDS */


        /* FONT SIZE OF NAV ITEMS */
        #navbarSupportedContent ul li a {
            font-size: 12px;
            color: black;
        }

        @media screen and (min-width: 600px) {
            #head_logo{
                width: 150px;
                height: 40px;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid head1">
        <div class="row">
            <span class="col-md-3 col-xxl-3 col-sm-6">
                <i class="fa fa-phone " id="phonecall" aria-hidden="true"></i>
                9606760970 / 9591457722
            </span>

            <span class="col-md-3 col-xxl-3 col-sm-6">
                <i class="fa fa-envelope-o " id="phonecall" aria-hidden="true"></i>
                info@saachijapan.com
            </span>

            <div class=" text-center   col-xxl-6 col-md-6 col-sm-12" id="icons">
                <a href="https://www.facebook.com/saachijapan?mibextid=ZbWKwL" target="_blank" class="icons"
                    id="facebook"><i class="fa fa-facebook-official mx-1" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/saachijapan/" class="icons" id="insta" target="_blank"><i
                        class="fa fa-instagram mx-1" target="_blank" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/saachi-japanese-language-institute/" target="_blank"
                    class="icons" id="linkedin"><i class="fa fa-linkedin-square mx-1" target="_blank"
                        aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/@saachijapan" class="icons" id="tube" target="_blank"><i
                        class="fa fa-youtube-play mx-1" target="_blank" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <nav class="navbar navbar-expand-xl  m-0 navbar-light bg-light">
                    <img id="head_logo" class="ml-4" src="images/Saachilogo.png" alt="Magsol" width="200" height="60"
                        data-width="96" data-height="26"></a>
                    <button class="navbar-toggler btn btn-primary " type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mr-0"></span>
                    </button>

                    <div class="collapse navbar-collapse navigation-bar mt-3" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto " id="navbarstyling">
                            <li class="nav-item mx-1">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item mx-1">
                                <div class="dropdown">
                                    <a class="nav-link dropbtn" href="#"> ABOUT US <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i>
                                        <div class="dropdown-content">
                                            <a href="about.php">About Us</a>
                                            <a href="founder.php">Founder and Chief Trainer</a>
                                            <a href="testimonials.php">Testimonials</a>
                                            <a href="gallery.php">Gallery</a>
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item mx-1">
                                <div class="dropdown">
                                    <a class="nav-link dropbtn" href="#"> WHY LEARN JAPANESE <i
                                            class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <div class="dropdown-content">
                                            <a href="whyjapanese.php">Why Learn Japanese</a>
                                            <a href="jlpt.php">JLPT</a>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link" href="courses.php">COURSES</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link" href="teaching.php">TEACHING METHODOLOGY</a>
                            </li>

                            <li class="nav-item mx-1">
                                <div class="dropdown">
                                    <a class="nav-link dropbtn" href="#"> OTHER SERVICES <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i>
                                        <div class="dropdown-content">
                                            <a href="translation.php">Translation Services</a>
                                            <a href="interpretation.php">Interpretation Services</a>
                                            <a href="crossculture.php">Cross Culture Training</a>
                                            <a href="placement.php">Placement Service</a>
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item mx-1">
                                <a class="nav-link" href="contact.php">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>




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