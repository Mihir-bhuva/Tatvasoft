
jQuery('.dropdown-menu li a').click(function(){
  var _this_img = jQuery(this).attr('data-img');
  jQuery(this).closest('.btn-group').find(' .dropdown-toggle img').attr('src',_this_img);
})