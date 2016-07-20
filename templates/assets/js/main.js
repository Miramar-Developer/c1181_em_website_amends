$(document).ready(function() {

	$('#form-submit').on('click',function(e) {
		e.preventDefault();
		var passed = true;
		
		if($('input[name=name]').val() == "") {
			$('input[name=name]').addClass("form-error");
			passed = false;
		} else {
			$('input[name=name]').removeClass("form-error");
		}
		
		if($('input[name=email]').val() == "" || validateEmail($('input[name=email]').val()) == false) {
			$('input[name=email]').addClass("form-error");
			passed = false;
		} else {
			$('input[name=email]').removeClass("form-error");
		}
		
		if($('input[name=subject]').val() == "") {
			$('input[name=subject]').addClass("form-error");
			passed = false;
		} else {
			$('input[name=subject]').removeClass("form-error");
		}
		
		if($('textarea[name=message]').val() == "") {
			$('textarea[name=message]').addClass("form-error");
			passed = false;
		} else {
			$('textarea[name=message]').removeClass("form-error");
		}
		
		if(passed == true) {
			$("#form-submit").html("Sending...");
			$.post( "contact", { 
			name : $('input[name=name]').val(), 
			email : $('input[name=email]').val(), 
			subject:  $('input[name=subject]').val(), 
			message:  $('textarea[name=message]').val() })
			.done(function( data ) {
				if(data == 500) {
					$("#form-error").show();
				} else {
					$("#form-submit").html("Message sent!");
				}
  });
		} 
		
		
		
	});
	
	
});


function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 