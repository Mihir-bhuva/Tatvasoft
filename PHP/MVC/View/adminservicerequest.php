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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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

                <div onclick="logout()" class="logout">
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
                    <tr class="usermanage">
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
                    <input type="" name="Service ID" id="ServiceID" placeholder="Service ID">
                    <input type="" name="Service ID" id="Customer" placeholder="Customer">

                    <!-- <select class="user-name" name="" id="">
                        <option value="">Customer</option>
                    </select> -->
                    <input type="" name="Service ID" id="ServiceProvider" placeholder="Service Provider">
                    <!-- <select class="user-role" name="" id="">
                        <option value="">Service Provider</option>
                    </select> -->
                    <select class="user-status" name="" id="user-status">
                        <option value="">Status</option>
                        <option value="New">New</option>
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>

                    <!-- <div >
                        <img src="assets/images/admin-calendar-blue.png" alt="">
                    </div> -->
                    <input type="text" class="from date-time" id="fromdate-time" placeholder="From Date">
                    <!-- <div >
                        <img src="assets/images/admin-calendar-blue.png" alt="">
                    </div> -->
                    <input type="text" class="to date-time" id="todate-time" placeholder="To Date">
                    <button class="search-btn">Search</button>
                    <button class="clear">Clear</button>
                </div>
                <table id="example" class="display responsive table table-bordered table-striped" style="color: #4f4f4f; width:100%">
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
                    <tbody>
                    </tbody>

                </table>
                <div>©2018 Helperland. All rights reserved.</div>
            </div>
        </div>
        <button type="button" style="display: none;" class="btn btn-primary launch1" data-toggle="modal" data-target="#exampleModalCenter1">
            Launch demo modal
        </button>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Service Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="addressform">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="Date" required placeholder="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="date">Time</label>
                                        <select name="" class="custom-select  bath" id="cleantime">
                                            <option value="8" selected>8:00</option>
                                            <option value="8.5">8:30</option>
                                            <option value="9">9:00</option>
                                            <option value="9.5">9:30</option>
                                            <option value="10">10:00</option>
                                            <option value="10.5">10:30</option>
                                            <option value="11">11:00</option>
                                            <option value="11.5">11:30</option>
                                            <option value="12">12:00</option>
                                            <option value="12.5">12:30</option>
                                            <option value="13">13:00</option>
                                            <option value="13.5">13:30</option>
                                            <option value="14">14:00</option>
                                            <option value="14.5">14:30</option>
                                            <option value="15">15:00</option>
                                            <option value="15.5">15:30</option>
                                            <option value="16">16:00</option>
                                            <option value="16.5">16:30</option>
                                            <option value="17">17:00</option>
                                            <option value="17.5">17:30</option>
                                            <option value="18">18:00</option>
                                        </select>
                                    </div>
                                </div>
                                <h3>Service Address</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Street name</label>
                                        <input type="text" class="form-control" id="Streetname" required placeholder="Street name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">House number</label>
                                        <input type="text" class="form-control" id="Housenumber" required placeholder="House number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Postal code</label>
                                        <input type="text" class="form-control" required placeholder="Postal code" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">City</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Bonn</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                </div>

                                <h3>Invoice Address</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Street name</label>
                                        <input type="text" class="form-control" id="Streetname1" required placeholder="Street name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">House number</label>
                                        <input type="text" class="form-control" id="Housenumber1" required placeholder="House number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Postal code</label>
                                        <input type="text" class="form-control" required placeholder="Postal code" id="inputCity1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">City</label>
                                        <select id="inputState1" class="form-control">
                                            <option selected>Bonn</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                </div>

                                <!-- <button type="submit" class="save btn btn-primary">Edit</button> -->
                                <h4>Why do you want to reschedule service request?</h4>
                                <textarea name="" id="" placeholder="Why do you want to reschedule service request?" cols="50" rows="4"></textarea>
                                <h4>Call Center EMP Notes</h4>
                                <textarea name="" id="" cols="50" placeholder="Enter Notes" rows="4"></textarea>
                            </form>
                            <div class="addresserror"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" value="" onclick="editadd(event)" class="btn save btn-primary edit">Update</button>
                    </div>
                </div>
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
        function logout() {
            window.location = "http://localhost/Helperland/MVC/index.php?function=Logout";
        }
        document.querySelector(".usermanage").addEventListener("click", function() {
            window.location = 'http://localhost/Helperland/MVC/index.php?function=AdminUsermanage'
        })
        document.getElementById("coupon").addEventListener("click", function() {
            document.getElementById("submenu").style.display = "block";
        });

        function myFunction(event) {
            // console.log(event.target.parentNode.children[1].id)
            // var x = $("#"+event.target.parentNode.children[1].id);
            if (event.target.parentNode.children[1].className.indexOf("w3-show") == -1) {
                event.target.parentNode.children[1].className += " w3-show";
            } else {
                event.target.parentNode.children[1].className = event.target.parentNode.children[1].className.replace(" w3-show", "");
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
    <?php include 'adminajax.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>