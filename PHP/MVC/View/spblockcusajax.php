<script>
    $(document).ready(function() {

        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=CustomerList",
                data: {
                    "userid": <?php echo $_SESSION['userid'] ?>
                },
            },
            "columns": [{
                render: function(data, type, row) {
                    if (row.blocked == 0) {
                        // console.log(row)
                        return '<div class="col-sm-6"><div class="card"><div class="card-body"><h5 class="card-title" style="margin: 0 auto; width: fit-content"><img src="assets/images/avatar-hat.png" alt=""></h5><p class="card-text">' + row.FirstName + ' ' + row.LastName + '</p><div style="margin: 0 auto; width: fit-content;"><button onclick="block(event)" value="' + row.UserId + '" style="background-color: rgb(255, 107, 107) ;" class="block reschduale">Block</button></div></div></div></div>'
                    } else {
                        return '<div class="col-sm-6"><div class="card"><div class="card-body"><h5 class="card-title" style="margin: 0 auto; width: fit-content"><img src="assets/images/avatar-hat.png" alt=""></h5><p class="card-text">' + row.FirstName + ' ' + row.LastName + '</p><div style="margin: 0 auto; width: fit-content;"><button onclick="block(event)" value="' + row.UserId + '" style="background-color: #1d7a8c;" class="block reschduale">Unblock</button></div></div></div></div>'
                    }
                }
            }, ],
            columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            dom: 'lrtip',
            "language": {
                "emptyTable": "No Record Found"
            }

        }).ajax.reload();
    })

    function block(event) {
        // spinner();
        if ($(event.target).html() == "Block") {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=CustomerBlock",
                data: {
                    "userid": <?php echo $_SESSION['userid'] ?>,
                    "targetid": event.target.value
                },
                // dataType: "dataType",
                success: function(response) {
                    response = response.trim()
                    if (response == 'success') {
                        console.log(event)
                        $(event.target).html("Unblock");
                        $(event.target).css("background-color", "#1d7a8c")
                    }
                }
            });
        } else {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=CustomerUnblock",
                data: {
                    "userid": <?php echo $_SESSION['userid'] ?>,
                    "targetid": event.target.value
                },
                // dataType: "dataType",
                success: function(response) {
                    response = response.trim()
                    if (response == 'success') {
                        console.log(event)
                        $(event.target).html("Block");
                        $(event.target).css("background-color", "rgb(255, 107, 107)")
                    }
                }
            });
        }
    }
</script>