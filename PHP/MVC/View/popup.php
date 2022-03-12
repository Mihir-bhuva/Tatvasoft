<?php if (isset($_SESSION['loginerror'])) { ?>
    <script>
        Swal.fire("Email Or Password ",
            "Invalid");
    </script>

<?php }
unset($_SESSION['loginerror']); ?>

<div class="popup" id="popup">
    <div class="popupcontent" id="popupcontent">
        <div class="popup-head">Login<span class="close">&times;</span></div>
        <div class="popup-body">
            <form action="index.php?function=HomepageLogin" class="loginform" method="post">
                <div>
                    <input type="text" class="emailvalue" name="email" required placeholder="Email">
                    <input type="password" class="passwordvalue" required name="password" placeholder="Password">
                </div>
                <input type="checkbox">
                <span>
                    Remember Me
                </span>
        </div>
        <input type="submit" class="popup-footer logincheck continue-btn" disabled value="Login">
        </form>
        <div class="forget-password ">Forget Password</div>
        <div class="create-account">Don't Have Account? <a href="index.php?function=Createaccount" style="color: #0d6efd;">Create Account</a></div>
    </div>
</div>
<script>
document.querySelector(".emailvalue").addEventListener("input",function(){
    if (document.querySelector(".emailvalue").value != '' && document.querySelector(".passwordvalue").value != '') {
        document.querySelector(".logincheck").removeAttribute("disabled")
    }
    else{
        document.querySelector(".logincheck").setAttribute("disabled","true")
    }
})
document.querySelector(".passwordvalue").addEventListener("input",function(){
    if (document.querySelector(".emailvalue").value != '' && document.querySelector(".passwordvalue").value != '') {
        document.querySelector(".logincheck").removeAttribute("disabled")
    }
    else{
        document.querySelector(".logincheck").setAttribute("disabled","true")
    }
})
</script>
<div class="popup1" id="popup1">
    <div class="popupcontent1" id="popupcontent1">
        <div class="popup-head1 ">Forget Password<span class="close1">&times;</span></div>
        <div><?php
                if (isset($_SESSION['sendmailsp'])) {
                    $user = $_SESSION['sendmailsp'];
                    echo '<script> alert("' . $user . '")</script>';
                    // echo $user;
                }
                unset($_SESSION['sendmailsp']);
                ?>
        </div>
        <div class="popup-body1">
            <form action="index.php?function=Forgetpassword" method="post">
                <div>
                    <input type="text" class="forgetemail form-control" name="email" placeholder="Email">
                </div>
        </div>
        <input type="submit" class="popup-footer continue-btn" value="Send">
        </form>
    </div>
</div>