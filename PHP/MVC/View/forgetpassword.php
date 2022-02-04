<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <?php session_start(); ?> -->
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
    <!-- <?php
            include_once "header.php";
            ?> -->
    <div class="contact-us">
        <div class="name"><strong>Change Password</strong></div>
        <div class="star-line star-price" style="">
            <div class="line1"></div>
            <img src="./images/separator.png" alt="" class="star-img">
            <div class="line2"></div>
        </div>
        <div class="contact-body">
            <!-- form -->
            <form action="" class="registerform" method="post">
                <input type="password" placeholder="New Password" class="password" name="password" pattern="^\S+$" required><br>
                <input type="password" placeholder="Confirm Password" class="conformpassword" pattern="^\S+$" name="conformpassword" required>
                <div>
                    <div class="error"> </div>
                </div>
                <input type="submit" name="submit" style="margin:20px" class="submitbutton" value="Update">
            </form>
        </div>
    </div>

    </main>
    <script>
        document.querySelector(".password").addEventListener("input", function () {
    var password = document.querySelector(".password").value;
    if (password == "") {
        document.querySelector(".error").innerHTML = "Please Enter Password";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else if ((password.length < 8)) {
        document.querySelector(".error").innerHTML = "Password Length must be Greater Or Equal to 8";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else {
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";

    }
});
document.querySelector(".conformpassword").addEventListener("input", function () {
    var conformpassword = document.querySelector(".conformpassword").value;
    if (conformpassword == "") {
        document.querySelector(".error").innerHTML = "Please Enter Confirm Password";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else if ((conformpassword.length < 8)) {
        document.querySelector(".error").innerHTML = "ConfirmPassword Length must be Greater Or Equal to 8";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else {
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
});
        document.querySelector(".submitbutton").addEventListener("click", function(e) {
        var password = document.querySelector(".password").value;
        var conformpassword = document.querySelector(".conformpassword").value;

        if ((password === conformpassword)) {
          {
            document.querySelector(".registerform").setAttribute("action", "index.php?function=Changepassword&parameter=<?php echo $key=$_GET['parameter'];?>");
          }
        } else {
          e.preventDefault();
          document.querySelector(".error").innerHTML = "Password does not match the confirm password!";
        }
      });
    </script>
</body>

</html>