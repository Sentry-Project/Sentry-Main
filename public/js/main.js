
var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('psw-repeat').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }


  function sendEmail(){
    var name = $('#name');
    var telephone = $('#telephone');
    var email = $('#email');
    var message = $('#message');

    if(NotEmpty(name) && NotEmpty(telephone) && NotEmpty(email) && NotEmpty(message)){
      $.ajax({ 
        url: 'http://localhost/sentry/pages/contactForm',
        method: 'POST',
        dataType: 'json',
        data: {
          name: name.val(),
          email: email.val(),
          telephone: telephone.val(),
          message: message.val()
        }, success: function(response){
          if(response.status == "success"){
            $('#contact-confirm').html('Message sent successfully');
            $("#contact-confirm").addClass("success");
            name.val('');
            telephone.val('');
            email.val('');
            message.val('');
          } else{
            $('#contact-confirm').html('Please try again');
            $("#contact-confirm").addClass("failed");
          }
        
        }
      });
    }
  }

  function NotEmpty(call){
    if(call.val() == ""){
      call.css('border', '1px solid red');
      return false;
    } else{
      call.css('border', '');
      return true;
    }
  }