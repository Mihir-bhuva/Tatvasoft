<?php
if (!isset($_SESSION['login'])) { ?>
  <header style=" position: fixed;top: 0;width: 100%;transition:2s;">
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
          <button class="booknow" onclick="booknow()">
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
            <a class="nav-link" href="#">Login</a>
          </button>
        </div>
        <div class="">
          <button class="Helper">
            <a class="nav-link" href="index.php?function=BecomeHelper">Become a Helper</a>
          </button>
        </div>

      </nav>
    </div>
    <?php include 'popup.php' ?>
  </header>
  <script>
  function booknow() {
    <?php
    if (!isset($_SESSION['checklogin'])) { ?>
      login();
    <?php } ?>
    <?php if (isset($_SESSION['checklogin'])) { ?>
      window.location = "http://localhost/Helperland/MVC/index.php?function=BookService";
    <?php unset($_SESSION['checklogin']);
    }
    ?>
  }
</script>
<?php } ?>
<?php if (isset($_SESSION['login'])) { ?>
  <header style=" position: fixed;top: 0;width: 100%;transition:2s;">
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
            <a class="nav-link" href="index.php?function=BookService">Book Now</a>
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
          <button class="Helper">
            <a class="nav-link" href="index.php?function=BecomeHelper">Become a Helper</a>
          </button>
        </div>
        <div class="Navbar__Link vrline" style="margin-right: 19px;">
          <img src="./images/icon-notification.png" alt="">
        </div>
        <div class="Navbar__Link" style=" transform: scale(1);">

          <div class="dropdownn" style="margin-top: -7px;">
            <span> <img src="./images/admin-user.png" alt=""></span>
            <div class="triangle"></div>
            <div class="dropdownn-content">
              <div>Welcome,<br>
                <strong>First Customer</strong>
              </div>
              <div style="display: flex; flex-direction: column;">
                <a class="dropdown-itemm" href="#">My Dashboard</a>
                <a class="dropdown-itemm" href="#">My Settings</a>
                <a class="dropdown-itemm" onclick="logout()" href="#">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <?php include 'popup.php' ?>
  </header>
<?php } ?>
