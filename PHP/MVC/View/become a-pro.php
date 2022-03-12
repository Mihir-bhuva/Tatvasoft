<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a pro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/CSS/homenavbar.css">
  <link rel="stylesheet" href="assets/CSS/homefooter.css">
  <link rel="stylesheet" href="assets/CSS/main.css">
  <!-- <script>
        document.addEventListener('scroll', function () {
        let nav = document.querySelector('nav');
        let windowPosition = window.scrollY > 0;
        nav.classList.toggle('scrolling-active', windowPosition);
        console.log('hell');
        })  
    </script> -->
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
        <button class="booknow booknow-1">
          <a class="nav-link" href="../11.Book-service/book-service.html">Book Now</a>
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

            <span class="mx-2">Book Now</span>
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
      <nav class="Navbar__Items Navbar__Items--right">
        <div class="">
          <button class="booknow">
            <a class="nav-link" href="../11.Book-service/book-service.html">Book Now</a>
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
          <button class="helper"> <a class="nav-link" href="index.php?function=BecomeHelper">Become a Helper</a></button>
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
    <div class="register-form">
      <form class="form" action="" method="post">
        <p class="form-header"> Register Now!</p>
        <input type="text" name="firstname" class="firstname" placeholder="First name" required>
        <input type="text" name="lastname" class="lastname" placeholder="Last name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="tel" name="phone" class="phone" placeholder="Phone Number" pattern="^\d{10}$" required>
        <input type="password" name="password" class="password" placeholder="Password" required>
        <input type="password" name="conformpassword" class="conformpassword" placeholder="Confirm Password" required>
        <div class="error"></div>
        <div>
          <input type="checkbox" class="checkbox-1"><label for="">Send me newsletters from Helperland </label><br>
          <input type="checkbox" class="checkbox-2"><label for="">I accept <a style="color: #1FB6FF;" href=""> terms and conditions</a> & <a style="color: #1FB6FF;" href=""> privacy
              policy</a></label>
        </div>
        <div class="form-group recaptcha">
          <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LfLnN4dAAAAAOYs5tX0BlCh03GrzSiekcZhnq3j"></div>
        </div>

        <div class="form-group sbmtbtn">
          <input type="submit" name="submit" value="GetStarted" class="btn submitbutton"> <img class=".right-arrow" src="./images/arrow-white.png">
        </div>
      </form>
    </div>
    <div class="down-arrow">
      <img src="images/group-18_5.png" alt="">
    </div>

    </div>
    <?php
    // unset($_SESSION['signuperror']);
    if (isset($_SESSION['signup'])) {
      $signup = $_SESSION['signup'];
      echo '<script> alert("' . $signup . '")</script>';
      unset($_SESSION['signup']);
    }
    if (isset($_SESSION['signuperror'])) {
      $signup = $_SESSION['signuperror'];
      echo '<script> alert("' . $signup . '")</script>';
      unset($_SESSION['signuperror']);
    }
    ?>
  </header>
  <?php
  include 'popup.php';
  ?>
  <main>
    <div class="body">
      <div class="left-image"></div>
      <div class="content">
        <div class="name"><strong>How it works</strong>
        </div>
        <div class="first-content">
          <div class="content-info">
            <p class="register">Register yourself</p>
            <p class="basic-info">Provide your basic information to register
              yourself as a service provider.</p>
            <p class="basic-info" style="cursor: pointer;">Read more <img style="margin-left: 10px; cursor: pointer;" src="./images/shape-2-copy-3.png" alt="">
            </p>
          </div>

          <div class="content-image"><img src="./images/group-19.png" alt=""></div>
        </div>
        <div class="second-content">
          <div class="content-image second-content-image"><img style="" src="./images/group-20.png" alt="">
          </div>
          <div class="content-info">
            <p class="register">Get service requests</p>
            <p class="basic-info" style="width: 362px; height: 42px;">You will get service requests from
              customes depend on service area and profile.</p>
            <p class="basic-info" style="cursor: pointer;">Read more <img style="margin-left: 10px; cursor: pointer;" src="./images/shape-2-copy-3.png" alt="">
            </p>
          </div>

        </div>
        <div class="first-content">
          <div class="content-info">
            <p class="register">Complete service</p>
            <p class="basic-info" style="width: 365px; height: 42px;">Accept service requests from your
              customers
              and complete your work.</p>
            <p class="basic-info" style="cursor: pointer;">Read more <img style="margin-left: 10px; cursor: pointer;" src="./images/shape-2-copy-3.png" alt="">
            </p>
          </div>

          <div class="content-image"><img src="./images/group-18.png" alt=""></div>
        </div>
      </div>
      <div class="right-image"></div>
    </div>
  </main>
  <?php include_once 'homefooter.php' ?>
  <script src="assets/JS/becomeahelper.js"></script>
  <script src="assets/JS/formvalidation.js"></script>
  <script>
    // checkbox
    document.querySelector(".checkbox-1").addEventListener("click", function() {
      if ((document.querySelector(".checkbox-1").checked) && (document.querySelector(".checkbox-2").checked)) {
        document.querySelector(".submitbutton").style.display = "block";
      } else {
        document.querySelector(".submitbutton").style.display = "none";
      }
    });
    document.querySelector(".checkbox-2").addEventListener("click", function() {
      if ((document.querySelector(".checkbox-1").checked) && (document.querySelector(".checkbox-2").checked)) {
        document.querySelector(".submitbutton").style.display = "block";
      } else {
        document.querySelector(".submitbutton").style.display = "none";
      }
    });
    document.querySelector(".submitbutton").addEventListener("click", function(e) {
      var password = document.querySelector(".password").value;
      var conformpassword = document.querySelector(".conformpassword").value;

      if ((password === conformpassword)) {
        {
          document.querySelector(".form").setAttribute("action", "index.php?function=SPRegisterForm");
        }
      } else {
        e.preventDefault();
        document.querySelector(".error").innerHTML = "Password does not match the confirm password!";
      }
    });
  </script>

</body>

</html>