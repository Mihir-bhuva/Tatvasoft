<script>
    $(document).ready(function() {
        spinner();
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=CustomerDashboardData",
                data: {
                    "userid": <?php echo $_SESSION['userid'] ?>
                },
            },
            "columns": [{
                    "data": "ServiceRequestId"
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
                        if (row.ServiceProviderId == null) {
                            return ''
                        } else {
                            span = '';
                            span1 = '';
                            for (i = 0; i < Math.ceil(row.rating); i++) {
                                span = span + '<span class="fa fa-star checked" id="1"></span>'
                            }
                            for (i = Math.ceil(row.rating) + 1; i < 6; i++) {
                                span1 = span1 + '<span class="fa fa-star" id="1"></span>'
                            }
                            return '<div class="provider"><div class="cap-img"><img src="./images/forma-1-copy-19.png" alt=""></div><div>' + row.FirstName + ' ' + row.LastName + '<br><div id="star">' + span + span1 + '  ' + +row.rating + '</div>'
                        }
                    }
                },
                {
                    render: function(data, type, row) {
                        return '<div class="payment">' + row.TotalCost + '€</div>';
                    }
                },
                {
                    render: function(data, type, row) {
                        return '<div class="action"><button class="reschduale" onclick="reschdule(event)" value="' + row.ServiceRequestId + '">Reschduale</button><button class="dash-cancel" onclick="dashcancel(event)" value="' + row.ServiceRequestId + '">Cancel</button></div>';
                    }

                },
            ],columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }]
        }).ajax.reload();
        $(".spinner").css("display", "none");
        $('#example tbody').on('click', 'tr', function() {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=CustomerDashboardDataAll",
                data: {
                    "userid": document.querySelectorAll("#example tr")[$('#example').DataTable().row(this).index() + 1].children[4].children[0].children[0].value
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    var totaltime = parseFloat(response[1]) + parseFloat(response[2]);
                    var time = new Date(totaltime * 3600 * 1000).toUTCString();
                    time = time.slice(17, 22);
                    $(".modeldate").html(response[0]);
                    $(".modelTime").html(response[1]+"-"+time);
                    $(".modelduration").html("Duration: " + response[2]);
                    $(".id").html("Service Id: " + response[3]);
                    $(".modelextra").html("Extras: " + response[4]);
                    $(".modelcost").html("Net Amount: <span>" + response[5] + " €</span>");
                    $(".modeladdress").html("Service Address: " + response[6] + " ," + response[7]);
                    $(".modelphone").html("Phone: " + response[8]);
                    $(".modelemail").html("Email: " + response[9]);
                    $(".modelcomment").html("Comments " + response[10]);
                    if (response[12] != null) {
                        span = '';
                        span1 = '';
                        for (i = 0; i < Math.ceil(response[14]); i++) {
                            span = span + '<span class="fa fa-star checked" id="1"></span>'
                        }
                        for (i = Math.ceil(response[14]) + 1; i < 6; i++) {
                            span1 = span1 + '<span class="fa fa-star" id="1"></span>'
                        }
                        $(".sp").html('<p style="white-space: nowrap;font-size: 22px;">Service Provider Details</p><br><div class="provider"><div class="cap-img"><img src="./images/forma-1-copy-19.png" alt=""></div><div class="spname">' + response[12] + "  " + response[13] + '<br><div id="star">' + span + span1 + '</div>');
                    } else {
                        $(".sp").html("");
                    }
                    if (response[11] == "no") {
                        $(".pets").html(`<img src="./images/no-pet-icon.png" style="margin-right: 10px;" alt="">I Don't have pets at home`);
                    } else {
                        $(".pets").html(`<img src="./images/included.png" style="margin-right: 10px;" alt="">I have pets at home`);

                    }
                    $(".modal-footer").html('<div class="action"><button class="reschduale" onclick="reschdule(event)" value="' + response[3] + '">Reschduale</button><button class="dash-cancel" onclick="dashcancel(event)" value="' + response[3] + '">Cancel</button></div>')
                    document.querySelector(".launch").click();
                }
            });
            // console.log(document.querySelectorAll("#example tr")[$('#example').DataTable().row(this).index() + 1].children[4].children[0].children[0].value);
        });
    });
  
</script>