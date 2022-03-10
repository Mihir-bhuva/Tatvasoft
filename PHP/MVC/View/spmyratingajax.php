<script>
  $(document).ready(function() {
        // spinner();
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=SPMyRating",
                data: {
                    "userid": <?php echo $_SESSION['userid'] ?>
                },
            },
            "columns": [{
                    render: function(data, type, row) {
                        return row.ServiceRequestId + '<br>' + row.FirstName + '  ' + row.LastName +'<br> <strong>Comments:     '+row.Comments+'</strong>'
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
                        return 'Ratings<div style="display:flex"><div id="' + row.ServiceRequestId + '"></div><div>' + row.Ratings + '</div></div><script>$("#' + row.ServiceRequestId + '").rateYo({starWidth: "20px",rating:' + row.Ratings + ',readOnly: true})<' + '/' + 'script>';
                    }

                },

            ],
            dom:"rtlip",
            bFilter: false,
            columnDefs: [{
                orderable: false,
                "defaultContent": "-",
                "targets": "_all"
            }],"language": {
                "emptyTable": "No Record Found"
            }
        }).ajax.reload();
        $(".spinner").css("display", "none");

    });
</script>