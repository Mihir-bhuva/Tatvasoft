

document.querySelector(".forma").addEventListener("click",function(){
    window.scrollTo(0,0);
  });
function scroll(){
  if(window.pageYOffset>64){
    document.querySelector(".Navbar").style.opacity="0.8";
    document.querySelector(".Navbar").style.backgroundColor="black";
  }
  else{
    document.querySelector(".Navbar").style.backgroundColor="rgb(90, 98, 104)";
    document.querySelector(".Navbar").style.opacity="1";
  }
if(window.pageYOffset<220){
    document.querySelector(".forma").style.display="none";
  }
  else{
    document.querySelector(".forma").style.display="block";
  }
}
document.addEventListener("scroll", scroll);

function classToggle() {
  const navs = document.querySelectorAll('.Navbar__Items');
  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}

document.querySelector('.Navbar__Link-toggle').addEventListener('click', classToggle);
function logout() {
  window.location = "http://localhost/Helperland/MVC/index.php?function=Logout";
}