<script>
    function spinner() {
        $(".spinner").css("display", "block");
    }
    $(document).ready(function() {
        spinner();
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=SPUpcomingserviceData",
                data: {
                    "userid": <?php echo $_SESSION['userid'] ?>
                },
            },
            "columns": [{
                    render: function(data, type, row) {

                        // console.log(row)
                        return row.ServiceRequestId

                    }
                },
                {
                    render: function(data, type, row) {

                        var totaltime = parseFloat(row.ServiceStartTime) + parseFloat(row.TotalHours);
                        var time = new Date(totaltime * 3600 * 1000).toUTCString();
                        time = time.slice(17, 22);
                        return '<div class="cus-detail"><div><img src="./images/calendar2.png" alt=""></div><div class="cus-date">' + row.ServiceStartDate + '</div></div><div class="cus-detail"><div><img src="./images/layer-712.png" alt=""></div><div class="cus-time">' + row.ServiceStartTime + '-' + time + '</div></div>';

                    }
                },
                {
                    render: function(data, type, row) {

                        return row.FirstName + ' ' + row.LastName + '<br><div class="cus-detail"><div><img src="./images/layer-719.png" alt=""></div><div class="cus-address">' + row.AddressLine1 + ' ' + row.AddressLine2 + ',' + row.PostalCode + ' ' + row.City + '</div></div><div></div>';

                    }
                },
                {
                    render: function(data, type, row) {

                        return '<div class="payment">' + row.TotalCost + '€</div>';

                    }
                },
                {
                    render: function(data, type, row) {

                        return ''

                    }
                },
                {
                    render: function(data, type, row) {
                        if ((new Date(row.ServiceStartDate).getTime()) < (new Date().getTime())) {

                            return '<div class="action" ><button class="reschduale" style="background:#2eb72e"  value="' + row.ServiceRequestId + '">Complete</button><button style="display:none" class="reschduale" value="' + row.ServiceRequestId + '">Cancel</button></div>';
                        } else {

                            return '<div class="action"><button class="reschduale" value="' + row.ServiceRequestId + '">Cancel</button></div>';
                        }

                    }

                },
            ],
            bFilter: false,
            dom:"rtlip",
            columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            "language": {
                "emptyTable": "No Record Found"
            }
        }).ajax.reload();
        $(".spinner").css("display", "none");
        $('#example tbody').on('click', 'tr', function() {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=CustomerDashboardDataAll",
                data: {
                    "userid": document.querySelectorAll("#example tr")[$('#example').DataTable().row(this).index() + 1].children[5].children[0].children[0].value
                },
                dataType: "json",
                success: function(response) {
                    // console.log(response);
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
                    if ((new Date(response[0]).getTime()) < (new Date().getTime())) {
                        $(".modal-footer").html('<div class="action"><div class="action" ><button class="reschduale" style="background:#2eb72e" onclick="cancelrequest(event,1)" value="' + response[3] + '">Complete</button><button class="reschduale" onclick="cancelrequest(event,2)" value="' + response[3] + '">Cancel</button></div></div>')
                    } else {
                        $(".modal-footer").html('<div class="action"><button class="reschduale" onclick="cancelrequest(event,2)" value="' + response[3] + '">Cancel</button></div>')
                    }
                    document.querySelector(".launch").click();
                }
            });
            // console.log(document.querySelectorAll("#example tr")[$('#example').DataTable().row(this).index() + 1].children[4].children[0].children[0].value);
        });
    });

    function cancelrequest(event, eventid) {
        if (event.currentTarget.parentNode.childElementCount == 1) {
            spinner();
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=cancelrequest",
                data: {
                    "id": event.target.value,
                    "eventid": eventid,
                    "userid": <?php echo $_SESSION['userid'] ?>
                },
                success: function(response) {
                    response = response.trim();
                    if (response == "success") {
                        $(".spinner").css("display", "none");
                        $(".close").click();
                        $("#example").DataTable().ajax.reload();
                    }
                }
            });
        }else{
            spinner();
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=cancelrequest1",
                data: {
                    "id": event.target.value,
                    "eventid": eventid,
                    "userid": <?php echo $_SESSION['userid'] ?>
                },
                success: function(response) {
                    response = response.trim();
                    if (response == "success") {
                        $(".spinner").css("display", "none");
                        $(".close").click();
                        $("#example").DataTable().ajax.reload();
                    }
                }
            });
        }
    }
</script>