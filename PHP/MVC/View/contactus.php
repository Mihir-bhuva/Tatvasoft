<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start();?>
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
  <link rel="stylesheet" href="assets/CSS/contactus.css">
</head>

<body>
 <?php
 include_once "header.php";
 ?>
  <main>
    <div class="contact-img">

    </div>
    <div class="contact-us">
      <div class="name"><strong>Contact us</strong></div>
      <div class="star-line star-price" style="">
        <div class="line1"></div>
        <img src="./images/separator.png" alt="" class="star-img">
        <div class="line2"></div>
      </div>
      <div class="contact-body">
        <div class="location">
          <img src="./images/forma-1_2.png" class="locationimg" alt="">
          <div class="loc-info">
            <a href="#" class="number"> 1111 Lorem ipsum text 100,<br> Lorem ipsum AB</a>
          </div>
        </div>
        <div class="phone">
          <img src="./images/phone-call.png" alt="">
          <div class="phone-info">
            <a href="#" class="number">+49 (40) 123 56 7890</a> <br>
            <a href="#" class="number">+49 (40) 987 56 0000</a>
          </div>
        </div>
        <div class="message">
          <img src="./images/email.png" alt="">
          <div class="msg-info">
            <a href="#" class="number">info@helperland.com</a>
          </div>
        </div>
      </div>
      <div class="line"></div>
    </div>

    <div class="name" style="font-size: 28px;"><strong>Get in touch with us</strong></div>
<form action="index.php?function=ContactUsForm" method="POST" class="form row">
<div class="row1">
  <input type="text" style="margin-right: 14px; margin-bottom: 15px;" name="fname" placeholder="First name">
  <input type="text" name="lname" placeholder="Last name">
</div>
<div class="row2">
  <input type="tel" id="phone" name="phone" style="margin-right: 14px; margin-bottom: 15px;" class="mobile"
    placeholder="Mobile number" pattern="^\d{10}$"/>
  <input type="email" name="email" placeholder="Email address">
</div>
<select name="subject" id="dropdownMenuButton">
  <option value="">General</option>
  <option value="">Inquiry</option>
  <option value="">renewal</option>
  <option value="">revocation</option>
</select>
<div>
  <input type="text" name="message" class="form-msg" placeholder="Message">
</div>
<div class="success">Your query has been submitted successfully. Our helpdesk team will contact you soon! <span class="close">&times;</span></div>
<input id="submit" type="submit" value="Submit"name="submit">
</form>
        <script></script>      
<section class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.79219931298!2d72.5004358!3d23.0348564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc9d4dae36889fb9!2sTatvaSoft!5e0!3m2!1sen!2sin!4v1639749098244!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
    </section>
  </main>
  <?php 
  include_once "footer.php"
  ?>  
  <!-- <script src="assets/JS/contactus.js"></script> -->
  <script>
  document.querySelector(".close").addEventListener("click",function(){
    document.querySelector(".success").style.display="none";
  });
  document.querySelector("#submit").addEventListener("click",function(){
    // document.querySelector(".success").style.display="block";
    alert("Your query has been submitted successfully. Our helpdesk team will contact you soon! ");
  });
  </script>
</body>

</html>