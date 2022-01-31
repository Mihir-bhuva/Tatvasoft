document.querySelector(".close").addEventListener("click",function(){
    document.querySelector(".success").style.display="none";
  });
  document.querySelector("#submit").addEventListener("click",function(){
    document.querySelector(".success").style.display="block";
  });