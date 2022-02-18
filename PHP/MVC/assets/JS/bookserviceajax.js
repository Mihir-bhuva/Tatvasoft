// first tab
// ajax
function spinner() {
    $(".spinner").css("display", "block");
}

var checkcode = document.getElementById("checkcode");
checkcode.onclick = (e) => {
    {
        e.preventDefault();
        var code = document.querySelector(".code").value
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "https://localhost/Helperland/MVC/index.php?function=Checkcode&parameter=" + code, true);

        xhr.onload = () => {
            // let data = xhr.response;
            // console.log(xhr.response);


            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var data = xhr.response;
                    data = data.trim();
                    // console.log(data);
                    if (data === "success") {
                        spinner();
                        setTimeout(() => {
                            schdule();
                            secondstep();
                            invoice();
                            // showaddress(e);
                            {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "https://localhost/Helperland/MVC/index.php?function=GetAddress", true);

                                xhr.onload = () => {
                                    // let data = xhr.response;
                                    // console.log(xhr.response);


                                    if (xhr.readyState === 4) {
                                        if (xhr.status === 200) {
                                            var data = xhr.response;
                                            // data = data.trim();
                                            data = data.toString();

                                            // console.log(data);
                                            if (data == "fail") {
                                                console.log("error");
                                            } else {
                                                document.querySelector(".address").innerHTML = data;
                                                $(".spinner").css("display", "none");

                                            }


                                        }
                                    }
                                }
                                xhr.send();
                            }
                            document.querySelector("#tab-2").removeAttribute("disabled");
                            document.querySelector("#inputCity").value = document.querySelector(".code").value;
                            document.querySelector("#inputCity").disabled = true;
                            document.querySelector(".error-msg").style.display = "none";
                            $(".spinner").css("display", "none");
                        }, 1000);

                    } else {
                        document.querySelector(".error-msg").style.display = "block";
                    }


                }
            }
        }
        xhr.send();
    };
}
// second tab
$(".sec-2btn").click(function () {
    spinner();
    details();
    thirdstep();
    document.querySelector("#tab-3").removeAttribute("disabled");
    setTimeout(() => {
        $(".spinner").css("display", "none");
    }, 1000);
});
// thirdtab
// ajax
$(".save").click(function (e) {
    if (document.querySelector('#Phone').value.split('').length > 0 && document.querySelector('#inputEmail4').value.split('').length > 0 && document.querySelector('#inputPassword4').value.split('').length > 0 == true) {
        // store address
        spinner();
        e.preventDefault();
        streetname = document.getElementById("inputEmail4").value;
        house = document.getElementById("inputPassword4").value;
        postal = document.getElementById("inputCity").value;
        city = document.getElementById("inputState").options[document.getElementById("inputState").selectedIndex].innerHTML;
        phone = document.getElementById("Phone").value;
        $.ajax({
            url: "https://localhost/Helperland/MVC/index.php?function=AddressSubmit",
            type: "POST",
            data: {
                "streetname": streetname,
                "house": house,
                "postal": postal,
                "city": city,
                "phone": phone,
            },
            success: function () {
                $(".spinner").css("display", "none");
                // $(".add-address").show();
                // $(".addressform").hide();
                {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://localhost/Helperland/MVC/index.php?function=GetAddress", true);

                    xhr.onload = () => {
                        // let data = xhr.response;
                        // console.log(xhr.response);


                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                var data = xhr.response;
                                // data = data.trim();
                                data = data.toString();

                                // console.log(data);
                                if (data == "fail") {
                                    console.log("error");
                                } else {
                                    document.querySelector(".address").innerHTML = data;
                                    $(".spinner").css("display", "none");

                                }


                            }
                        }
                    }
                    xhr.send();
                }
                $(".add-address").show();
                $(".addressform").hide();
            }
        });
    }
    else {
        document.querySelector(".addresserror").innerHTML = "All Feild Required";
    }

});
function showaddress(e) {
    e.preventDefault();
    spinner();
}

// fourth tab
document.querySelector(".sec-4btn").addEventListener("click", function () {

});
