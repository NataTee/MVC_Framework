<?php

/*
Name: Natalia Ksenz
Coding 07
Purpose: MVC Frameworks

Filename: email.php
*/

/* This will test to make sure we have a non-empty $_POST from
* the form submission. */
if (!empty($_POST)) {
      $name = $_POST['name'];
      $from = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      // validate and clean the posted values
      $name = strip_tags(substr(trim($name), 0, 64));
      $from = filter_var($from, FILTER_VALIDATE_EMAIL);
      $subject = strip_tags(substr(trim($subject), 0, 64));
      $message = strip_tags(substr(trim($message), 0, 1000));

      if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {
            /* this forms the correct email headers to send an email */
            $headers = "From: $from\r\n";
            $headers .= "Reply-To: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

            if (mail($from, $subject, $message, $headers)) {
                // this will be sent back to the calling function on the client
                echo "okay";
            } else {
                // this will be sent back to the calling function on the client
                echo "error";
            }
      } else {
          echo "error";
      }
} else {
    echo "error";
}
?>
