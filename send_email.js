function sendEmail() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
    
    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'send_email.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          alert("Thank you for your message! We will get back to you shortly.");
        } else {
          alert("Oops! An error occurred while sending the email.");
        }
      }
    };
    
    // Build the request data
    var data = 'name=' + encodeURIComponent(name) +
               '&email=' + encodeURIComponent(email) +
               '&mobile=' + encodeURIComponent(mobile) +
               '&subject=' + encodeURIComponent(subject) +
               '&message=' + encodeURIComponent(message);
    
    // Send the request
    xhr.send(data);
  }
  