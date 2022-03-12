<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service History</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!-- BOX ICONS CSS-->
    <link rel="stylesheet" href="assets/CSS/navbar.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
    <link rel="stylesheet" href="assets/CSS/servicehistory.css">
    <!-- <link rel="stylsheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"> -->
</head>

<body>
    <div class="spinner">
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-dark" role="status">
                <!-- <img src="assets/images/logo-small.png" alt="">  -->
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <?php include 'header.php' ?>
    <div class="popup2" id="popup2">
        <div class="popupcontent2" id="popupcontent2">
            <div class="popup-head2">Reschedule Service Request<span class="close2">&times;</span></div>
            <div class="popup-body2">
                <!-- <form action="index.php?function=Forgetpassword" method="post"> -->
                <div style="display: flex;">
                    <!-- <input type="text" class="forgetemail" name="email" placeholder="Email"> -->
                    <div class="date">
                        <div class="date-img"><img src="./images/calendar-book-service.png" alt=""></div>
                        <div class="tomorrow-date"><span>23/2/2022</span></div>
                    </div>
                    <select name="" class="bath" id="cleantime">
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
            <!-- <input  value=""> -->
            <button class="popup-footer continue-btn" value="" onclick="update(event)">Update</button>
            <!-- </form> -->
        </div>
    </div>
    <div class="popup3" id="popup3">
        <div class="popupcontent3" id="popupcontent3">
            <div class="popup-head3">Cancel Service Request<span class="close3">&times;</span></div>
            <div class="popup-body3">
                <!-- <form action="index.php?function=Forgetpassword" method="post"> -->
                <div style="display: flex;">
                    <!-- <input type="text" class="forgetemail" name="email" placeholder="Email"> -->
                    <div>
                        <textarea name="" id="" style="width: 337px;resize:none;" maxlength="500" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <!-- <input  value=""> -->
            <button class="popup-footer continue-btn" value="" onclick="cancel(event)" disabled>Cancel Now</button>
            <!-- </form> -->
        </div>
    </div>
    <!--  -->
    <!-- Button trigger modal -->

    <main>
        <div class="heading">Welcome, <strong><?php echo $_SESSION['FirstName'] . "  " . $_SESSION['LastName'] ?></strong></div>
        <button type="button" style="display: none;" class="btn btn-primary launch" data-toggle="modal" data-target="#exampleModalCenter">
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div style="display: flex;">
                            <div style="width: 600px;">
                                <div class="model-date-time">
                                    <div class="modeldate"></div>
                                    <div class="modelTime"></div>
                                </div>
                                <div class="modelduration"></div>
                                <div class="id"></div>
                                <div class="modelextra"></div>
                                <div class="modelcost"></div>
                                <div class="modeladdress"></div>
                                <div class="modelbillingaddress"></div>
                                <div class="modelphone"></div>
                                <div class="modelemail"></div>
                                <div class="modelcomment"></div>
                                <div class="pets">
                                </div>
                            </div>
                            <div class="sp">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <div class="history">
                    <p>Current Service Requests</p>
                    <div style="margin-left: auto;">
                        <button class="addservice">
                            <a href="index.php?function=BookService">Add New Service Request</a>
                        </button>
                    </div>
                </div>
        <div class="tables">
            <table class="table-1 table table-hover">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td class="dashboard" style="height: 20px;">Dashboard</td>
                    </tr>
                    <tr>
                        <td class="servicehistory" style="height: 20px;">Service History</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Service Schedule</td>
                    </tr>
                    <tr>
                        <td class="favorite" style="height: 20px;">Favourite Pros</td>
                    </tr>
                    <tr>
                        <td style="height: 20px;">Invoices</td>
                    </tr>
                    <tr>
                        <td>Notifications</td>
                    </tr>
                </tbody>
            </table>

            <!-- <div style="margin-left: auto;margin-right: auto;"> -->
                <!-- <div class="history">
                    <p>Current Service Requests</p>
                    <div style="margin-left: auto;">
                        <button class="addservice">
                            <a href="index.php?function=BookService">Add New Service Request</a>
                        </button>
                    </div>
                </div> -->
                <table id="example" class="display responsive nowrap table table-bordered table-striped" style="color: #4f4f4f; width:100%">
                    <thead>
                        <tr>
                            <th>Service Id</th>
                            <th>Service Date</th>
                            <th>Service Provider</th>
                            <th>Payment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot></tfoot>
                </table>
            <!-- </div> -->
        </div>
    </main>
    <?php include 'footer.php';
    include 'customerdashboardajax.php'; ?>
    <!-- <script>
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
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });
    </script> -->
    <script src="assets/JS/customerdashboard.js"></script>
    <script>
        $(".dashboard").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=customerdashboard"
        });
        $(".servicehistory").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=Servicehistory"
        });
        $(".favorite").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=favoritepros"
        });
    </script>
    <!-- side-nav js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>  -->
    <!-- JavaScript Bundle with Popper -->
</body>

</html>