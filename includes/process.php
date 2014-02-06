// <?php 
// if (($_SERVER['REQUEST_METHOD'] === 'POST') && (!empty($_POST['action']))):

// if (isset($_POST['name'])) { $name = $_POST['name'];}
// if (isset($_POST['email'])) { $name = $_POST['email'];}
// if (isset($_POST['number'])) { $name = $_POST['number'];}
// if (isset($_POST['message'])) { $name = $_POST['message'];}

// $formerrors = false;

// 	if ($name === ''): 
// 		$err_name = '<div class="error">Your name is a required field</div>';
// 		$formerrors = true;
// 	endif; //input field empty

// 	if ($email === ''): 
// 		$err_email = '<div class="error">Your email address is a required field</div>';
// 		$formerrors = true;
// 	endif; //input field empty

// 	if (!($formerrors)) :
// 		$to = "djsaun@gmail.com";
// 		$subject = "Teacher Portfolio Message";
// 		$note = "$name filled out the form.";

// 		$replyto = "From: $email \r\n".

// if (mail($to, $subject, $note)):
// 		$msg = "Thank you for filling out the form. I will get back to you soon.";
// 	else:
// 		$msg = "Problem sending the message";
// 	endif; //mail form data

// 	endif; // check for form errors


// 	endif; //form submitted
?>