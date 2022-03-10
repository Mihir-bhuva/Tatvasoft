<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Requests</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- BOX ICONS CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/CSS/adminservicerequest.css">
    <link rel="stylesheet" href="assets/CSS/adminnavbar.css">
</head>

<body>
    <header>
        <div class="Navbar">
            <div class="Navbar__Link-brand">
                <!-- <img src="./images/logo-small.png" class="logo" alt="">
                 -->
                <span>helperland</span>
            </div>
            <div class="logout-res">
                <img src="./images/logout.png" alt="">
            </div>
            <div class="dropdown-res">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./images/admin-user.png" alt="">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"> <img src="./images/admin-user.png" alt=""></a>
                    <!-- <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="flag"></a> -->

                </div>
            </div>
            <div class="Navbar__Link Navbar__Link-toggle">
                <i class="fa fa-bars"></i>
            </div>
            </nav>
            <nav class="Navbar__Items Navbar__Items--right">
                <!-- <div class="">
                    <button class="booknow">
                        <a class="nav-link" href="#">Book Now</a>
                    </button>
                </div>
                <div class="Navbar__Link">
                    <a href="#">Prices & services</a>
                </div>
                <div class="Navbar__Link">
                    <a href="#">Warranty</a>
                </div>
                <div class="Navbar__Link">
                    <a href="#">Blog</a>
                </div>
                <div class="Navbar__Link">
                    <a href="#">Contact</a>
                </div>
                <div class="Navbar__Link vrline">
                    <img src="./images/icon-notification.png" alt="">
                </div> -->
                <div class="Navbar__Link user">
                    <div class="dropdown">

                        <img src="assets/images/admin-user.png" alt=""> <span><?php echo $_SESSION['FirstName'] . ' ' . $_SESSION['LastName'] ?></span>


                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"> <img src="./images/admin-user.png" alt=""></a>
                            <!-- <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="flag"></a> -->

                        </div>
                    </div>
                </div>

                <div class="logout">
                    <img src="assets/images/logout.png" alt="">
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="tables">
            <table class="table-1 table table-hover">
                <thead>

                </thead>
                <tbody>
                    <tr>
                        <td style="height: 20px;">Service Management</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Role Management</td>
                    </tr>
                    <tr class="" id="coupon">
                        <td style="height: 20px;" id="">Coupon Code Management <img class="sub-transform" id="sub-transform" src="./images/forma-1_3.png" alt=""></td>
                    </tr>
                    <div id="submenu">
                        <tr class="submenu coupon">
                            <td style="height: 20px;">Coupon Code Management <img class="sub-transform-show" id="sub-transform-show" src="./images/forma-1_3.png" alt=""></td>
                        </tr>
                        <tr class="submenu coupon">
                            <td style="height: 20px; padding-left: 34px;">Coupon Codes</td>

                        </tr>
                        <tr class="submenu coupon">
                            <td style="height: 20px; padding-left: 34px;">Usage History</td>
                        </tr>
                    </div>
                    <tr>
                        <td style="height: 20px;">Escalation Management</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Service Requests</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Service Providers</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">User Management</td>
                    </tr>
                    <tr class="sub-toggle">
                        <td style="height: 20px;">Finance Module<img class="sub-transform" src="./images/forma-1_3.png" alt=""></td>
                    </tr>
                    <div>
                        <tr class="submenu">
                            <td style="height: 20px;">Finance Module<img class="sub-transform" src="./images/forma-1_3.png" alt=""></td>
                        </tr>
                        <tr class="submenu">
                            <td style="height: 20px; padding-left: 34px;">All Transactions</td>

                        </tr>
                        <tr class="submenu">
                            <td style="height: 20px; padding-left: 34px;"> Generate Payment</td>
                        </tr>
                        <tr class="submenu">
                            <td style="height: 20px; padding-left: 34px;"> Customer Invoices</td>
                        </tr>
                    </div>
                    <tr>
                        <td style="height: 20px;">Zip Code Management</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Rating Management</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Inquiry Management</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Newsletter Management </td>
                    </tr>
                    <tr class="sub-toggle">
                        <td>Content Management<img class="sub-transform" src="./images/forma-1_3.png" alt=""></td>
                    </tr>
                    <div>
                        <tr class="submenu">
                            <td style="height: 20px;">Content Management<img class="sub-transform" src="./images/forma-1_3.png" alt=""></td>
                        </tr>
                        <tr class="submenu">
                            <td style="height: 20px; padding-left: 34px;">Blog</td>

                        </tr>
                        <tr class="submenu">
                            <td style="height: 20px; padding-left: 34px;">FAQs</td>
                        </tr>
                    </div>
                    </tr>
                </tbody>
            </table>

            <div>
                <div class="history">
                    <p>User Management</p>
                    <div>
                        <button class="export">
                            <img src="./images/add.png" alt="">
                            <a href="#">Add New User</a>
                        </button>
                    </div>
                </div>
                <div class="user-info">
                    <input type="" name="Service ID" id="" placeholder="Service ID">
                    <select class="user-name" name="" id="">
                        <option value="">Customer</option>
                    </select>
                    <select class="user-role" name="" id="">
                        <option value="">Service Provider</option>
                    </select>
                    <select class="user-status" name="" id="">
                        <option value="">Status</option>
                    </select>

                    <div class="date-time">
                        <img src="assets/images/admin-calendar-blue.png" alt="">
                        <input type="date" placeholder="From Date">
                    </div>
                    <div class="date-time">
                        <img src="assets/images/admin-calendar-blue.png" alt="">
                        <input type="date" placeholder="To Date">
                    </div>
                    <button class="search-btn">Search</button>
                    <button class="clear">Clear</button>
                </div>
                <table id="example" class="display responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Service Id</th>
                            <th>Service Date</th>
                            <th>Customer details</th>
                            <th>Service Provider</th>
                            <th>Gross Amount</th>
                            <th>Net Amount</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                </table>
                <div class="w3-dropdown-click">
                    <button onclick="myFunction()" class="w3-button w3-black"><img src="assets/images/group-38.png" alt=""></button>
                    <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="#" class="w3-bar-item w3-button">Edit & Reschedule </a>
                        <a href="#" class="w3-bar-item w3-button">Refund</a>
                        <a href="#" class="w3-bar-item w3-button">Cancel</a>
                        <a href="#" class="w3-bar-item w3-button">Change SP</a>
                        <a href="#" class="w3-bar-item w3-button">Escalate</a>
                        <a href="#" class="w3-bar-item w3-button"> History Log</a>
                        <a href="#" class="w3-bar-item w3-button"> Download Invoice</a>
                    </div>
                </div>
                <div>©2018 Helperland. All rights reserved.</div>
            </div>
        </div>
    </main>
 
    <script>
        var c = document.getElementsByClassName("coupon").length;
        //  
        document.getElementById("coupon").addEventListener("click", function() {
            for (let i = 0; i < c; i++) {
                document.getElementsByClassName("coupon")[i].style.display = "block";
            }
            document.getElementById("sub-transform").style.transform = "rotate(1turn)";
            document.getElementById("coupon").innerHTML = "";
        });
        document.getElementById("sub-transform-show").addEventListener("click", function() {
            for (let i = 0; i < c; i++) {
                document.getElementsByClassName("coupon")[i].style.display = "none";
            }
            document.getElementById("sub-transform").style.transform = "rotate(0.75turn)";
            document.getElementById("coupon").parentElement.classList.remove("sub-toggle");
            // document.getElementById("coupon").;

        });

        function norefresh(e) {
            e.preventDefault();
        }

        function classToggle() {
            const navs = document.querySelectorAll('.Navbar__Items');
            navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
        }

        document.querySelector('.Navbar__Link-toggle')
            .addEventListener('click', classToggle);

        // 
    </script>
    
    <script>
        document.getElementById("coupon").addEventListener("click", function() {
            document.getElementById("submenu").style.display = "block";
        });

        function myFunction() {
            var x = document.getElementById("Demo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php include 'adminajax.php';?>
</body>

</html>