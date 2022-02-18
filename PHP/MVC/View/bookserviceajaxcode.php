<script>
    // sec-3
    $(document).ready(function () {
        var userid =<?php echo $_SESSION['userid']?>;
    $.ajax({
        type: "post",
        url: "https://localhost/Helperland/MVC/index.php?function=Favprovider",
        data: {
            "userid":userid,
        },
        success: function (data) {
            // console.log(data);
            document.querySelector(".list").innerHTML = document.querySelector(".list").innerHTML + data;
            $('.selectbtn').click(function (e) {
                $(this).removeClass("selectebtn");
                if ($(this).hasClass("selectedbtn")) {
                    $(this).removeClass("selectedbtn");
                    $(this).html("Select");
                } else {
                    // console.log($(this).attr("class"));
                    $(this).addClass("selectedbtn");
                    $(this).html("Selected");

                }
            });
        }
    });
});
// sec-4
$(".sec-4btn").click(function() {
if (document.querySelector(".terms").children[0].children[0].checked) {
    $(".spinner").css("display", "block");
    var userid =<?php echo $_SESSION['userid']?>;
    var addid = parseFloat(document.querySelector("input[type='radio']:checked").value);
    var today = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yy = today.getFullYear();
    // 
    var ServiceStartDate = dd + "/" + mm + "/" + yy;
    var ServiceStartTime = document.querySelector("#cleantime").options[document.querySelector("#cleantime").selectedIndex].innerHTML;
    var ZipCode = document.querySelector(".code").value;
    var Bed = parseFloat(document.getElementById("room").options[document.getElementById("room").selectedIndex].innerHTML);
    var Bath = parseFloat(document.getElementById("bath").options[document.getElementById("bath").selectedIndex].innerHTML);
    if (document.querySelector(".extra-service").childElementCount > 0) {
        for (i = 0; i < document.querySelector(".extra-service").childElementCount; i++) {
            var ExtraService = ExtraService + " " + document.querySelector(".extra-service").children[i].className;
        }
    } else {
        var ExtraService = "";
    }
    const favprovider = ["0"];
    for (i = 0; i < document.querySelector(".list").childElementCount; i++) {
        if (document.querySelector(".list").children[i].children[3].classList.length > 1) {
            favprovider.push(document.querySelector(".list").children[i].children[3].value)
        }
    }
    var ServiceHours = parseFloat(document.querySelector(".basic-time").children[1].innerHTML);
    var ExtraHours = parseFloat(document.querySelector(".total-time").innerHTML) - parseFloat(document.querySelector(".basic-time").children[1].innerHTML);
    var TotalHours = parseFloat(document.querySelector(".total-time").innerHTML);
    var SubTotal = document.querySelector(".percleaning").innerHTML.replace("$", "");
    console.log(SubTotal, Discount, TotalCost, effectiveprice);
    var Discount = 27;
    var TotalCost = document.querySelector(".total-amount").innerHTML;
    var effectiveprice = document.querySelector(".effectiveprice").innerHTML.replace("$", "");
    var Comments = document.querySelector(".text-area").children[0].innerHTML;
    var HasPets = "no";
    if (document.querySelector(".pets").children[0].checked) {
        var HasPets = "Yes";
    };
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yy = today.getFullYear();
    // 
    var CreatedDate = dd + "/" + mm + "/" + yy;
    $.ajax({
        url: "https://localhost/Helperland/MVC/index.php?function=ServiceRequestSubmit",
        type: "POST",
        data: {
            "userid": userid,
            "addid": addid,
            "ServiceStartDate": ServiceStartDate,
            "ServiceStartTime": ServiceStartTime,
            "ZipCode": ZipCode,
            "Bed": Bed,
            "Bath": Bath,
            "ExtraService": ExtraService,
            "ServiceHours": ServiceHours,
            "ExtraHours": ExtraHours,
            "TotalHours": TotalHours,
            "SubTotal": SubTotal,
            "Discount": Discount,
            "TotalCost": TotalCost,
            "effectiveprice": effectiveprice,
            "Comments": Comments,
            "HasPets": HasPets,
            "CreatedDate": CreatedDate,
            "favprovider": favprovider,
        },
        success: function(data) {
            // console.log(data)
            $(".spinner").css("display", "none");
            data = data.trim();
            console.log(data);
            if (data == "success") {
                Swal.fire({
                    icon: 'success',
                    text: 'Booking has been successfully submited',
                    html: 'Service Request Id :</b>',
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
            }
        }
    });
} else {
    document.querySelector(".sec-4-error").innerHTML = "Please accept Terms And condition";
}
});
</script>