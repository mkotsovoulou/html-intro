$( document ).ready(function() {

$("#newsletter").change(function() {
   if ($(this).is( ":checked" ))
       $("#email").show();
    else
       $("#email").hide();
});

/*
$("#pass1").keyup(function() {
  if($(this).val().length < 5) {
   $("#errorPass1").html('length less than 5');
  }
  else $("#errorPass1").html(' ');
});
*/
});

function validateForm() {
     $("#registration").click(function(){
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
     });
}



function validatePassword() {
        var validator = $("#registration").validate({
            rules: {
                pass1: { minlength: 5,
                         required : true },
                pass2: {
                    equalTo: "#pass1"
                }
            },
            messages: {
                pass1: { required : " Enter Password",
                         minlength : "length ust be more than 5"},
                pass2: " Enter Confirm Password Same as Password"
            }
        });
        if (validator.form()) {
            alert('Success');
        }
    }
