// service-nav
function loop(x) {
  classs = x;
  for (i = 0; i < classs.length; i++) {
    classs[i].style.display = "none";
  }
}
function loop2(triangle,num) {
  for (i = 0; i <triangle.length; i++) {
    var x = "triangle-" + (num + 2);console.log(x);
    triangle[i].classList.remove(x);
    triangle[i].parentElement.children[0].children[0].style.backgroundColor = "rgb(243, 243, 243)";
    triangle[i].parentElement.children[0].children[0].children[2].style.color = "#646464";
    num++;console.log(num);
  }
}
function secondstep() {
  document.querySelector('.setup-service').style.display = "none";
  document.querySelector(".tri-1").classList.remove("triangle-1");
}
function thirdstep() {
  document.querySelector('.schdule-plan').style.display = "none";
  document.querySelector(".tri-2").classList.remove("triangle-2");
}
function fourthstep() {
  document.querySelector('.your-details').style.display = "none";
  document.querySelector(".tri-3").classList.remove("triangle-3");
}
function tab2(){
  var classs = document.querySelectorAll(".your-details,.payment-method");
  loop(classs);
  var triangle = document.querySelectorAll(".tri-3,.tri-4");
  loop2(triangle,1);
  document.querySelector(".tri-2").classList.add("triangle-2");
  document.querySelector('.schdule-plan').style.display = "block";
  document.querySelector("#tab-3").setAttribute("disabled","true");
    document.querySelector("#tab-4").setAttribute("disabled","true");
}
function tab3(){
  var classs = document.querySelectorAll(".payment-method");
  loop(classs);
  var triangle = document.querySelectorAll(".tri-4");
  loop2(triangle,2);
  document.querySelector(".tri-3").classList.add("triangle-3");
  document.querySelector('.your-details').style.display = "block";
  document.querySelector("#tab-4").setAttribute("disabled","true");
}
// 1
function setup() {
    var classs = document.querySelectorAll(".schdule-plan,.your-details,.payment-method");
    loop(classs);
    var triangle = document.querySelectorAll(".tri-2,.tri-3,.tri-4");
    loop2(triangle,0);
    document.querySelector("#tab-2").setAttribute("disabled","true");
    document.querySelector("#tab-3").setAttribute("disabled","true");
    document.querySelector("#tab-4").setAttribute("disabled","true");
    document.querySelector(".tri-1").classList.add("triangle-1");
    document.querySelector('.setup-service').style.display = "block";
    document.querySelector(".schdule").children[0].classList.add("schdule-img");
    document.querySelector(".schdule").children[1].classList.remove("schdule-img-white");
    document.querySelector(".details").children[0].classList.add("details-img");
    document.querySelector(".details").children[1].classList.remove("details-img-white");
    document.querySelector(".payment").children[0].classList.add("payment-img");
    document.querySelector(".payment").children[1].classList.remove("payment-img-white");
  }
