
<input type="hidden" name="login_status" value="<?php echo $this->session->userdata('user_id');?>"/>
<div class="alert alert-success login-alert col-md-3 offset-sm-8" hidden>
  <strong>Welcome you have successfully login!</strong>
</div>
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Marshweet Café</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url();?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="dropdown nav-item px-lg-4" >
              <a class="dropbtn nav-link text-uppercase text-expanded"  href="<?php echo base_url('menu');?>">Menu</a>
              <div class="dropdown-content">
              <a href="<?php echo base_url('menu/coffee');?>">Coffee</a>
              <a href="<?php echo base_url('menu/desserts');?>">Desserts</a>
              <a href="<?php echo base_url('menu/shakes-toppings');?>">Shakes & Toppings</a>
              <a href="<?php echo base_url('menu/merch');?>">Merchandise</a>
            </div>
          </li>
              <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url('welcome/about');?>">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded"  href="<?php echo base_url('contact-us');?>">Contact</a>
            </li>
            <li class="nav-item px-lg-4">
            <?php if($this->session->userdata('user_id') > 0): ?>
              <a class="nav-link text-uppercase text-expanded logout" href="#">Logout</a>
            <?php else: ?>
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url('login');?>">Login</a>
            <?php endif;?>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    