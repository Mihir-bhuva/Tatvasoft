
function spinner() {
    $(".spinner").css("display", "block");
}
document.querySelector(".close2").addEventListener("click", function () {
    document.getElementById("popup2").style.visibility = "hidden";
    document.body.style.overflowY = "auto";
});
// function ratehover(event) {
//     event.target.parentNode.children[5].innerHTML = event.target.id; $("#" + event.target.id); event.target.parentNode.children[event.target.id - 1].classList.toggle("checked");
// }
function rate(event) {
    event.target.parentNode.children[5].innerHTML = event.target.id;
    {
        for (i = 0; i < 5; i++) {
            event.target.parentNode.children[i].classList.remove("checked");
        }
        for (i = 0; i < event.target.id; i++) {
            event.target.parentNode.children[i].classList.add("checked");
        }
    }
}
function submit(event) {
    if(document.querySelector(".firstrating").innerHTML==""||document.querySelector(".secondrating").innerHTML==""||document.querySelector(".secondrating").innerHTML==""||document.querySelector("textarea").value==""){
        document.querySelector(".rateerror").style.display="block";
    }
    else{
    $.ajax({
        type: "post",
        url: "https://localhost/Helperland/MVC/index.php?function=Servicehistoryrating",
        data: {
            "id": event.target.value,
            "rating1": parseFloat(document.querySelector(".firstrating").innerHTML),
            "rating2": parseFloat(document.querySelector(".secondrating").innerHTML),
            "rating3": parseFloat(document.querySelector(".thirddrating").innerHTML),
            "comment": document.querySelector(".popup-body2 textarea").value,
        },
        // dataType: "dataType",
        success: function (response) {
            $("#example").DataTable().ajax.reload();
            // console.log(event.target);
            // event.target.setAttibute("disabled","true")
            response=response.trim();
            if(response=='success'){
                document.querySelector(".popup2").style.visibility = "hidden";
            Swal.fire({
                icon: 'success',
                title: '',
                text: 'Updated Successfully',
            });
        }
        }
    });}
}
