<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url('themes/extend/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('themes/extend/form-elements.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('themes/extend/style.css');?>">

	

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('themes/img/favicon.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('themes/img/apple-touch-icon-144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('themes/img/apple-touch-icon-114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('themes/img/apple-touch-icon-72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('themes/img/apple-touch-icon-57-precomposed.png');?>">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container">
                	
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Bootstrap Login &amp; Register Forms</h1>
                        <div class="description">
                        	<p>
	                         ADD SOMETHING HERE
                        	</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 show-forms">
                    	<span class="show-register-form active">Register</span> 
                    	<span class="show-forms-divider">/</span> 
                    	<span class="show-login-form">Login</span>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" id="signup-form" action="<?php echo base_url('user/signup');?>" method="post" class="r-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="fname">First name</label>
	                        	<input type="text" name="fname" placeholder="First name..." class="fname form-control" id="fname">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="lname">Last name</label>
	                        	<input type="text" name="lname" placeholder="Last name..." class="lname form-control" id="lname">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="email form-control" id="email">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="pass">
	                        </div>
				            <button type="submit" class="btn sign-up-btn">Sign me up!</button>
						</form>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-pencil"></i></div>
							<div class="col-sm-10">
								<h3>Beautiful Forms</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-commenting"></i></div>
							<div class="col-sm-10">
								<h3>Awesome Login</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-magic"></i></div>
							<div class="col-sm-10">
								<h3>Great Registration</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
                    </div>
                </div>
                
                <div class="row login-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" action="<?php echo base_url('auth/login'); ?>" method="post" class="l-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="username form-control" id="username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="password">
	                        </div>
				            <button type="submit" class="btn">Sign in!</button>
				    	</form>
				    	<div class="social-login">
                        	<p>Or login with:</p>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1" href="#"><i class="fa fa-facebook"></i></a>
	                        	<a class="btn btn-link-1" href="#"><i class="fa fa-twitter"></i></a>
	                        	<a class="btn btn-link-1" href="#"><i class="fa fa-google-plus"></i></a>
                        	</div>
                        </div>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
							<div class="col-sm-10">
								<h3>New Features</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-eye"></i></div>
							<div class="col-sm-10">
								<h3>Easy To Use</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-twitter"></i></div>
							<div class="col-sm-10">
								<h3>Social Integrated</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
                    </div>
                </div>
                    
        	</div>
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
		<script src="<?php echo base_url('themes/extend/jquery-1.11.1.min.js');?>"></script>
        
        
        <!--[if lt IE 10]>
			<script src="assets/js/placeholder.js"></script>
			

        <![endif]-->

    </body>

</html>		