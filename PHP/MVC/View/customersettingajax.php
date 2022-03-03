<script>
        // address
        function checkradio(event) {
            // console.log(event.target.value);
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=DefaultAddress",
                data: {
                    "id": event.target.value,
                },
                // dataType: "json",
                success: function(response) {
                    // console.log(response)
                    response = response.trim();
                    if (response == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: '',
                            text: 'Default Address Updated Successfully',
                        });
                    }

                }
            });
        }
        $(document).ready(function() {
            $('#example').DataTable({
                // responsive: true,
                "ajax": {
                    type: "post",
                    url: "https://localhost/Helperland/MVC/index.php?function=AddressData",
                    data: {
                        "id": <?php echo $_SESSION['userid'] ?>
                    },
                },

                "columns": [{
                        render: function(data, type, row) {
                            if (row.IsDefault == 1) {
                                return '<input type="radio" onclick="checkradio(event)" name="fav_language" checked="checked" value="' + row.AddressId + '">'
                            } else {
                                return '<input type="radio" onclick="checkradio(event)" name="fav_language" value="' + row.AddressId + '">'
                            }
                        }
                    },
                    {
                        render: function(data, type, row) {
                            return ' <label><div><div style="display: flex;"><b>Address:</b><div style="margin-left: 5px;">' + row.AddressLine1 + '</div><div style="margin-left: 5px;">' + row.AddressLine2 + '</div><div style="margin-left: 5px;">' + row.City + '</div><div style="margin-left: 5px;"> ' + row.PostalCode + '</div></div><div style="display: flex;"><b>Phone number:</b><div>' + row.Mobile + '</div></div></div></label>'
                        }
                    },
                    {
                        render: function(data, type, row) {
                            return '<div style="display: flex;"><div onclick="edit(event)"><img src="./images/edit-icon.png" id="' + row.AddressId + '" alt=""></div><div onclick="deleteaddress(event)"><img src="./images/delete-icon.png"  id="' + row.AddressId + '" alt=""></div></div>'
                        }
                    },
                ],
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }]
            });
        });
        // deleteadd
        function deleteadd(event) {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=Deleteaddress",
                data: {
                    "id": event.target.value
                },
                // dataType: "dataType",
                success: function(response) {
                    // console.log(response);
                    $("#example").DataTable().ajax.reload();
                    response = response.trim();
                    if (response == "success") {
                        $(".close").click();
                        Swal.fire({
                            icon: 'success',
                            title: '',
                            text: 'Address Data Deleted Successfully',
                        });
                    }
                }
            })
        }
        function deleteaddress(event) {
            if (document.getElementById("" + event.target.id).parentElement.parentElement.parentElement.parentElement.children[0].children[0].checked) {
                $(".defaultaddress").html("To delete this address kindly change your default address to another address")
                $(".defaultaddresstitle").html("Warning")
                $(".delete").hide();
                document.querySelector(".launch").click();
                console.log(event.target.id);
            } else {
                $(".defaultaddress").html("Are you sure you want to delete this address? ")
                $(".defaultaddresstitle").html("Delete Address")
                $(".delete").show();

                document.querySelector(".launch").click();
                document.querySelector(".delete").value = event.target.id;

            }
        }
        // editadd
        function edit(event) {
            // console.log(event.target.id);
            document.querySelector(".edit").value = event.target.id;
            document.querySelector(".launch1").click();
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=editaddress",
                data: {
                    "id": event.target.id
                },
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    // $("#example").DataTable().ajax.reload();
                    // $(".close").click();
                    document.querySelector("#Streetname").value = response['AddressLine1'];
                    document.querySelector("#Housenumber").value = response['AddressLine2'];
                    document.querySelector("#inputCity").value = response['PostalCode'];
                    document.querySelector("#inputState").value = response['City'];
                    document.querySelector("#Phone").value = response['Mobile'];


                }
            })
        }

        function editadd(event) {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=updateaddress",
                data: {
                    "id": event.target.value,
                    "street": document.querySelector("#Streetname").value,
                    "house": document.querySelector("#Housenumber").value,
                    "PostalCode": document.querySelector("#inputCity").value,
                    "City": document.querySelector("#inputState").value,
                    "Mobile": document.querySelector("#Phone").value,
                },
                // dataType: "dataType",
                success: function(response) {
                    // console.log(response);

                    $("#example").DataTable().ajax.reload();
                    response = response.trim();
                    if (response == "success") {
                        $(".close").click();
                        Swal.fire({
                            icon: 'success',
                            title: '',
                            text: 'Address Data Updated Successfully',
                        });
                    }
                }
            })
        }

        // mydetails
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "https://localhost/Helperland/MVC/index.php?function=customersettingmydetailsdata",
                dataType: "json",
                data: {
                    "id": <?php echo $_SESSION['userid'] ?>
                },
                success: function(response) {
                    // console.log(response);
                    document.querySelector("#FirstName").value = response['FirstName']
                    document.querySelector("#LastName").value = response['LastName']
                    document.querySelector("#Mobilenumber").value = response['Mobile']
                    document.querySelector("#email").value = response['Email']
                    document.querySelector("#inlineFormCustomSelectday").selectedIndex = response['DateOfBirth'].slice(8, 10) - 1
                    document.querySelector("#inlineFormCustomSelectmonth").selectedIndex = response['DateOfBirth'].slice(5, 7) - 1
                    document.querySelector("#inlineFormCustomSelectyear").selectedIndex = response['DateOfBirth'].slice(0, 4) - 1913;
                }
            });
        })

        $(".save").click(function() {
            $.ajax({
                type: "post",
                url: "https://localhost/Helperland/MVC/index.php?function=customersettingmydetails",
                data: {
                    "id": <?php echo $_SESSION['userid'] ?>,
                    "fname": document.querySelector("#FirstName").value,
                    "lname": document.querySelector("#LastName").value,
                    "phone": document.querySelector("#Mobilenumber").value,
                    "day": document.querySelector("#inlineFormCustomSelectday").selectedOptions[0].value,
                    "month": document.querySelector("#inlineFormCustomSelectmonth").selectedOptions[0].value,
                    "year": document.querySelector("#inlineFormCustomSelectyear").selectedOptions[0].value,
                },
                // dataType: "json",
                success: function(response) {
                    // console.log(response)
                    // $(".heading").html("Welcome,<strong>"+document.querySelector("#FirstName").value+"  "+document.querySelector("#LastName").value+"</strong>");
                    response = response.trim();
                    if (response == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: '',
                            text: 'Data Updated Successfully',
                        });
                    }

                }
            });
        })
        // update password
        document.querySelector(".password").addEventListener("input", function() {
            var password = document.querySelector(".password").value;
            if (password == "") {
                document.querySelector(".error").innerHTML = "Please Enter Password";
                document.querySelector(".submitbutton").setAttribute("disabled", "true")
            } else if ((password.length < 8)) {
                document.querySelector(".error").innerHTML = "Password Length must be Greater Or Equal to 8";
                document.querySelector(".submitbutton").setAttribute("disabled", "true")
            } else {
                document.querySelector(".error").innerHTML = "";
                document.querySelector(".submitbutton").removeAttribute("disabled")

            }
        });
        document.querySelector(".conformpassword").addEventListener("input", function() {
            var conformpassword = document.querySelector(".conformpassword").value;
            if (conformpassword == "") {
                document.querySelector(".error").innerHTML = "Please Enter Confirm Password";
                document.querySelector(".submitbutton").setAttribute("disabled", "true")
            } else if ((conformpassword.length < 8)) {
                document.querySelector(".error").innerHTML = "ConfirmPassword Length must be Greater Or Equal to 8";
                document.querySelector(".submitbutton").setAttribute("disabled", "true")
            } else {
                document.querySelector(".error").innerHTML = "";
                document.querySelector(".submitbutton").removeAttribute("disabled")
            }
        });
        document.querySelector(".submitbutton").addEventListener("click", function(e) {
            var password = document.querySelector(".password").value;
            var conformpassword = document.querySelector(".conformpassword").value;

            if ((password === conformpassword)) {
                $.ajax({
                    type: "post",
                    url: "https://localhost/Helperland/MVC/index.php?function=Updatepassword",
                    data: {
                        "id": <?php echo $_SESSION['userid'] ?>,
                        "currentpassword": document.querySelector(".currentpassword").value,
                        "password": password,

                    },
                    // dataType: "json",
                    success: function(response) {
                        // console.log(response)
                        response = response.trim();
                        if (response == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: '',
                                text: 'Password Updated Successfully',
                            });
                        }
                        if (response == "fail") {
                            Swal.fire({
                                icon: 'error',
                                title: '',
                                text: 'Your current password is wrong!',
                            });
                        }

                    }
                });
            } else {
                e.preventDefault();
                document.querySelector(".error").innerHTML = "Password does not match the confirm password!";
            }
        });

        $(".mydetails").click(function() {
            $(".form").show();
            $(".address").hide();
            $(".updatepassword").hide();
            $(".mydetails").css("border-bottom", "4px solid rgb(29, 122, 140)")
            $(".myaddress").css("border-bottom", "none")
            $(".changepassword").css("border-bottom", "none");
        })
        $(".myaddress").click(function() {
            $(".form").hide();
            $(".address").show();
            $(".updatepassword").hide();
            $(".mydetails").css("border-bottom", "none")
            $(".myaddress").css("border-bottom", "4px solid rgb(29, 122, 140)")
            $(".changepassword").css("border-bottom", "none");
        })
        $(".changepassword").click(function() {
            $(".form").hide();
            $(".address").hide();
            $(".updatepassword").show();
            $(".mydetails").css("border-bottom", "none");
            $(".myaddress").css("border-bottom", "none")
            $(".changepassword").css("border-bottom", "4px solid rgb(29, 122, 140)")
        })
    </script>