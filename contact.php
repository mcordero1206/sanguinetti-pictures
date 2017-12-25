<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'mcordero1206@gmail.com';
$subject = 'Message for Sanguinetti Pictures from '. $field_name;

//$body_message = 'From: '.$field_name."\n";
//$body_message .= 'E-mail: '.$field_email."\n";
//$body_message .= 'Message: '.$field_message;
//
//$headers = 'From: '.$field_email."\r\n";
//$headers .= 'Reply-To: '.$field_email."\r\n";

mail($mail_to, $subject, $field_message, "From " . $field_name);
echo "Your Message has been sent";
?>
<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
</script>
