//spinner
function spinner() {
    $(".spinner").css("display", "block");
}
document.querySelector("#popupcontent3 textarea").addEventListener("input", function () {
    if (document.querySelector("#popupcontent3 textarea").value.length > 0) {
        document.querySelector("#popupcontent3 .popup-footer").removeAttribute("disabled")
    } else {
        document.querySelector("#popupcontent3 .popup-footer").setAttribute("disabled", "true")
    }
});
// var table = $('#example').DataTable();

// $('#example tbody').on('click', 'tr', function() {
//     console.log(document.querySelectorAll("#example tr")[table.row(this).index() + 1].children[1].children[1].children[1].innerHTML = "9:00");
// });
document.querySelector(".close2").addEventListener("click", function () {
    document.getElementById("popup2").style.visibility = "hidden";
    document.body.style.overflowY = "auto";
});
document.querySelector(".close3").addEventListener("click", function () {
    document.getElementById("popup3").style.visibility = "hidden";
    document.body.style.overflowY = "auto";
});
// reschdule
function reschdule(event) {
    document.querySelector(".modal-header .close").click();
    var table = $('#example').DataTable();
    // document.querySelector(".bath").options[0].value = event;
    // console.log(table.row(this).index());
    // console.log(response[1]);
    var today = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yy = today.getFullYear();
    document.querySelector(".tomorrow-date").children[0].innerHTML = "<span>" + dd + "/" + mm + "/" + yy + "</span>";
    document.querySelector(".popup2").style.visibility = "visible";
    document.querySelector(".popup2 .popup-footer").value = event.target.value;
}
// cancel
function dashcancel(event) {
    document.querySelector(".modal-header .close").click()
    // alert(event.target.value);
    document.querySelector(".popup3").style.visibility = "visible";
    document.querySelector(".popup3 .popup-footer").value = event.target.value;
}

// Update
function update(event) {
    document.getElementById("popup2").style.visibility = "hidden";
    spinner();
    $.ajax({
        type: "post",
        url: "https://localhost/Helperland/MVC/index.php?function=CustomerDashboardDataTimeUpdate",
        data: {
            "time": document.querySelector(".bath").options[document.querySelector(".bath").selectedIndex].innerHTML,
            'id': event.target.value,
        },
        success: function (response) {
            $(".spinner").css("display", "none");
            response = response.trim();
            if (response == "success") {

                Swal.fire({
                    icon: 'success',
                    title: '',
                    text: 'Updated Successfully',
                });
                $("#example").DataTable().ajax.reload();
                // window.location="https://localhost/Helperland/MVC/index.php?function=ServiceHistory"
            }
        }
    });
}
// cancel request
function cancel(event) {
    // console.log(event.target.value);
    document.getElementById("popup3").style.visibility = "hidden";
    spinner();
    $.ajax({
        type: "post",
        url: "https://localhost/Helperland/MVC/index.php?function=CustomerDashboardDataTimeDelete",
        data: {
            'id': event.target.value
        },
        success: function (response) {
            $(".spinner").css("display", "none");
            // console.log(response);
            response = response.trim();
            if (response == "success") {

                Swal.fire({
                    icon: 'success',
                    title: '',
                    text: 'Deleted Successfully',
                });
                $("#example").DataTable().ajax.reload();
                // window.location="https://localhost/Helperland/MVC/index.php?function=ServiceHistory"
            }
        }
    });
}
// rating
