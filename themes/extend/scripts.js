
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
    			$('.register-form').fadeIn('fast');
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
			   complete: function() {
				   $('span.show-login-form').trigger('click');
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
				if (response == "success") 
				{
					$('div.login-alert').removeClass('hidden');
<<<<<<< HEAD
				}
				//e.preventDefault;		
=======
				}	
>>>>>>> 7f7e2c9ef0d4d7251d738e7bb3ef5813345f8d3c
			} // serializes the form's elements.
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
    
    /*
        Registration form validation
    */
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
    
    
});
