<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$mn = $_POST['mn'];
$formcontent="From: $name \n Message: $message \n Mobile : $mn";
$recipient = "blackhatal@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
echo '<script type="text/javascript">
           window.location = "http://aviral2.000webhostapp.com/"
      </script>';
?>
