function checkUser() {
    var username = $("#uname").val();
    // retrieves the username from the HTML form
    var dataString = 'uname=' + username;
    // create the datastring we're going to need in our AJAX request, there could be multiple values passed here, but in this case just one
    $.ajax({ 
      // create the AJAX request using JQuery method
        type: "POST", // method is post
        url: "checkuser.php", // the PHP script we want to communicate with
        data: dataString, // the data we're passing
        success: function(data) {
          if (data.availability === false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message").html("username is unavailable, please choose another"); // send a message to the user
              //$("#uname").css("background-color","#f99"); // change the CSS to give user feedback
              $("#uname").prop("class","form-control is-invalid");
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.availability === true){
              $("#message").html("username is available, please proceed"); // send a message to the user
              //$("#uname").css("background-color","#9f9"); // change the CSS to give user feedback
              $("#uname").prop("class","form-control is-valid");
              $("#submit").prop('disabled',false); // enable the submit button
          }
        }, 
        dataType: "json" // returned data type is going to be JSON
    });
}

function checkempty(){
  var fname = $("#fname").val();
  var sname = $("#sname").val();
  var uname = $("#uname").val();
  var pword = $("#pword").val();
  var email = $("#email").val();
  
  if (fname === '' || sname === '' || uname === '' || pword === '' || email === '') {
    alert("Please Fill All Fields");
    return false;
  }
  else {
    return true;
  }
}
