<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Come &amp; Join Us Now!</title>

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
                        <h1>Come &amp; Join Us Now!</h1>
                        <div class="description">
                        	<p>
	                         Time is limited so enjoy little things at Marshweet Café.
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
	                        	<input type="text" name="fname" placeholder="First name..." class="fname form-control" id="fname" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="lname">Last name</label>
	                        	<input type="text" name="lname" placeholder="Last name..." class="lname form-control" id="lname"required>
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="username form-control" id="user-name"required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="email form-control" id="email"required>
	                        </div>		
							<div class="form-group">
	                        	<label class="sr-only" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="pass"required>
	                        </div>
				            <button type="submit" class="btn sign-up-btn">Sign me up!</button>
						</form>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-pencil"></i></div>
							<div class="col-sm-10">
								<h3>Guide</h3>
								<p>Welcome to Marshweet Café. If you want to be one of us who loves Marshweet, please fill up the registration form at the right side of the page. After that click the "Sign Me Up" button so that we can proceed you to the Login form. </p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-magic"></i></div>
							<div class="col-sm-10">
								<h3>Good Aroma To Start Your Day</h3>
								<p>Life is too short to start your day with broken pieces of yesterday, it will definitely destroy your wonderful today and ruin your great tommorow. So come to Marshweet Café and refresh your mind.</p>
							</div>
						</div>
                    </div>
                </div>
                	
                <div class="row login-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" id="login-form" action="<?php echo base_url('auth/login'); ?>" method="post" class="l-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="username form-control" id="username"required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="password"required>
	                        </div>
							<div class="alert alert-success hidden login-alert">
strong>Success!</strong> Indicates a successful or positive action.
</div>
				            <button type="submit" class="btn">Sign in!</button>
							<div>
							<p style="color:white;">Dont have an account?<a class='show-register-form' href="#">Register Now!</p>
						</div>
				    	</form>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
							<div class="col-sm-10">
								<h3>Attention!</h3>
								<p>You just finish filling up the registration form, and now please fill up again the form in the right side then click "Sign In" and you will become one of us now. Congratulations!</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-twitter"></i></div>
							<div class="col-sm-10">
								<h3>A Member</h3>
								<p>What is the recipe for successful achievement? To my mind there are just four essential ingredients: <em>Choose a career you love, give it the best there is in you, seize your opportunities, and be a member of the team.</em></p>
								<p>-Benjamin Franklin Fairless</p>
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