
jQuery('.dropdown-menu li a').click(function(){
  var _this_img = jQuery(this).attr('data-img');
  jQuery(this).closest('.btn-group').find(' .dropdown-toggle img').attr('src',_this_img);
});

function login(){
  document.getElementById("popup").style.display="block";
  // document.body.style.overflowY="hidden";
}
document.querySelector(".close").addEventListener("click",function(){
  document.getElementById("popup").style.display="none";
  // document.body.style.overflowY="auto";
});
