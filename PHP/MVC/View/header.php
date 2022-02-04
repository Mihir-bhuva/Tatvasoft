 <header style=" position: fixed;
top: 0;
width: 100%;transition:2s;">
   <div class="Navbar">
   <div class="Navbar__Link-brand">
     <a href="index.php?function=HomePage"><img src="./images/logo-small.png" class="logo" alt=""></a>
   </div>


   <div class="Navbar__Link Navbar__Link-toggle">
     <i class="fa fa-bars"></i>
   </div>
   </nav>
   <nav class="Navbar__Items Navbar__Items--right">
     <div class="">
       <button class="booknow">
         <a class="nav-link" href="#">Book Now</a>
       </button>
     </div>
     <div class="Navbar__Link">
       <a href="index.php?function=Prices">Prices & services</a>
     </div>
     <div class="Navbar__Link">
       <a href="#">Warranty</a>
     </div>
     <div class="Navbar__Link">
       <a href="#">Blog</a>
     </div>
     <div class="Navbar__Link">
       <a href="index.php?function=Contactus">Contact</a>
     </div>
     <div class="">
       <button class="Login" onclick="login()">
         <a class="nav-link"  href="#">Login</a>
       </button>
     </div>
     <div class="">
       <button class="Helper">
         <a class="nav-link" href="index.php?function=BecomeHelper">Become a Helper</a>
       </button>
     </div>

   </nav>
 </div>
 <?php include 'popup.php'?>
</header>