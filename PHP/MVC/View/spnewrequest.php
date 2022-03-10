<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperland</title>

    <!-- bootstarpform -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/CSS/navbar.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
    <link rel="stylesheet" href="assets/CSS/servicehistory.css">


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
    <?php include 'header.php' ?><main>
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
                    <div class="modal-footer" style="justify-content: start">

                    </div>
                </div>
            </div>
        </div>
        <div style="display:flex">
        <table class="table-1 table table-hover">
                <thead></thead>
                <tbody>
                    <tr>
                        <td style="height: 20px;">Dashboard</td>
                    </tr>
                    <tr class="newrequest" style="background-color: #0C4651;">
                        <td style="height: 20px;">New Service Requests</td>
                    </tr>
                    <tr class="upcomingservice">
                        <td style="height: 20px;">Upcoming Services</td>
                    </tr>
                    <tr class="serviceschdule">
                        <td style="height: 20px;">Service Schedule</td>
                    </tr>
                    <tr class="servicehistory">
                        <td style="height: 20px;"> Service History</td>
                    </tr>
                    <tr class="myratings">
                        <td style="height: 20px;">My Ratings</td>
                    </tr>
                    <tr class="blockcus">
                        <td>Block Customer</td>
                    </tr>
                </tbody>
            </table>
            <table id="example" class="display responsive table-hove" style="color: #4f4f4f; width:100%">
                <thead>
                    <tr>
                        <th>Service Id</th>
                        <th>Service Date</th>
                        <th>Customer Details</th>
                        <th>Payment</th>
                        <th>Conflict</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot></tfoot>
            </table>

        </div>
        <!-- <div id="calendar"></div> -->
    </main>
    <?php include 'footer.php';
    include 'spnewrequestajax.php' ?>
    <script>
        //  $(".newrequest").click(function() {
        //     window.location = "https://localhost/Helperland/MVC/index.php?function=customerdashboard"
        // });
        $(".upcomingservice").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=UpcomingService"
        });
        $(".serviceschdule").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=serviceschdule"
        });
        $(".servicehistory").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=servicehistory"
        });
        $(".myratings").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=SPMyRatings"
        });
        $(".blockcus").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=Blockcustomer"
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

</body>

</html>