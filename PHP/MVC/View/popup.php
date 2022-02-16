<div class="popup" id="popup">
            <div class="popupcontent" id="popupcontent">
                <div class="popup-head">Login<span class="close">&times;</span></div>
                <div><?php
                        if (isset($_SESSION['username'])) {
                        
                            $user = $_SESSION['username'];?>
                            <script> Swal.fire(
                                "Service Request Completed",
                                "success"
                            
                            )</script>
                            <?php
                            unset($_SESSION['username']);
                            }?></div>
                <div class="popup-body">
                    <form action="index.php?function=HomepageLogin" class="loginform" method="post">
                        <div>
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <input type="checkbox">
                        <span>
                            Remember Me
                        </span>
                </div>
                <input type="submit" class="popup-footer continue-btn" value="Login">
                </form>
                <div class="forget-password ">Forget Password</div>
                <div class="create-account">Don't Have Account? <a href="index.php?function=Createaccount" style="color: #0d6efd;">Create Account</a></div>
            </div>
        </div>
        <div class="popup1" id="popup1">
            <div class="popupcontent1" id="popupcontent1">
                <div class="popup-head1">Forget Password<span class="close1">&times;</span></div>
                <div><?php
                            unset($_SESSION['sendmail']);
                        if (isset($_SESSION['sendmail'])) {
                            $user = $_SESSION['sendmail'];
                            echo '<script> alert("' . $user . '")</script>';
                            // echo $user;
                        }
                        ?>
                </div>
                <div class="popup-body1">
                    <form action="index.php?function=Forgetpassword" method="post">
                        <div>
                            <input type="text"class="forgetemail" name="email" placeholder="Email">
                        </div>
                </div>
                <input type="submit" class="popup-footer continue-btn" value="Send">
                </form>
            </div>
        </div>