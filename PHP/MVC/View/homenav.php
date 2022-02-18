<?php

if (!isset($_SESSION['login'])) { ?>
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

                    <span class="mx-2">Book a Cleaner</span>
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

                    <span class="mx-2" onclick="booknow()">Let’s Book a Cleaner</span>
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
                    <a class="nav-link" href="#">Book Now</a>
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
                    <li href="#" class="nav-link" >

                        <a href="#" onclick="booknow()"><span class="mx-2">Book Now</span></a>
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
                        <a href="#" onclick="booknow()"><span class="mx-2">Let’s Book a Cleaner</span></a>
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
                    <button class="booknow" onclick="booknow()">
                        <a class="nav-link" href="#">Book Now</a>
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
        <div class="book-button" onclick="booknow()">
            <a href="#">Let’s Book a Cleaner</a>
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
}
?>
<?php if (isset($_SESSION['login'])) { ?>
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

                    <a href="#" onclick="booknow()"></a><span class="mx-2" onclick="booknow()">Book a Cleaner</span>
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
                <!-- <li href="#" class="nav-link">

                    <span class="mx-2" onclick="login()">Login</span>
                </li> -->
                <li href="#" class="nav-link">

                    <a href=""> <span class="mx-2">Become a Helper</span></a>
                </li>
                <li href="#" class="nav-link">

                    <a href="#"><span class="mx-2">Let’s Book a Cleaner</span></a>
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
                <button class="booknow booknow-1"onclick="booknow()">
                    <a class="nav-link" href="#">Book Now</a>
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
            <!-- <div class="">
                <button class="login .login1" onclick="login()"> <a class="nav-link" href="#">Login</a></button>
            </div> -->
            <div class="">
                <button class="helper"> <a class="nav-link" href="#">Become a Helper</a></button>
            </div>
            <div class="Navbar__Link vrline" style="  margin-right: 19px;">
                <img src="./images/icon-notification.png" alt="">
            </div>
            <div class="Navbar__Link user" style="margin-top:0; transform: scale(1);">

                <div class="dropdownn">
                    <span> <img src="./images/admin-user.png" alt=""></span>
                    <div class="triangle"></div>
                    <div class="dropdownn-content">
                        <div>Welcome,<br>
                            <strong>First Customer</strong>
                        </div>
                        <div style="display: flex; flex-direction: column;">
                            <a class="dropdown-itemm" href="#">My Dashboard</a>
                            <a class="dropdown-itemm" href="#">My Settings</a>
                            <a class="dropdown-itemm" onclick="logout()" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="Navbar__Link user">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./images/flag.png" alt="">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><img src="./images/flag.png" alt=""></a>
                        <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="flag"></a>
                    </div>
                </div>
            </div> -->
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

                        <a href="#"onclick="booknow()"><span class="mx-2">Book Now</span></a>
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
                    <!-- <li href="#" class="nav-link">

                        <span class="mx-2" onclick="login()">Login</span>
                    </li> -->
                    <li href="#" class="nav-link">

                        <span class="mx-2">Become a Helper</span>
                    </li>
                    <li href="#" class="nav-link">
                        <a href="#" onclick="booknow()"><span class="mx-2">Let’s Book a Cleaner</span></a>
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
                    <button class="booknow" onclick="booknow()">
                        <a class="nav-link" href="#">Book Now</a>
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
                <!-- <div class="">
                    <button class="login" onclick="login()"> <a class="nav-link" href="#">Login</a></button>
                </div> -->
                <div class="">
                    <button class="helper"> <a class="nav-link" href="#">Become a Helper</a></button>
                </div>
                <div class="Navbar__Link vrline" style=" margin-top: 47px;margin-right: 19px;">
                    <img src="./images/icon-notification.png" alt="">
                </div>
                <div class="Navbar__Link" style="margin-top: 47px;transform: scale(1);">

                    <div class="dropdownn">
                        <span> <img src="./images/admin-user.png" alt=""></span>
                        <div class="triangle"></div>
                        <div class="dropdownn-content">
                            <div>Welcome,<br>
                                <strong>First Customer</strong>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                            <a class="dropdown-itemm" href="#">My Dashboard</a>
                            <a class="dropdown-itemm" href="#">My Settings</a>
                            <a class="dropdown-itemm" onclick="logout()" href="#">Logout</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="Navbar__Link user">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="./images/flag.png" alt="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><img src="./images/flag.png" alt=""></a>
                            <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="flag"></a>
                        </div>
                    </div>
                </div> -->
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
        <div class="book-button" onclick="booknow()">
            <a href="#">Let’s Book a Cleaner</a>
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
<?php } ?>