// 2
function schdule() {
  document.querySelector('.schdule-plan').style.display = "block";
  document.querySelector(".schdule").classList.add("active-schdule");
  document.querySelector(".schdule").children[0].classList.remove("schdule-img");
    document.querySelector(".schdule").children[1].classList.add("schdule-img-white");
    document.querySelector(".schdule").style.backgroundColor = "#1D7A8C";
    document.querySelector(".schdule-text").style.color = "#fff";
    document.querySelector(".tri-2").classList.add("triangle-2");
  // if (document.querySelector(".schdule").children[0].classList.length == 1) {
  // }
  // else {
  //   document.querySelector(".schdule").children[0].classList.toggle("schdule-img");
  //   document.querySelector(".schdule").children[1].classList.toggle("schdule-img-white");
  //   document.querySelector(".schdule-text").style.color = "#646464";
  //   document.querySelector(".schdule").style.backgroundColor = "#F3F3F3";
  //   document.querySelector(".tri-2").classList.remove("triangle-2");
  // }
}
// 3
function details() {
    document.querySelector('.your-details').style.display = "block";
    document.querySelector(".details").children[0].classList.remove("details-img");
    document.querySelector(".details").children[1].classList.add("details-img-white");
    document.querySelector(".details").style.backgroundColor = "#1D7A8C";
    document.querySelector(".details-text").style.color = "#fff";
    document.querySelector(".tri-3").classList.add("triangle-3");
  
 
    // document.querySelector(".details").children[0].classList.toggle("details-img");
    // document.querySelector(".details").children[1].classList.toggle("details-img-white");
    // document.querySelector(".details-text").style.color = "#646464";
    // document.querySelector(".details").style.backgroundColor = "#F3F3F3";
    // document.querySelector(".tri-3").classList.remove("triangle-3");
  
}
// 4
function payment() {
  
    document.querySelector('.payment-method').style.display = "block";
    document.querySelector(".payment").children[0].classList.remove("payment-img");
    document.querySelector(".payment").children[1].classList.add("payment-img-white");
    document.querySelector(".payment").style.backgroundColor = "#1D7A8C";
    document.querySelector(".payment-text").style.color = "#fff";
    document.querySelector(".tri-4").classList.add("triangle-4");

    // document.querySelector(".payment").children[0].classList.toggle("payment-img");
    // document.querySelector(".payment").children[1].classList.toggle("payment-img-white");
    // document.querySelector(".payment-text").style.color = "#646464";
    // document.querySelector(".payment").style.backgroundColor = "#F3F3F3";
    // document.querySelector(".tri-4").classList.remove("triangle-4");
  
}
// payment
// date
var today = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yy = today.getFullYear();
document.querySelector(".tomorrow-date").innerHTML = "<span>" + dd + "/" + mm + "/" + yy + "</span>";
document.querySelector(".invoice-date").innerHTML = "<span>" + dd + "/" + mm + "/" + yy + "</span>" + "<span>" + document.getElementById("cleantime").options[document.getElementById("cleantime").selectedIndex].innerHTML + "</span>";
document.querySelector(".bed-bath").innerHTML = "<span>" + document.getElementById("room").options[document.getElementById("room").selectedIndex].innerHTML + "," + "</span>" + "<span>" + document.getElementById("bath").options[document.getElementById("bath").selectedIndex].innerHTML + "</span>" + ".";
// room+bath
function room() {
  var room = document.getElementById("room");
  var roomvalue = room.options[room.selectedIndex].innerHTML;
  var bath = document.getElementById("bath");
  var bathvalue = bath.options[bath.selectedIndex].innerHTML;
  document.querySelector(".bed-bath").innerHTML = "<span>" + roomvalue + "</span>" + "," + "<span>" + bathvalue + "</span>" + ".";
}
// cleantime
function cleantime() {
  var cleantime = document.getElementById("cleantime");
  var cleantimevalue = cleantime.options[cleantime.selectedIndex].innerHTML;
  document.querySelector(".invoice-date").innerHTML = "<span>" + dd + "/" + mm + "/" + yy + "</span>" + "<span>" + cleantimevalue + "</span>";
  servicestarttime();
}
servicestarttime();
function servicestarttime(){
const btn=document.getElementById("Secondsubmit");
console.log(parseFloat($("#cleantime").val()));
console.log(parseFloat($("#hours").val()));
console.log(parseFloat($("#cleantime").val())+parseFloat($("#hours").val()));

  if (parseFloat($("#cleantime").val())+parseFloat($("#hours").val())>21){
    document.querySelector(".servicetime-error").style.display = "block";
    btn.disabled="true";
  }
  else {
    document.querySelector(".servicetime-error").style.display = "none";
    btn.removeAttribute("disabled");
  }
}
// basic-time
document.querySelector(".basic-time").innerHTML = "<span>Basic</span>" + '<span>'+document.getElementById("hours").options[document.getElementById("hours").selectedIndex].innerHTML+'</span>';
// total-time 

