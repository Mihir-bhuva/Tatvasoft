<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Homepage</title>
    <!--  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/CSS/homenavbar.css">
    <link rel="stylesheet" href="assets/CSS/homepage.css">
    <link rel="stylesheet" href="assets/CSS/homefooter.css">
    <script src="./toggle.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="Navbar Navbar-1" id="Navbar-1">
        <div class="Navbar__Link-brand">
            <a href="index.php?function=HomePage">
                <img src="assets/images/logo-small.png" class="small-logo" alt="">
            </a>
            <div class="p-1 my-container1 active-cont">
                <nav class="navbar top-navbar navbar-light px-5">
                    <a class="btn border-0" id="menu-btn1"><i class="bx bx-menu"></i></a>
                </nav>
            </div>
        </div>

        <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar1">
            <ul class="nav flex-column text-white w-100">
                <li href="#" class="nav-link">

                    <a href="index.php?function=BookService"></a><span class="mx-2">Book a Cleaner</span>
                </li>
                <li href="#" class="nav-link">

                    <a href="index.php?function=Prices"><span class="mx-2">Prices</span></a>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2">Our Guarantee</span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2">Blog</span>
                </li>
                <li href="#" class="nav-link">

                    <a href="index.php?function=Contactus"><span class="mx-2">Contact us</span></a>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2" onclick="login()">Login</span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2">Become a Helper</span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2">Let’s Book a Cleaner</span>
                </li>
                <!-- <li href="#" class="nav-link">

                    <span class="mx-2"></span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2"></span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2"></span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2"></span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2"></span>
                </li>
                <li href="#" class="nav-link">

                    <span class="mx-2"></span>
                </li> -->
            </ul>

            <span href="#" class="nav-link h4 w-100 mb-5">
                <a href="#" style="color: #0d6efd;"><i class="bx bxl-instagram-alt "></i></a>
                <a href="#" style="color: #0d6efd;"><i class="bx bxl-facebook"></i></a>
            </span>
        </div>

        <!-- <div class="Navbar__Link Navbar__Link-toggle">
            <i class="fa fa-bars"></i>
        </div> -->
        </nav>
        <nav class="Navbar__Items Navbar__Items--right Navbar__Items--right-1">
            <div class="">
                <button class="booknow booknow-1" onclick="booknow()">
                    <a class="nav-link">Book Now</a>
                </button>
            </div>
            <div class="Navbar__Link">
                <a href="index.php?function=Prices">Prices & Services</a>
            </div>
            <div class="Navbar__Link">
                <a href="#">Warranty</a>
            </div>
            <div class="Navbar__Link">
                <a href="#">Blog</a>
            </div>
            <div class="Navbar__Link">
                <a href="index.php?function=Contactus">Contact</a>
            </div>
            <!-- <div class="Navbar__Link vrline">
                    <img src="./images/icon-notification.png" alt="">
                </div> -->
            <div class="">
                <button class="login .login1" onclick="login()"> <a class="nav-link" href="#">Login</a></button>
            </div>
            <div class="">
                <button class="helper"> <a class="nav-link" href="#">Become a Helper</a></button>
            </div>
            <div class="Navbar__Link user">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./images/flag.png" alt="">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><img src="./images/flag.png" alt=""></a>
                        <!-- <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="flag"></a> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <header>
        <div class="Navbar Navbar-2" id="Navbar">
            <div class="Navbar__Link-brand">
                <!-- <img src="./images/logo-small.png" class="small-logo" alt=""> -->
                <a href="index.php?function=HomePage">
                    <img src="images/whitelogo.png" class="logo" alt=""></a>
                <div class="p-1 my-container active-cont">
                    <nav class="navbar top-navbar navbar-light px-5">
                        <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
                    </nav>
                </div>
            </div>

            <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
                <ul class="nav flex-column text-white w-100">
                    <li href="#" class="nav-link">

                        <a href="index.php?function=BookService"><span class="mx-2">Book Now</span></a>
                    </li>
                    <li href="#" class="nav-link">

                        <a href="index.php?function=Prices"><span class="mx-2">Prices & Services</span></a>
                    </li>
                    <li href="#" class="nav-link">

                        <span class="mx-2">Warranty</span>
                    </li>
                    <li href="#" class="nav-link">

                        <span class="mx-2">Blog</span>
                    </li>
                    <li href="#" class="nav-link">

                        <a href="index.php?function=Contactus"><span class="mx-2">Contact</span></a>
                    </li>
                    <li href="#" class="nav-link">

                        <span class="mx-2" onclick="login()">Login</span>
                    </li>
                    <li href="#" class="nav-link">

                        <span class="mx-2">Become a Helper</span>
                    </li>
                    <li href="#" class="nav-link">
                        <a href="index.php?function=BookService"><span class="mx-2">Let’s Book a Cleaner</span></a>
                    </li>
                    <!-- <li href="#" class="nav-link">
    
                        <span class="mx-2"></span>
                    </li>
                    <li href="#" class="nav-link">
    
                        <span class="mx-2"></span>
                    </li>
                    <li href="#" class="nav-link">
    
                        <span class="mx-2"></span>
                    </li>
                    <li href="#" class="nav-link">
    
                        <span class="mx-2"></span>
                    </li>
                    <li href="#" class="nav-link">
    
                        <span class="mx-2"></span>
                    </li>
                    <li href="#" class="nav-link">
    
                        <span class="mx-2"></span>
                    </li> -->
                </ul>

                <span href="#" class="nav-link h4 w-100 mb-5">
                    <a href="#" style="color: #0d6efd;"><i class="bx bxl-instagram-alt "></i></a>
                    <a href="#" style="color: #0d6efd;"><i class="bx bxl-facebook"></i></a>
                </span>
            </div>

            <!-- <div class="Navbar__Link Navbar__Link-toggle">
                <i class="fa fa-bars"></i>
            </div> -->
            </nav>
            <nav class="Navbar__Items Navbar__Items--right">
                <div class="">
                    <button class="booknow">
                        <a class="nav-link" href="index.php?function=BookService">Book Now</a>
                    </button>
                </div>
                <div class="Navbar__Link">
                    <a href="index.php?function=Prices">Prices & Services</a>
                </div>
                <div class="Navbar__Link">
                    <a href="#">Warranty</a>
                </div>
                <div class="Navbar__Link">
                    <a href="#">Blog</a>
                </div>
                <div class="Navbar__Link">
                    <a href="index.php?function=Contactus">Contact</a>
                </div>
                <!-- <div class="Navbar__Link vrline">
                        <img src="./images/icon-notification.png" alt="">
                    </div> -->
                <div class="">
                    <button class="login" onclick="login()"> <a class="nav-link" href="#">Login</a></button>
                </div>
                <div class="">
                    <button class="helper"> <a class="nav-link" href="#">Become a Helper</a></button>
                </div>
                <div class="Navbar__Link user">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="./images/flag.png" alt="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><img src="./images/flag.png" alt=""></a>
                            <!-- <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="flag"></a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="text-container">
            <div class="text-lg">Do not feel like housework?</div>
            <div class="check-text">
                <div class="text-sm text-1" style="width: 264px;">Great! Book now for Helperland and enjoy the benefits
                </div>
            </div>
            <div class="check-text_1">
                <img src="images/check.png" class="check check-1" alt="">

                <div class="text-sm text-1">certified & insured helper</div>
            </div>
            <div class="check-text_1">

                <img src="images/check.png" class="check check-2" alt="">

                <div class="text-sm text-2">easy booking procedure</div>
            </div>
            <div class="check-text_1">

                <img src="images/check.png" class="check check-3" alt="">

                <div class="text-sm text-3">friendly customer service</div>
            </div>
            <div class="check-text_1">

                <img src="images/check.png" class="check check-3" alt="">

                <div class="text-sm text-3">secure online payment method</div>
            </div>
        </div>
        <div class="book-button">
            <a href="index.php?function=BookService">Let’s Book a Cleaner</a>
        </div>
        <div class="menus menu-animation">
            <div class="step-1" style="cursor: pointer;">
                <img src="images/step-1.png" alt="">
                <div>Enter your postcode</div>
            </div>
            <img src="images/step-arrow-1.png" class="step-arrow" alt="">
            <div class="step-2" style="cursor: pointer;">
                <img src="images/step-2.png" alt="">
                <div>Select your plan</div>
            </div>
            <img src="images/step-arrow-1-copy.png" class="step-arrow" alt="">
            <div class="step-3" style="cursor: pointer;">
                <img src="images/step-3.png" alt="">
                <div>Pay securely online</div>
            </div>
            <img src="images/step-arrow-1.png" class="step-arrow" alt="">
            <div class="step-4" style="cursor: pointer;">
                <img src="images/step-4.png" alt="">
                <div>Enjoy amazing service</div>
            </div>
        </div>
        <div class="down-arrow">
            <img src="images/group-18_5.png" alt="">
        </div>

        </div>

    </header>
    <?php
    // unset($_SESSION['username']);
    // include 'homenav.php';
    ?>
    <main>
        <?php
        if (isset($_SESSION['update'])) {
            $update = $_SESSION['update'];
            echo '<script> alert("' . $update . '")</script>';
        }
        if (isset($_SESSION['mailsend'])) {
            $mailsend = $_SESSION['mailsend'];
            echo '<script> alert("' . $mailsend . '")</script>';
        }
        ?>
        <?php
        include 'popup.php'
        ?>
        </div>
        <div class="section-2">
            <div class="heading">
                Convince yourself!
            </div>
            <div class="section-body">
                <div class="experiance">
                    <div class="helper-img">
                        <img src="images/helper-img-1.png" class="img1" alt="">
                    </div>
                    <div class="helper-text">Friendly & Certified <br> Helpers</div>
                    <div class="helper-info">We want you to be completely satisfied with our service and feel
                        comfortable at home. In order to guarantee this, our helpers go through a test procedure. Only
                        when the cleaners meet our high standards, they may call themselves Helper.</div>
                </div>
                <div class="secure">
                    <div class="secure-img">
                        <img src="images/group-23.png" class="img2" alt="">
                    </div>
                    <div class="secure-payment">Transparent and secure payment</div>
                    <div class="payment-info">We have transparent prices, you do not have to scratch money or money on
                        the sideboard Leave it: Pay your helper easily and securely via the online payment method. You
                        will also receive an invoice for each completed cleaning.</div>
                </div>
                <div class="services">
                    <div class="services-img">
                        <img src="images/group-24.png" class="img3" alt="">
                    </div>
                    <div class="cus-services">We're here for you</div>
                    <div class="service-info">You have a question or need assistance with the booking process? Our
                        customer service is happy to help and advise you. How you can reach us you will find out when
                        you look under "Contact". We look forward to hearing from you or reading.</div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <div class="left-image"></div>



            <div class="middle">
                <div class="section-box">
                    <div>
                        <div class="head-text">Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="body-text">

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi sapien, suscipit ut
                                accumsan
                                vitae,
                                pulvinar ac libero.</p>
                            <p>Aliquam erat volutpat. Nullam quis ex odio. Nam bibendum cursus purus, vel efficitur urna
                                finibus
                                vitae.
                                Nullam finibus aliquet pharetra. Morbi in sem dolor. Integer pretium hendrerit ante quis
                                vehicula.
                            </p>
                            <p> Mauris consequat ornare enim, sed lobortis quam ultrices sed.</p>
                        </div>
                    </div>
                    <img src="images/group-36.png" alt="" class="sec3-img">
                </div>
                <div class="sec-2">
                    <div class="our-blog">Our Blog</div>
                    <div style="display: flex;" class="blog-layer">
                        <div class="layer0">
                            <img src="images/group-28.png" alt="">
                            <div class="layer0-info">
                                <div>
                                    <b style="font-size: 20px;">Lorem ipsum dolor sit ametb</b> <br>
                                    <p style="color: #A3A3A3;">January 28, 2019 </p>
                                </div>
                                <div id="layer0-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus
                                    pulvinar
                                    aliquet.
                                </div>

                                <div class="post-arrow">
                                    <div>Read the Post

                                    </div>
                                    <img src="images/shape-2.png" class="shape-2" alt="">
                                </div>


                            </div>


                        </div>
                        <div class="layer1">
                            <img src="images/group-29.png" alt="">
                            <div class="layer0-info">
                                <div>
                                    <b style="font-size: 20px;">Lorem ipsum dolor sit ametb</b> <br>
                                    <p style="color: #A3A3A3;">January 28, 2019 </p>
                                </div>
                                <div id="layer0-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus
                                    pulvinar
                                    aliquet.
                                </div>

                                <div class="post-arrow">
                                    <div>Read the Post

                                    </div>
                                    <img src="images/shape-2.png" class="shape-2" alt="">
                                </div>


                            </div>


                        </div>
                        <div class="layer2">
                            <img src="images/group-30.png" alt="">
                            <div class="layer0-info">
                                <div>
                                    <b style="font-size:  20px;">Lorem ipsum dolor sit ametb</b>
                                    <br>
                                    <p style="color: #A3A3A3;">January 28, 2019 </p>
                                </div>
                                <div id="layer0-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus
                                    pulvinar
                                    aliquet.
                                </div>

                                <div class="post-arrow">
                                    <div>Read the Post

                                    </div>
                                    <img src="images/shape-2.png" class="shape-2" alt="">
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="right-image"></div>

        </div>

        <div class="section-4">
            <div class="section4-head">What Our Customers Say </div>
            <div class="layers">
                <div class="layer-3">
                    <div class="feed-head">
                        <img src="images/group-31.png" class="layer3-img" alt="">
                        <div class="name-city"> <b style="font-size: 19.92px; font-weight: 700;"> Lary Watson </b>
                            <br>
                            <p style="color: #8E8E8E; font-weight: 400;">Manchester</p>
                        </div>
                        <img src="images/message.png" class="message" alt="">
                    </div>
                    <div class="layer3-info">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet
                        consequat.
                        Praesent nec malesuada nibh. <br> <br> Nullam et metus congue, auctor augue sit amet,
                        consectetur
                        tortor.
                        <br><br>
                        <div class="readmore">
                            <div>Read More

                            </div>
                            <img src="images/shape-2.png" class="shape-2" alt="">
                        </div>
                    </div>
                </div>
                <div class="layer-4">
                    <div class="feed-head">
                        <img src="images/group-32.png" class="layer4-img" alt="">
                        <div class="name-city"> <b style="font-size: 19.92px; font-weight: 700;"> Lary Watson </b>
                            <br>
                            <p style="color: #8E8E8E;font-weight: 400;">Manchester</p>
                        </div>
                        <img src="images/message.png" class="message" alt="">
                    </div>
                    <div class="layer4-info">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet
                        consequat.
                        Praesent nec malesuada nibh. <br> <br> Nullam et metus congue, auctor augue sit amet,
                        consectetur
                        tortor.
                        <br><br>
                        <div class="readmore">
                            <div>Read More

                            </div>
                            <img src="images/shape-2.png" class="shape-2" alt="">
                        </div>
                    </div>
                </div>
                <div class="layer-5">
                    <div class="feed-head">
                        <img src="images/group-33.png" class="layer5-img" alt="">
                        <div class="name-city"> <b style="font-size: 19.92px;font-weight: 700;"> Lary Watson </b>
                            <br>
                            <p style="color: #8E8E8E;font-weight: 400;">Manchester</p>
                        </div>
                        <img src="images/message.png" class="message" alt="">
                    </div>
                    <div class="layer5-info">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet
                        consequat.
                        Praesent nec malesuada nibh. <br> <br> Nullam et metus congue, auctor augue sit amet,
                        consectetur
                        tortor.
                        <br><br>
                        <div class="readmore">
                            <div>Read More

                            </div>
                            <img src="images/shape-2.png" class="shape-2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once 'homefooter.php' ?>
    <script src="assets/JS/homepage.js"></script>
    <script>
        function booknow() {

            <?php
            if (!isset($_SESSION['checklogin'])) { ?>
                login();
            <?php } ?>
            <?php if (isset($_SESSION['checklogin'])) { ?>
                window.location="http://localhost/Helperland/MVC/index.php?function=BookService";
            <?php unset($_SESSION['checklogin']);
            }
            ?>
        }
    </script>
</body>

</html>