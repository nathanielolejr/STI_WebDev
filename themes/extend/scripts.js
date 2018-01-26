
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    
    /*
        Forms show / hide
    */
    
	
	function register_listener() {
		$('.show-register-form').on('click', function(){
			if( ! $(this).hasClass('active') ) {
				$('.show-login-form').removeClass('active');
				$(this).addClass('active');
				$('.login-form').fadeOut('fast', function(){
					$('.show-forms').text('Register');
					$('.register-form').css('display','flex');
					$('span.active').text('Register');
				});
			}
			
			return false;
		});
	}

    // ---
    $('.show-login-form').on('click', function(){
    	if( ! $(this).hasClass('active') ) {
    		$('.show-register-form').removeClass('active');
    		$(this).addClass('active');
    		$('.register-form').fadeOut('fast', function(){
    			$('.login-form').css('display','flex');
    		});
    	}
	});

	function signup_listener(){
		$("#signup-form").submit(function() {
	
			$.ajax({
				   type: "POST",
				   url : base_url + "user/signup",
				   data: $(this).serialize(),
				   dataType: 'text',
				   complete: function(response) {
					console.log(response);
					   if(response.responseText != 'success'){
						$('div.signup-alert').removeClass('hidden');
						$('div.signup-alert').html(response.responseText);
						$('html, body').animate({
							scrollTop: $('.signup-alert').offset().top
						}, 500);
					   }
					   else{
						$('.register-form').fadeOut('fast', function(){
							$('.login-form').fadeIn('fast');
						});
						$('.show-forms').text('Login');
						$('div.success-alert').removeClass('hidden');
						$("div.success-alert").fadeTo(2000, 200).slideUp(500, function(){
							 $("div.success-alert").slideUp(500);
						});
						
					   }
					   
	
				   } 
			});
		
			return false; // avoid to execute the actual submit of the form.
		});
	}
	function login_listener(){
		$("#login-form").submit(function(){
			$.ajax({
				type    : "POST",
				url     : base_url + "auth/login",
				data    : $(this).serialize(),
				dataType: 'json',
				success : function(response) {
					if (response == "success") 
					{
						login_callback();
					}
				}
			});
			return false;
	
		 });
	 }
	
	 function login_callback() {
		$.ajax({
			type   : 'text',
			url    : base_url + "welcome/home",
			success: function(response) {
				$('.page-content').html(response);
				$('div.login-alert').removeAttr('hidden');

				$("div.login-alert").fadeTo(2000, 100).slideUp(500, function(){
					$("div.login-alert").slideUp(500);
				});
				$('.login').text('Logout');
				$('.login').addClass('logout');
				$('.logout').removeClass('login');
				logout_listener();
			}
		});
	 }
	 
	 function logout_listener(){
		$('.logout').on('click', function() {
			$.ajax({
				type    : "POST",
				url     : base_url + "auth/logout",
				complete: function(){
					$.ajax({
						type   : 'text',
						url    : base_url + "welcome/login",
						success: function(response) {
							$('.page-content').html(response);

							$('.logout').text('Login');
							$('.logout').addClass('login');
							$('.login').removeClass('logout');
							login_listener();
							register_listener();
							signup_listener();
						}
					});
				}

			});
			return false;

		 });
	
	 }
	 	
    /*
        Login form validation
    */
    $('.l-form input[type="text"], .l-form input[type="password"], .l-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.l-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
	});

	function navigation_listener() {
		$('.navigation').on('click', function(){
			var webpage  = $(this).attr('data-name');
			var $content = $('.page-content');
			switch(webpage) {
				case 'contact-page':
					$.ajax({
						type   : 'text',
						url    : base_url + "welcome/contact",
						success: function(response) {
							$content.html(response);
							logout_listener();
						}
					});
				break;
				case 'home-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/home",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'logo-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/home",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'coffee-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/coffee",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'desserts-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/desserts",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'shakes-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/shakes",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'merchandise-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/merch",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'logout-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/login",
					success: function(response) {
						$content.html(response);
						logout_listener();
						
					}
				});
				break;
				case 'login-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/login",
					success: function(response) {
						$content.html(response);
						register_listener();
						signup_listener();
						login_listener();
	
					}
				});
				break;
				case 'menu-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/menu",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'home-about':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/about",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				case 'contact-page':
					$.ajax({
					type   : 'text',
					url    : base_url + "welcome/contact",
					success: function(response) {
						$content.html(response);
						logout_listener();
					}
				});
				break;
				default:
				break;
		
			}
			return false;
		});
	}
	


    $('.r-form input[type="text"], .r-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.r-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
	
	navigation_listener();
});
