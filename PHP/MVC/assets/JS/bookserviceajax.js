// first tab
// ajax
function spinner() {
    $(".spinner").css("display", "block");
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

function showaddress(e) {
    e.preventDefault();
    spinner();
}

// fourth tab
document.querySelector(".sec-4btn").addEventListener("click", function () {

});
