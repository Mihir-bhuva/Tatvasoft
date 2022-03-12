<script>
    function data(event) {
        // console.log(event.target?.parentNode.children[4].value)
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=AdminServiceRequestData",
                data: {

                    "serviceid": event.target.parentNode.children[0].value,
                    "customer": event.target.parentNode.children[1].value,
                    "sp": event.target.parentNode.children[2].value,
                    "role": event.target.parentNode.children[3].selectedOptions[0].value,
                    "fromdate": event.target.parentNode.children[4].value,
                    "todate": event.target.parentNode.children[5].value,
                }
            },
            "columns": [{
                    render: function(data, type, row) {
                        return row.ServiceRequestId
                    }
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

                        return row.UserFirstName + ' ' + row.UserLastName + '<br><div class="cus-detail"><div><img src="./images/layer-719.png" alt=""></div><div class="cus-address">' + row.AddressLine1 + ' ' + row.AddressLine2 + ',' + row.PostalCode + ' ' + row.City + '</div></div><div></div>';

                    }
                },
                {
                    render: function(data, type, row) {
                        if (row.ServiceProviderId != null) {
                            if (row.Rating == null) {
                                row.Rating = 0
                                Rating = row.Rating;
                                Rating = 0
                                return '<div class="provider"><div class="cap-img"><img src="./images/forma-1-copy-19.png" alt=""></div><div>' + row.SpFirstName + ' ' + row.SpLastName + '<br><div id="star"><div style="display:flex"><div id="' + row.ServiceRequestId + '"></div><div>' + Rating + '</div></div><script>$("#' + row.ServiceRequestId + '").rateYo({starWidth: "20px",rating:' + Rating + ',readOnly: true})<' + '/' + 'script>'
                            } else {
                                return '<div class="provider"><div class="cap-img"><img src="./images/forma-1-copy-19.png" alt=""></div><div>' + row.SpFirstName + ' ' + row.SpLastName + '<br><div id="star"><div style="display:flex"><div id="' + row.ServiceRequestId + '"></div><div>' + row.Rating + '</div></div><script>$("#' + row.ServiceRequestId + '").rateYo({starWidth: "20px",rating:' + row.Rating + ',readOnly: true})<' + '/' + 'script>'

                            }
                        } else {
                            return ' '
                        }
                    }
                },
                {
                    render: function(data, type, row) {
                        return row.TotalCost;
                    }

                },
                {
                    render: function(data, type, row) {
                        return row.TotalCost;
                    }

                },
                {
                    render: function(data, type, row) {
                        return ' ';
                    }

                },
                {
                    render: function(data, type, row) {
                        if (row.Status == "Pending") {
                            return '<button class="new">New</button>';
                        }

                        if (row.Status == "Cancelled") {
                            return '<button class="cancel-btn">Cancel</button>';
                        }

                        if (row.Status == "Accepted") {
                            return '<button class="pending">Pending</button>';
                        }
                        if (row.Status == "Completed") {
                            return '<button class="complete-btn">Completed</button>';
                        }


                    }

                },
                {
                    render: function(data, type, row) {
                        return ' ';
                    }

                },
                {
                    render: function(data, type, row) {
                        return '<div class="w3-dropdown-click"><button value="' + row.ServiceRequestId + '" onclick="myFunction(event)" class="w3-button w3-black"><img src="assets/images/group-38.png" alt=""></button><div  class="w3-dropdown-content w3-bar-block w3-border"><a href="#" onclick="edit(event)" id=' + row.ServiceRequestId + ' class="w3-bar-item w3-button">Edit &amp; Reschedule </a><a href="#" class="w3-bar-item w3-button">Refund</a><a href="#" class="w3-bar-item w3-button">Cancel</a><a href="#" class="w3-bar-item w3-button">Change SP</a><a href="#" class="w3-bar-item w3-button">Escalate</a><a href="#" class="w3-bar-item w3-button"> History Log</a><a href="#" class="w3-bar-item w3-button"> Download Invoice</a></div></div>'
                    }
                }
            ],
            columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            "oLanguage": {
                "sEmptyTable": "No Record Found"
            },
            dom: "rtlip",
            // retrieve: true,
            destroy: true,
        }).ajax.reload();
    }
    $(document).ready(function() {
        $(".search-btn").click()
    })

    $(".search-btn").on("click", data)
    $(".clear").on("click", function() {
        $("#ServiceID").val('');
        $("#Customer").val('');
        $("#ServiceProvider").val('');
        $("#user-status").val('');
        $("#fromdate-time").val('');
        $("#todate-time").val('');

        data(event);
    })
    // editand reschdule
    function myFunction(event) {
        // console.log(event.target.parentNode.children[1].id)
        // var x = $("#"+event.target.parentNode.children[1].id);
        if (event.target.parentNode.children[1].className.indexOf("w3-show") == -1) {
            event.target.parentNode.children[1].className += " w3-show";
        } else {
            event.target.parentNode.children[1].className = event.target.parentNode.children[1].className.replace(" w3-show", "");
        }
    }

    function edit(event) {
        // console.log(event.target.id);
       
        document.querySelector(".launch1").click();
        $.ajax({
            type: "post",
            url: "https://localhost/Helperland/MVC/index.php?function=EditandReschdule",
            data: {
                "id": event.target.id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                // $("#example").DataTable().ajax.reload();
                // $(".close").click();
                document.querySelector(".edit").id = event.target.id;
                document.querySelector(".edit").value = response['AddressId'];
                document.querySelector("#Date").value = response['ServiceStartDate'];
                document.querySelector("#Date").value = response['ServiceStartDate'];
                document.querySelector("#Streetname").value = response['AddressLine1'];
                document.querySelector("#Housenumber").value = response['AddressLine2'];
                document.querySelector("#inputCity").value = response['PostalCode'];
                document.querySelector("#inputState").value = response['City'];
                
                document.querySelector("#Streetname1").value = response['AddressLine1'];
                document.querySelector("#Housenumber1").value = response['AddressLine2'];
                document.querySelector("#inputCity1").value = response['PostalCode'];
                document.querySelector("#inputState1").value = response['City'];
                


            }
        })
    }
    function editadd(event) {
        $.ajax({
            type: "post",
            url: "https://localhost/Helperland/MVC/index.php?function=Adminupdateaddress",
            data: {
                "id": event.target.value,
                "serviceid": event.target.id,
                "street": document.querySelector("#Streetname").value,
                "house": document.querySelector("#Housenumber").value,
                "PostalCode": document.querySelector("#inputCity").value,
                "City": document.querySelector("#inputState").value,
                "Date": document.querySelector("#Date").value,
                "cleantime": document.querySelector("#cleantime").selectedOptions[0].innerHTML,
            },
            // dataType: "dataType",
            success: function(response) {
                // console.log(response);

                $("#example").DataTable().ajax.reload();
                response = response.trim();
                if (response == "success") {
                    $(".close").click();
                   
                }
            }
        })
    }
</script>