// hours
function hours() {
  //     var  hours = document.getElementById("hours");
  if (parseFloat(document.querySelector(".total-time").innerHTML) > parseFloat(document.getElementById("hours").options[document.getElementById("hours").selectedIndex].innerHTML) && document.querySelector("#extra-service").childElementCount > 0) {
    document.getElementById("warningpopup").style.display = "block";
    document.body.style.overflowY = "hidden";
    document.querySelector("#hours").value = parseFloat(document.querySelector(".total-time").innerHTML);
    totalamount();

  }
  else {
    document.querySelector(".total-time").innerHTML = parseFloat(document.getElementById("hours").options[document.getElementById("hours").selectedIndex].innerHTML) + "<span> Hrs</span>"
    var hours = parseFloat(document.querySelector(".total-time").innerHTML);
    var hoursvalue = hours - (document.querySelector(".extra-service").childElementCount) * 0.5;
    document.querySelector(".basic-time").innerHTML = "<span>Basic</span>" + "<span>" + hoursvalue + " Hrs</span>";
    totalamount();
    servicestarttime();
  }
}
document.querySelector(".total-time").innerHTML = parseFloat(document.getElementById("hours").options[document.getElementById("hours").selectedIndex].innerHTML) + "<span>Hrs</span>"
// change invoice
function invoice() {
  document.querySelector(".invoice").style.display = "block";
  document.querySelector(".defaultinvoice").style.display = "none";
}
// totalamount
function totalamount() {
  var totalamount = parseFloat(document.querySelector(".total-amount").innerHTML);
  var totaltime = parseFloat(document.querySelector(".total-time").innerHTML);
  document.querySelector(".total-amount").innerHTML = (totaltime * 29) - 27;
  document.querySelector(".percleaning").innerHTML = "$" + (totaltime * 29);
  var effectiveprice = ((totaltime * 29) - 27) - ((((totaltime * 29) - 27) * 20) / 100);
  document.querySelector(".effectiveprice").innerHTML = "$" + effectiveprice;
}
totalamount();
// services

// // 1
function imgone() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-1").classList.remove("img-one");
  document.querySelector(".green-one").classList.add("green-1");
  document.querySelector(".one-img").style.border = "2px solid #1D7A8C";
  var extraservice = document.getElementById("extra-service");
  extraservice.innerHTML = extraservice.innerHTML + `<div id="inside-cabinet" class="inside-cabinet">
  <p>Inside cabinets (extra)</p>
  <p>30 Mins</p>
</div>`;
  hoursindex = hoursindex + 1;
  document.querySelector("#hours").options.selectedIndex = hoursindex;
  amount = amount + 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
function greenimgone() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-1").classList.add("img-one");
  document.querySelector(".green-one").classList.remove("green-1");
  document.querySelector(".one-img").style.border = "1px solid #B0C9CE";
  document.getElementById("inside-cabinet").remove();

  document.querySelector("#hours").options.selectedIndex = hoursindex - 1;
  amount = amount - 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
// 2
function imgtwo() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-2").classList.remove("img-two");
  document.querySelector(".green-two").classList.add("green-2");
  document.querySelector(".two-img").style.border = "2px solid #1D7A8C";
  var extraservice = document.getElementById("extra-service");
  extraservice.innerHTML = extraservice.innerHTML + `<div id="inside-fridge" class="inside-fridge">
  <p>Inside fridge (extra)</p>
  <p>30 Mins</p>
</div>`

  hoursindex = hoursindex + 1;
  document.querySelector("#hours").options.selectedIndex = hoursindex;
  amount = amount + 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
function greenimgtwo() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-2").classList.add("img-two");
  document.querySelector(".green-two").classList.remove("green-2");
  document.querySelector(".two-img").style.border = "1px solid #B0C9CE";
  document.getElementById("inside-fridge").remove();
  document.querySelector("#hours").options.selectedIndex = hoursindex - 1;
  amount = amount - 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
