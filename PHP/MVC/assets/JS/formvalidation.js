
// firstname
document.querySelector(".firstname").addEventListener("input", function () {
    
    var Split = document.querySelector('.firstname').value.split('');
    var format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    if(Split.length==0){
        document.querySelector(".error").innerHTML="Please Enter FirstName";
        document.querySelector(".submitbutton").style.display = "none";
    }
    else{
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
    if(Split[0]==" "||Split[0].match(format)!=null||(!/[^a-zA-Z]/.test(document.querySelector('.firstname').value))==false){
      document.querySelector(".error").innerHTML="White Spaces,Special Characters And Numbers Are Not Allowed in FirstName";
      document.querySelector(".submitbutton").style.display = "none";
    }
    else{
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
});
// lastname
document.querySelector(".lastname").addEventListener("input", function () {
    var Split = document.querySelector('.lastname').value.split('');
    var format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    if(Split.length==0){
        document.querySelector(".error").innerHTML="Please Enter LastName";
    }
    else{
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
    if(Split[0]==" "||Split[0].match(format)!=null||(!/[^a-zA-Z]/.test(document.querySelector('.lastname').value))==false){
      document.querySelector(".error").innerHTML="White Spaces And Special Characters Not Allowed in Last Name";
      document.querySelector(".submitbutton").style.display = "none";
    }
    else{
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
});
// phone
document.querySelector(".phone").addEventListener("input", function () {
   var phone = document.querySelector(".phone").value.search(/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/)
    if(phone!=0){
      document.querySelector(".error").innerHTML="Enter Valid Phone Number";
      document.querySelector(".submitbutton").style.display = "none";
    }
    else{
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
});
// password
document.querySelector(".password").addEventListener("input", function () {
    var password = document.querySelector(".password").value;
    if (password == "") {
        document.querySelector(".error").innerHTML = "Please Enter Password";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else if ((password.length < 8)) {
        document.querySelector(".error").innerHTML = "Password Length must be Greater Or Equal to 8";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else {
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";

    }
});
document.querySelector(".conformpassword").addEventListener("input", function () {
    var conformpassword = document.querySelector(".conformpassword").value;
    if (conformpassword == "") {
        document.querySelector(".error").innerHTML = "Please Enter Confirm Password";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else if ((conformpassword.length < 8)) {
        document.querySelector(".error").innerHTML = "ConfirmPassword Length must be Greater Or Equal to 8";
        document.querySelector(".submitbutton").style.display = "none"
    }
    else {
        document.querySelector(".error").innerHTML = "";
        document.querySelector(".submitbutton").style.display = "block";
    }
});
