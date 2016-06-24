$(document).ready(function(){
  $("#signupForm").on("submit",function(form){
    form.validate({
      submitHandler: function(form){
        alert('worked');
      }
    });
  });
});


$("#myform").validate({
 submitHandler: function(form) {
   // some other code
   // maybe disabling submit button
   // then:
   $(form).submit();
 }
});
