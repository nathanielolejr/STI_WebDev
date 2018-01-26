

<div class="siteheader">
<input type="hidden" name="login_status" value="<?php echo $this->session->userdata('user_id');?>"/>
<div class="alert alert-success login-alert col-md-3 offset-sm-8" hidden>
  <strong>Welcome you have successfully login!</strong>
</div>
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none navigation" href="#" data-name="marshweet-page">Marshweet Café</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded navigation" href="#" data-name="home-page">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="dropdown nav-item px-lg-4" >
              <a class="dropbtn nav-link text-uppercase text-expanded navigation"  href="#" data-name="menu-page">Menu</a>
              <div class="dropdown-content">
              <a class="navigation" href="#" data-name="coffee-page">Coffee</a>
              <a class="navigation" href="#" data-name="desserts-page">Desserts</a>
              <a class="navigation" href="#" data-name="shakes-page">Shakes & Toppings</a>
              <a class="navigation" href="#" data-name="merchandise-page">Merchandise</a>
            </div>
          </li>
              <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded navigation" href="#" data-name="home-about">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded navigation"  href="#" data-name="contact-page">Contact</a>
            </li>
            <li class="nav-item px-lg-4">
            <?php if($this->session->userdata('user_id') > 0): ?>
              <a class="nav-link text-uppercase text-expanded logout navigation" href="#" data-name="login-page">Logout</a>
            <?php else: ?>
              <a class="nav-link text-uppercase text-expanded login navigation" href="#" data-name="login-page">Login</a>
            <?php endif;?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<<<<<<< HEAD
    <div class="page-content">
=======
  </div>



>>>>>>> e2e41d96d0b580b0fba561435b42f8c4efaf4ecb
    