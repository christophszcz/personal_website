<?php
 
  if ($_POST["submit"]) {
      
     if (!$_POST['name']) {
 
       $error="<br />Please enter your name";
 
     }
      
     if (!$_POST['email']) {
 
       $error.="<br />Please enter your email address";
 
     }

     if (!$_POST['comment']) {
 
       $error.="<br />Please enter a messsage";
 
     }
      
    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      
      $error.="<br />Please enter a valid email address";
 
     }
      
     if ($error) {
 
      $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
 
      } else {
 
      if (mail("cjszczechowicz@gmail.com", "Comment from website!", "Name: " .$_POST['name'] ."
      
      Phone number: " .$_POST['phone']." 
      
      Email: " .$_POST['email']."
      
      Comment: ". $_POST['comment'])) {
 
        $result='<div class="alert alert-success"><strong>Thank you. Your form has been submitted!</strong></div>';
 
      } else {
 
      $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
 
      }
    }
  }
?>