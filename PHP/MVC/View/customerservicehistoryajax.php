<script>
    $(document).ready(function() {
        spinner();
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=ServiceHistoryData",
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
                        // console.log(row['rating'])
                        return '<div class="cus-detail"><div><img src="./images/calendar2.png" alt=""></div><div class="cus-date">' + row.ServiceStartDate + '</div></div><div class="cus-detail"><div><img src="./images/layer-712.png" alt=""></div><div class="cus-time">' + row.ServiceStartTime + '-' + time + '</div></div>';
                    }
                },
                {
                    render: function(data, type, row) {
                        if (row.ServiceProviderId == null) {
                            return ''
                        } else {
                            if(row.rating==null){
                                row.rating=0 
                            }
                            return '<div class="provider"><div class="cap-img"><img src="./images/forma-1-copy-19.png" alt=""></div><div>' + row.FirstName + ' ' + row.LastName + '<br><div style="display:flex"><div id="' + row.ServiceRequestId + '"></div><div>' + row.rating + '</div></div><script>$("#' + row.ServiceRequestId + '").rateYo({starWidth: "20px",rating:' + row.rating + ',readOnly: true})<' + '/' + 'script></div>'
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
                        if (row.Status == "Cancelled") {
                            return '<td><button class="cancel-btn">' + row.Status + '</button></td>';
                        } else {
                            return '<td><button class="complete-btn">' + row.Status + '</button></td>';
                        }
                    }
                },
                {
                    render: function(data, type, row) {
                        if (row.Status == "Cancelled") {
                            return '<div class="action"><button class="reschduale"  value="' + row.ServiceRequestId + '">RateSp</button></div>';
                        } else {
                            if (true) {
                                return '<div class="action"><button class="reschduale" onclick="ratesp(event)" value="' + row.ServiceRequestId + '">RateSp</button></div>';
                            }
                            // else {
                            //     return '<div class="action"><button class="reschduale"  value="' + row.ServiceRequestId + '">RateSp</button></div>';
                            // }
                        }
                    }

                },
            ],
            columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            dom: 'f<"#id"B>rtlip',
            buttons: [
                'excel'
            ],
            language: {
                searchPanes: {
                    emptyPanes: 'There are no panes to display.'
                }
            }
            // responsive: true
        }).ajax.reload();
        $(".spinner").css("display", "none");
        $('#example tbody').on('click', 'tr', function() {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=ServiceHistoryDataAll",
                data: {
                    "userid": document.querySelectorAll("#example tr")[$('#example').DataTable().row(this).index() + 1].children[5].children[0].children[0].value
                },
                dataType: "json",
                success: function(response) {
                    // console.log(response[14])
                    document.querySelector(".launch").click();
                    var totaltime = parseFloat(response[1]) + parseFloat(response[2]);
                    var time = new Date(totaltime * 3600 * 1000).toUTCString();
                    time = time.slice(17, 22);
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
                    if (response[12] != null) {if(response[14]==null){
                        response[14]=0 
                            }
                        $(".sp").html('<p style="white-space: nowrap;font-size: 22px;">Service Provider Details</p><br><div class="provider"><div class="cap-img"><img src="./images/forma-1-copy-19.png" alt=""></div><div class="spname">' + response[12] + "  " + response[13] + '<br><div style="display:flex"><div id="' + response[3] + '"></div><div>' + response[14] + '</div></div><script>$("#' + response[3] + '").rateYo({starWidth: "20px",rating:' + response[14] + ',readOnly: true})<' + '/' + 'script></div>');
                    } else {
                        $(".sp").html("");
                    }
                    if (response[11] == "no") {
                        $(".pets").html(`<img src="./images/no-pet-icon.png" style="margin-right: 10px;" alt="">I Don't have pets at home`);
                    } else {
                        $(".pets").html(`<img src="./images/included.png" style="margin-right: 10px;" alt="">I have pets at home`);

                    }

                }
            });
            // console.log(document.querySelectorAll("#example tr")[$('#example').DataTable().row(this).index() + 1].children[4].children[0].children[0].value);
        });
    });
    // rate
    function ratesp(event) {
        $.ajax({
            type: "post",
            url: "https://localhost/Helperland/MVC/index.php?function=Servicehistoryratingcheck",
            data: {
                "id": event.target.value,
                "userid": <?php echo $_SESSION['userid'] ?>,
            },
            // dataType: "dataType",
            success: function(response) {
                // $("#example").DataTable().ajax.reload();
                console.log(response);
                // event.target.setAttibute("disabled","true")
                response = response.trim();
                if (response == 'success') {
                    // document.querySelector(".popup2").style.visibility = "hidden";
                    Swal.fire({
                        icon: 'error',
                        title: '',
                        text: 'You already',
                    });
                } else {
                    document.querySelector(".popup2").style.visibility = "visible";
                    document.querySelector(".submitt").value = event.target.value;
                }
            }
        });

    }
</script>