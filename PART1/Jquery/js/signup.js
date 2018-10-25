$( document ).ready(function() {

$("#newsletter").change(function() {
   if ($(this).is( ":checked" ))
       $("#email").show();
    else
       $("#email").hide();
});

/* If you want a Jquery Custom "live" validation uncomment the code below */
/*
$("#pass1").keyup(function() {
  if($(this).val().length < 5) {
   $("#errorPass1").html('length less than 5');
  }
  else $("#errorPass1").html(' ');
});

$("#pass2").keyup(function() {
 var pass1 = $("#pass1").val();
 var pass2 = $("#pass2").val();
  if(pass1 != pass2) {
   $("#errorPass2").html('Passwords do not match!');
  }
  else $("#errorPass2").html(' ');
});
*/


/* If you want to use the validator library from JQuery uncomment this code */
// Remember that the validator uses the name HTML attribute and not the id
 $("#registration").validate({
            rules: {
               	username: {
					              required: true,
					              minlength: 2 },
                pass1: { minlength: 5,
                         required : true },
                pass2: {
                    equalTo: "#pass1"
                }
            },
            messages: {
               username: {
					            required : "Please enter a username",
					            minlength: "Your username must consist of at least 2 characters"
				              },
                pass1: { required : "Enter Password",
                         minlength : "Password length must be more than 5"},
                pass2: "Confirm Password is not the same as Password"
            }
        }); //END VALIDATOR

}); //End Document.READY

/* If you want to validate the form when the button is clicked uncomment this code */

function validateForm() {
        $(".error").hide();
        var isValid = true;
        var pass1 = $("#pass1").val();
        var pass2 = $("#pass2").val();
         if (pass1.length < 5) {
             $("#pass1").after('<span class="error">Password should be more than 5.</span>');
           isValid=false;
          }

        if (pass1 != pass2) {
           $("#pass2").after('<span class="error">Passwords do not match.</span>');
          isValid=false;
        }
     return isValid;
}


$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});




