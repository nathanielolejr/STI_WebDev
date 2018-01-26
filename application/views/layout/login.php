        <div class="top-content">
        	<div class="container">
<p></p>


				<div class="alert alert-success hidden signup-alert col-md-5"></div>
                <div class="row register-form margin">
                    	<div class="col-sm-5 col-sm-offset-1 background rounded ">
							<form role="form" id="signup-form" action="<?php //echo base_url('user/signup');?>" method="post" class="left r-form">
							<div class="form-group">
	                    		<label class="left" for="fname">First name</label>
	                        	<input type="text" name="fname" placeholder="First name..." class="fname form-control" id="fname" autocomplete="off" >
	                        </div>
	                        <div class="form-group">
	                        	<label class="left" for="lname">Last name</label>
	                        	<input type="text" name="lname" placeholder="Last name..." class="lname form-control" id="lname" autocomplete="off">
	                        </div>
							<div class="form-group">
	                        	<label class="left" for="username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="username form-control" id="user-name" autocomplete="off" >
	                        </div>
	                        <div class="form-group">
	                        	<label class="left" for="email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="email form-control" id="email" autocomplete="off">
							</div>		
							<div class="form-group">
	                        	<label class="left" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="pass" autocomplete="off" >
							</div>
							<div class="form-group">
	                        	<label class="left" for="con-password">Password Confirmation</label>
	                        	<input type="password" name="con-password" placeholder="Confirm Password..." class="con-password form-control" id="con-pass" autocomplete="off" >
	                        </div>
							<button type="submit" class="btn btn-primary btn-xl col-md-6S">Sign me up!</button>	
							</form>
						</div>

						
			          
                	<div class="col-sm-7 forms-right-icons">
							<div class="row">
								<div class="col-sm-12">
								<div class="row">
                    <div class="col-sm-12 ">
						<h1 class="colorjoinus">
							Come &amp; Join Us Now!</h1>
                        <div class="description">
                        	<p>
	                         Time is limited so enjoy little things at Marshweet Café.
                        	</p>
                        </div>		
                    </div>
                </div>
									<h3>Guide</h3>
									<p>Welcome to Marshweet Café. If you want to be one of us who loves Marshweet, please fill up the registration form at the right side of the page. After that click the "Sign Me Up" button so that we can proceed you to the Login form. </p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3>Good Aroma To Start Your Day</h3>
									<p>Life is too short to start your day with broken pieces of yesterday, it will definitely destroy your wonderful today and ruin your great tommorow. So come to Marshweet Café and refresh your mind.</p>
								</div>
							</div>
                	</div>
                </div>
                	
                <div class="row login-form margin">
                    <div class="col-sm-4 col-sm-offset-1 margin left">
						<form role="form" id="login-form" action="<?php echo base_url('auth/login'); ?>" method="post" class="l-form">
	                    	<div class="form-group">
	                    		<label class="left" for="username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="username form-control" id="username" required>
	                        </div> 
	                        <div class="form-group">
	                        	<label class="left" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="password"required>
	                        </div>
                            <div class="alert alert-success hidden success-alert">
                                <strong>Success!</strong> You have created an account. You can now login.
                            </div>

                            <div class="alert alert-success hidden login-alert">
                                <strong>You have login successfully!</strong>
                            </div>
							<div class="form-group">
								<div class="col-md-12 col-md-offset-4">
									<button type="submit" class="btn btn-primary btn-xl">Sign in!</button>
									<h1 class="registered col-md-10"	>
									<p id="account">Don't have an account ? <a class='show-register-form row' href="#">Register Now!</a></p>
								</h1>
								</div>
							</div>
				        
				    	</form>
                    </div>
                </div>         
        	</div>
        </div>