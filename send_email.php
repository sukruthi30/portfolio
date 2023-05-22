<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Set the recipient email address
    $to = 'sukruthi3072@gmail.com';
    
    // Set the email subject
    $email_subject = "New form submission: $subject";
    
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Mobile: $mobile\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message: $message\n";
    
    // Set additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    $success = mail($to, $email_subject, $email_message, $headers);
    
    // Check if the email was sent successfully
    if ($success) {
        echo "Email sent";
    } else {
        echo "Email sending failed";
    }
}
?>

