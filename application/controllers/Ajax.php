<?php

/*
Name: Natalia Ksenz
Coding 08
Purpose: Codeigniter + AJAX

Filename: Ajax.php
*/

class Ajax extends CI_Controller {

	public function processemail() {
		// make sure caller is an ajax request
    if ($this->input->is_ajax_request()) {

      // validate and clean the posted values
      $name = strip_tags(substr(trim($this->input->post('name')), 0, 64));
      $from = filter_var(($this->input->post('email')), FILTER_VALIDATE_EMAIL);
      $subject = strip_tags(substr(trim($this->input->post('subject')), 0, 64));
      $message = strip_tags(substr(trim($this->input->post('message')), 0, 1000));

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
	}

	public function index() {
		echo "";
  }
}
