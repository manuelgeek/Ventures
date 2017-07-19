// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		  var nameregex = /^[a-zA-Z ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		  // asawa_no validation
		  var asawaregex = /^[0-9]+$/;
		 
		 $.validator.addMethod("validno", function( value, element ) {
		     return this.optional( element ) || asawaregex.test( value );
		 }); 
		 
		  // checkbox validation
		 var chechregex = 1;
		  $.validator.addMethod("validcheck", function( value, element ) {
		     return this.optional( element ) || chechregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#register-form").validate({
					
		  rules:
		  {
				full_name: {
					required: true,
					validname: true,
					minlength: 8
				},
				checkbox1: {
					required: true,
					validname: true
				},
				email: {
					required: true,
					validemail: true
				},
				password: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				password_again: {
					required: true,
					equalTo: '#password'
				},
				phone: {
					required: true,
					validno: true,
					minlength: 7
				},
		   },
		   messages:
		   {
				full_name: {
					required: "Please Enter Full Name",
					validname: "Name must contain only alphabets and space",
					minlength: "Your Name is Too Short"
					  },
				checkbox1: {
					 required: "Please Accept To the iLeave Terms and Conditions",
					  validcheck: "Please Accept To the iLeave Terms and Conditions"
				},
			    email: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				phone: {
					  required: "Please Enter Phone No",
					  validemail: "Please Enter Valid Numbers"
					   },
				password:{
					required: "Please Enter Password",
					minlength: "Password at least have 8 characters"
					},
				password_again:{
					required: "Please Retype your Password",
					equalTo: "Password Did not Match !"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   		submitHandler: function(form){
					
					alert('All Details filled. Press Ok To Continue');
					form.submit();
					//var url = $('#register-form').attr('action');
					//location.href=url;
					
				}
				
				/*submitHandler: function() 
							   { 
							   		alert("Submitted!");
									$("#register-form").resetForm(); 
							   }*/
		   
		   }); 
		   
		   
		   /*function submitForm(){
			 
			   
			   /*$('#message').slideDown(200, function(){
				   
				   $('#message').delay(3000).slideUp(100);
				   $("#register-form")[0].reset();
				   $(element).closest('.form-group').find("error").removeClass("has-success");
				    
			   });
			   
			   alert('form submitted...');
			   $("#register-form").resetForm();
			      
		   }*/
});


