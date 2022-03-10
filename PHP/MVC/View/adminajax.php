<script>
    $(document).ready(function() {
        //  spinner(); 
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=AdminServiceRequestData",
                data: ''
            }, "columns": [{
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

                        return row.FirstName + ' ' + row.LastName + '<br><div class="cus-detail"><div><img src="./images/layer-719.png" alt=""></div><div class="cus-address">' + row.AddressLine1 + ' ' + row.AddressLine2 + ',' + row.PostalCode + ' ' + row.City + '</div></div><div></div>';

                    }
                },
                {
                    render: function(data, type, row) {
                        return 'Ratings<div style="display:flex"><div id="' + row.ServiceRequestId + '"></div><div>' + row.Ratings + '</div></div><script>$("#' + row.ServiceRequestId + '").rateYo({starWidth: "20px",rating:' + row.Ratings + ',readOnly: true})<' + '/' + 'script>';
                    }

                },

            ],
            "language": {
                "emptyTable": "No Record Found"
            }
        })
    })
</script>