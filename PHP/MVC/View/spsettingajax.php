<script>
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
                if (response['Status'] == 1) {
                    $(".status h2").html('Account Status:<span style="color:green;">Active</span>')
                } else {
                    $(".status h2").html('Account Status:<span style="color:red;">Inactive</span>')
                }
                $(".profilepic").attr("src", response['UserProfilePicture'])
                $(".heading").html("Welcome,<strong>" +response['FirstName'] + "  " + response['LastName'] + "</strong>");
                document.querySelector("#FirstName").value = response['FirstName']
                document.querySelector("#LastName").value = response['LastName']
                document.querySelector("#Mobilenumber").value = response['Mobile']
                document.querySelector("#email").value = response['Email']
                document.querySelector("#inlineFormCustomSelectday").selectedIndex = response['DateOfBirth']?.slice(8, 10) - 1
                document.querySelector("#inlineFormCustomSelectmonth").selectedIndex = response['DateOfBirth']?.slice(5, 7) - 1
                document.querySelector("#inlineFormCustomSelectyear").selectedIndex = response['DateOfBirth']?.slice(0, 4) - 1913;
                document.querySelector("#StreetName").value = response['AddressLine1']
                document.querySelector("#HouseNumber").value = response['AddressLine2']
                document.querySelector("#PostalCode").value = response['PostalCode']
                // document.querySelector("#inlineFormCustomSelectCity").value = response['City']
                attr = $(".profilepic").attr('src')
                for (i = 0; i < 6; i++) {
                    if ($(".img1,.img2,.img3,.img4,.img5,.img6")[i].children[0].src == attr) {
                        document.querySelectorAll(".img1,.img2,.img3,.img4,.img5,.img6")[i].style.border = "3px solid rgb(29, 122, 140)"
                        break
                    }
                }
            }
        });

    })

    $(".save").click(function() {
        for (i = 0; i < 3; i++) {
            if (document.querySelectorAll(".form-chek input")[i].checked) {
                gender = document.querySelectorAll(".form-chek input")[i].value
            }
        }
        $.ajax({
            type: "post",
            url: "https://localhost/Helperland/MVC/index.php?function=spsettingmydetails",
            data: {
                "id": <?php echo $_SESSION['userid'] ?>,
                "fname": document.querySelector("#FirstName").value,
                "lname": document.querySelector("#LastName").value,
                "phone": document.querySelector("#Mobilenumber").value,
                "day": document.querySelector("#inlineFormCustomSelectday").selectedOptions[0].value,
                "month": document.querySelector("#inlineFormCustomSelectmonth").selectedOptions[0].value,
                "year": document.querySelector("#inlineFormCustomSelectyear").selectedOptions[0].value,
                "nationality": document.querySelector(".ng-pristine").selectedOptions[0].value,
                "gender": gender,
                "profilepic": $(".profilepic").attr('src'),
                "StreetName": document.querySelector("#StreetName").value,
                "HouseNumber": document.querySelector("#HouseNumber").value,
                "PostalCode": document.querySelector("#PostalCode").value,
                "City": document.querySelector("#inlineFormCustomSelectCity").selectedOptions[0].innerHTML,
            },
            // dataType: "json",
            success: function(response) {
                // console.log(response)
                response = response.trim();
                if (response == "success") {
                    attr = $(".profilepic").attr('src')
                for (i = 0; i < 6; i++) {
                    if ($(".img1,.img2,.img3,.img4,.img5,.img6")[i].children[0].src == attr) {
                        document.querySelectorAll(".img1,.img2,.img3,.img4,.img5,.img6")[i].style.border = "3px solid rgb(29, 122, 140)"
                        break
                    }
                }
                    $(".heading").html("Welcome,<strong>" + document.querySelector("#FirstName").value + "  " + document.querySelector("#LastName").value + "</strong>");
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: 'Data Updated Successfully',
                    });
                }

            }
        });
    })
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