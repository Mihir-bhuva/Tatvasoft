function scroll(){
    if(window.pageYOffset>90){
   document.querySelector(".Navbar-2").style.visibility="hidden";
   document.querySelector(".Navbar-1").style.visibility="visible";
  }
  if(window.pageYOffset<90){
   document.querySelector(".Navbar-2").style.visibility="visible";
   document.querySelector(".Navbar-1").style.visibility="hidden";
  }
  if(window.pageYOffset<220){
    document.querySelector(".forma").style.display="none";
  }
  else{
    document.querySelector(".forma").style.display="block";
  }
  if(window.pageYOffset>720){
  document.querySelector(".section-body").style.animationName="section-body-animation"}
  if(window.pageYOffset>1640){
    document.querySelector(".sec3-img").style.animationName="img-3-animation"}
}
  document.addEventListener("scroll", scroll);
  // down-scroll
  document.querySelector(".down-arrow").addEventListener("click",function(){
    window.scrollTo(0,798);
  })
  document.querySelector(".forma").addEventListener("click",function(){
    window.scrollTo(0,0);
  });
  document.querySelector(".ok").addEventListener("click",function(){
    document.querySelector(".policy").style.display="none";
    document.querySelector(".ok").style.display="none";
    document.querySelector(".policy_1").style.display="block";
  })
  // login
  function login(){
    document.getElementById("popup").style.display="block";
    // document.body.style.overflowY="hidden";
  }
  document.querySelector(".close").addEventListener("click",function(){
    document.getElementById("popup").style.display="none";
    // document.body.style.overflowY="auto";
  });
document.querySelector(".close1").addEventListener("click",function(){
  document.getElementById("popup1").style.display="none";
  // document.body.style.overflowY="auto";
})
document.querySelector(".forget-password").addEventListener("click",function(){
  document.querySelector(".popup1").style.visibility="visible";document.querySelector(".popup").style.display="none";
});