// 3
function imgthree() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-3").classList.remove("img-three");
  document.querySelector(".green-three").classList.add("green-3");
  document.querySelector(".three-img").style.border = "2px solid #1D7A8C";
  var extraservice = document.getElementById("extra-service");
  extraservice.innerHTML = extraservice.innerHTML + `<div id="inside-oven" class="inside-oven">
  <p>Inside oven (extra)</p>
  <p>30 Mins</p>
</div>`
  hoursindex = hoursindex + 1;
  document.querySelector("#hours").options.selectedIndex = hoursindex;
  amount = amount + 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
function greenimgthree() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-3").classList.add("img-three");
  document.querySelector(".green-three").classList.remove("green-3");
  document.querySelector(".three-img").style.border = "1px solid #B0C9CE";
  document.getElementById("inside-oven").remove();
  document.querySelector("#hours").options.selectedIndex = hoursindex - 1;
  amount = amount - 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
// // 4
function imgfour() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-4").classList.remove("img-four");
  document.querySelector(".green-four").classList.add("green-4");
  document.querySelector(".four-img").style.border = "2px solid #1D7A8C";
  var extraservice = document.getElementById("extra-service");
  extraservice.innerHTML = extraservice.innerHTML + `<div id="laundrywash" class=laundrywash"><p>Laundrywash & dry(extra)</p><p>30 Mins</p></div>`
  hoursindex = hoursindex + 1;
  document.querySelector("#hours").options.selectedIndex = hoursindex;
  amount = amount + 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
function greenimgfour() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-4").classList.add("img-four");
  document.querySelector(".green-four").classList.remove("green-4");
  document.querySelector(".four-img").style.border = "1px solid #B0C9CE";
  document.getElementById("laundrywash").remove();
  document.querySelector("#hours").options.selectedIndex = hoursindex - 1;
  amount = amount - 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}

// // 5
function imgfive() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-5").classList.remove("img-five"); document.querySelector(".green-five").classList.add("green-5");
  document.querySelector(".five-img").style.border = "2px solid #1D7A8C";
  var extraservice = document.getElementById("extra-service");
  extraservice.innerHTML = extraservice.innerHTML + `<div id="interiorwindows" class="interiorwindows">
  <p>Interior
      windows  (extra)</p>
  <p>30 Mins</p>
</div>`
  hoursindex = hoursindex + 1;
  document.querySelector("#hours").options.selectedIndex = hoursindex;
  amount = amount + 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
function greenimgfive() {
  var amount = parseFloat(document.querySelector(".total-time").innerHTML);
  var hoursindex = document.querySelector("#hours").options.selectedIndex;
  document.querySelector(".img-5").classList.add("img-five"); document.querySelector(".green-five").classList.remove("green-5");
  document.querySelector(".five-img").style.border = "1px solid #B0C9CE";
  document.getElementById("interiorwindows").remove();
  document.querySelector("#hours").options.selectedIndex = hoursindex - 1;
  amount = amount - 0.5;
  document.querySelector(".total-time").innerHTML = amount + "<span> Hrs</span>";
  totalamount();
  servicestarttime();
}
document.querySelector(".warningclose").addEventListener("click", function () {
  document.getElementById("warningpopup").style.display = "none";
  document.body.style.overflowY = "auto";
});
document.querySelector(".warningpopup-footer").addEventListener("click", function () {
  document.getElementById("warningpopup").style.display = "none";
  document.body.style.overflowY = "auto";
});
// validation
// $("#checkcode").click(function(){
//   for(i=0;i<$(".code").val().length;i++){
//     if($(".code").val()[i]==" "){
//       $(".error").html("Enter Valid Postalcode");
//       $('#checkcode').attr('disabled',true);
//       break;
//     }
//     else{
//       $('#checkcode').removeAttr('disabled');
//     }
//   }
// })
// sec-3
$(".sec-3btn").click(function(){
  var len=document.querySelector(".address").childElementCount;
  for(i=0;i<len/2;i++){
    if(document.querySelectorAll(".address-list")[i].children[0].checked){
      payment();
      fourthstep();
    }
    else{
      $(".sec-3-error").html("Please Select Address");
    }
  }
})
