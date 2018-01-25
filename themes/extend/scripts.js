
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    
    /*
        Forms show / hide
    */
    $('.show-register-form').on('click', function(){
    	if( ! $(this).hasClass('active') ) {
    		$('.show-login-form').removeClass('active');
    		$(this).addClass('active');
    		$('.login-form').fadeOut('fast', function(){
				$('.show-forms').text('Register');
				$('.register-form').fadeIn('fast');
				$('span.active').text('Register');
    		});
		}
		
		return false;
    });
    // ---
    $('.show-login-form').on('click', function(){
    	if( ! $(this).hasClass('active') ) {
    		$('.show-register-form').removeClass('active');
    		$(this).addClass('active');
    		$('.register-form').fadeOut('fast', function(){
    			$('.login-form').fadeIn('fast');
    		});
    	}
	});
	
	$("#signup-form").submit(function() {
	
		$.ajax({
			   type: "POST",
			   url : base_url + "user/signup",
			   data: $(this).serialize(),
			   dataType: 'text',
			   complete: function(response) {
				console.log(response.responseText);
				   if(response.responseText != 'success'){
					$('div.signup-alert').removeClass('hidden');
					$('div.signup-alert').html(response.responseText);
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
				   

			   } // serializes the form's elements.
		});
	
		return false; // avoid to execute the actual submit of the form.
	});

	$("#login-form").submit(function(){
		$.ajax({
			type    : "POST",
			url     : base_url + "auth/login",
			data    : $(this).serialize(),
			dataType: 'json',
			success : function(response) {
				console.log(response);
    			if (response == "success") 
    			{
                    window.location = base_url;
    			}	
		    }
		});
        return false;

	 });
		 
	 	$('.logout').on('click', function() {
			$.ajax({
				type    : "POST",
				url     : base_url + "auth/logout",
				complete: function(){
					window.location = base_url+ 'welcome/login';
				}

			});
			return false;

		 });
	
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
					}
				});
			break;
			case 'home-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/home",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'logo-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/home",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'coffee-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/coffee",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'desserts-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/desserts",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'shakes-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/shakes",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'merchandise-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/merch",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'logout-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/login",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'login-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/login",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'menu-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/menu",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'home-about':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/about",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			case 'contact-page':
				$.ajax({
				type   : 'text',
				url    : base_url + "welcome/contact",
				success: function(response) {
					$content.html(response);
				}
			});
			break;
			
			
			
			
			
			
			
			
			default:
			break;

		}

		return false;
	});


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
	
	function login_alert() {
		var user_id = $('input[name="login_status"]').val();

		if(user_id > 0 && (window.location.href == base_url)) {
			$('div.login-alert').removeAttr('hidden');

			$("div.login-alert").fadeTo(2000, 100).slideUp(500, function(){
				$("div.login-alert").slideUp(500);
			});
		}
		//$('div.login-alert').fadeOut(2000,200);
	}
	
	
	login_alert();
});
