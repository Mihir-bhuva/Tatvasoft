<script>
    function data(event) {
        // console.log(event.target?.parentNode.children[4].value)
        $('#example').DataTable({
            "ajax": {
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=AdminUsermanagedata",
                data: {
                    
                    "UserName": event.target.parentNode.children[0].value,
                    "status": event.target.parentNode.children[1].selectedOptions[0].value,
                    "PhoneNumber": event.target.parentNode.children[2].value,
                    "PostalCode": event.target.parentNode.children[3].value,
                    "Email": event.target.parentNode.children[4].value,
                    "fromdate": event.target.parentNode.children[5].value,
                    "todate": event.target.parentNode.children[6].value,
                }
            },
            "columns": [{
                    render: function(data, type, row) {
                        return row.FirstName+' '+row.LastName
                    }
                },
                {
                    render: function(data, type, row) {
                      
                      return " "
                    }
                },
                {
                    render: function(data, type, row) {

                        return row.CreatedDate

                    }
                },
                {
                    render: function(data, type, row) {
                        if (row.UserTypeId ==0) {
                           return "Customer"
                        } else {
                            return 'Service Provider '
                        }
                    }
                },
                {
                    render: function(data, type, row) {
                        return row.Mobile;
                    }

                },
                {
                    render: function(data, type, row) {
                        return row.ZipCode;
                    }

                },
                {
                    render: function(data, type, row) {
                        if (row.Status!=0) {
                           return '<button class="complete-btn">Active</button>'
                        } else {
                            return '<button class="cancel-btn">Inactive</button>'
                        }
                    }

                },
                {
                    render: function(data, type, row) {
                        if(row.Status==0){
                        return '<div class="w3-dropdown-click"><button onclick="myFunction(event)" class="w3-button w3-black"><img src="assets/images/group-38.png" alt=""></button><div  class="w3-dropdown-content w3-bar-block w3-border"><a href="#" id="'+row.UserId+'" onclick="editadd(event)" class="w3-bar-item w3-button">Active </a></div></div>'
                    }else if(row.Status==1){
                        return '<div class="w3-dropdown-click"><button onclick="myFunction(event)" class="w3-button w3-black"><img src="assets/images/group-38.png" alt=""></button><div  class="w3-dropdown-content w3-bar-block w3-border"><a href="#" id="'+row.UserId+'"onclick="editadd(event)" class="w3-bar-item w3-button">Inactive </a></div></div>'
                    }
                    else{
                        return ''
                    }
                }
                }
            ],
            columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            "language": {
                "emptyTable": "No Record Found"
            },
            dom: "Brtlip",
            // retrieve: true,
            destroy: true,
            // retrieve: true,
            buttons: [
                'excel'
            ],
        }).ajax.reload();
    }
    function editadd(event) {
        event.preventDefault();
        $.ajax({
            type: "post",
            url: "https://localhost/Helperland/MVC/index.php?function=AdminupdateStatus",
            data: {
                "id": event.target.id,
                "status":(event.target.innerHTML).trim(),
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
    $(document).ready(function() {
        $(".search-btn").click()
    })
    $(".search-btn").on("click", data)
    $(".clear").on("click", function() {
        $("#UserName").val('');
        $("#status").val('');
        $("#PhoneNumber").val('');
        $("#PostalCode").val('');
        $("#Email").val('');
        $("#fromdate-time").val('');
        $("#todate-time").val('');

        data(event);
    })
</script>