<!DOCTYPE html>
<html lang="en">

<head>
  <?php session_start(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="assets/CSS/navbar.css">
  <link rel="stylesheet" href="assets/CSS/footer.css">
  <link rel="stylesheet" href="assets/CSS/createaccount.css">
</head>

<body>
  <?php
  include_once "header.php";
  ?>
  <main>
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
    <div class="contact-us">
      <div class="name"><strong>Create an account</strong></div>
      <div class="star-line star-price" style="">
        <div class="line1"></div>
        <img src="./images/separator.png" alt="" class="star-img">
        <div class="line2"></div>
      </div>
      <div class="contact-body">
        <form action="" class="registerform" method="post">
          <input type="text" placeholder="First Name" class="firstname" name="firstname" pattern="^\S+$" required>
          <input type="text" placeholder="Last Name" class="lastname" name="lastname" pattern="^\S+$" required> <br>
          <input type="email" placeholder="Email" class="email1" name="email" pattern="^\S+$" required>
          <input type="tel" placeholder="Phone Number" class="phone" name="phone" pattern="^\d{10}$" required><br>
          <input type="password" placeholder="Password" class="password" name="password" pattern="^\S+$" required>
          <input type="password" placeholder="Conform Password" class="conformpassword" pattern="^\S+$" name="conformpassword" required><br>
          <div>
            <div class="error"> </div>
            <input type="checkbox" class="checkbox-1"><label for=""> Yes, I would like to subscribe to the newsletter of Helperland GmbH with vouchers, trends, promotions and individualized offers. I can unsubscribe from the newsletter at any time in the newsletter and in the customer account itself.
            </label><br>
            <input type="checkbox" class="checkbox-2"><label for="">I agree with the <a href="">terms and conditions</a> of Helperland GmbH.</label><br>
            <input type="checkbox" class="checkbox-3"><label for="">I have read the <a href="">privacy policy</a></label>
          </div>
          <input type="submit" name="submit" class="submitbutton" value="Register">
          <div class="create-account" style="text-align: center;">Already registered?<a href="index.php?function=Homepage" style="color: #0d6efd;">Login</a></div>
        </form>
      </div>
    </div>
    <div class="line"></div>
    </div>
    <?php include_once 'footer.php' ?>
    <script src="assets/JS/formvalidation.js"></script>
    <script>
      document.querySelector(".checkbox-1").addEventListener("click", function() {
        if ((document.querySelector(".checkbox-1").checked) && (document.querySelector(".checkbox-2").checked) && (document.querySelector(".checkbox-3").checked)) {
          document.querySelector(".submitbutton").style.display = "block";
        } else {
          document.querySelector(".submitbutton").style.display = "none";
        }
      });
      document.querySelector(".checkbox-2").addEventListener("click", function() {
        if ((document.querySelector(".checkbox-1").checked) && (document.querySelector(".checkbox-2").checked) && (document.querySelector(".checkbox-3").checked)) {
          document.querySelector(".submitbutton").style.display = "block";
        } else {
          document.querySelector(".submitbutton").style.display = "none";
        }
      });
      document.querySelector(".checkbox-3").addEventListener("click", function() {
        if ((document.querySelector(".checkbox-1").checked) && (document.querySelector(".checkbox-2").checked) && (document.querySelector(".checkbox-3").checked)) {
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
            document.querySelector(".registerform").setAttribute("action", "index.php?function=RegisterForm");
          }
        } else {
          e.preventDefault();
          document.querySelector(".error").innerHTML = "Password does not match the confirm password!";
        }
      });
    </script>
  </main>
</body>

</html>