<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperland</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <!-- bootstarpform -->    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <tr class="newrequest">
                        <td style="height: 20px;">New Service Requests</td>
                    </tr>
                    <tr class="upcomingservice">
                        <td style="height: 20px;">Upcoming Services</td>
                    </tr>
                    <tr class="serviceschdule" style="background-color: #0C4651;">
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


            <div id="calendar"></div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script>
        $(".newrequest").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=customerdashboard"
        });
        $(".upcomingservice").click(function() {
            window.location = "https://localhost/Helperland/MVC/index.php?function=UpcomingService"
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
    <script>
        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
                themeSystem: "standard",
                customButtons: {

                    completed: {
                        text: 'Completed',
                    },
                    Upcoming: {
                        text: 'Upcoming',
                    },
                },
                header: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'completed,Upcoming'
                },
                eventClick: function(calEvent, jsEvent, view) {
                    $.ajax({
                        type: "post",
                        url: "https://localhost/Helperland/MVC/index.php?function=CustomerDashboardDataAll",
                        data: {
                            "userid": calEvent.id
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response[1].replace(":", ".") - parseInt(response[1]) == 0.3000000000000007) {
                                s3 = response[1].replace(":", ".").replace("30", "50")
                                var totaltime = parseFloat(s3) + parseFloat(response[2]);
                                var time = new Date(totaltime * 3600 * 1000).toUTCString();
                                time = time.slice(17, 22);
                            } else {
                                var totaltime = parseFloat(response[1]) + parseFloat(response[2]);
                                var time = new Date(totaltime * 3600 * 1000).toUTCString();
                                time = time.slice(17, 22);
                            }
                            $(".modeldate").html(response[0]);
                            $(".modelTime").html(response[1] + "-" + time);
                            // $(".fc-title").html(response[1] + "-" + time);
                            $(".modelduration").html("Duration: " + response[2]);
                            $(".id").html("Service Id: " + response[3]);
                            $(".modelextra").html("Extras: " + response[4]);
                            $(".modelcost").html("Net Amount: <span>" + response[5] + " €</span>");
                            $(".modeladdress").html("Service Address: " + response[6] + " ," + response[7]);
                            $(".modelphone").html("Phone: " + response[8]);
                            $(".modelemail").html("Email: " + response[9]);
                            $(".modelcomment").html("Comments " + response[10]);

                            $(".sp").html('<iframe src="https://www.google.com/maps?q=' + response[6] + '&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>');

                            if (response[11] == "no") {
                                $(".pets").html(`<img src="./images/no-pet-icon.png" style="margin-right: 10px;" alt="">I Don't have pets at home`);
                            } else {
                                $(".pets").html(`<img src="./images/included.png" style="margin-right: 10px;" alt="">I have pets at home`);

                            }
                            if ((response[15].trim()) == "Completed") {
                                $(".modal-footer").html('')
                            } else {
                                if ((new Date(response[0]).getTime()) < (new Date().getTime())){
                                $(".modal-footer").html('<div class="action" ><button class="reschduale" style="background:#2eb72e"  value="' + response[3] + '">Complete</button><button style="display:none" class="reschduale" value="' + response[3] + '">Cancel</button></div>')
                            } else{
                                $(".modal-footer").html('<div class="action" ><button  class="reschduale" value="' + response[3] + '">Cancel</button></div>')
                            }
                            }
                            document.querySelector(".launch").click();
                            

                        }
                    });

                },
                eventSources: [{
                        url: 'https://localhost/Helperland/MVC/index.php?function=SPSchdule&parameter=<?php echo $_SESSION['userid'] ?>',
                        color: '#1d7a8c',
                        textColor: '#fff',
                    },
                    {
                        url: 'https://localhost/Helperland/MVC/index.php?function=SPSchduleCompleted&parameter=<?php echo $_SESSION['userid'] ?>',
                        color: '#efefef',
                        textColor: '#4f4f4f',
                    }
                ],
            })
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>