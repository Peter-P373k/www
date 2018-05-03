<?php

	define('MAIL_TO','webmaster@example.com');
	$errors = array();
	
	$name = '';
	$email = '';
	$subject = '';
	$message = '';

	
	/**
	 * validate form data 
	 * @return boolean return true if no error found, otherwise return false
	 */
	function validate_form(){
		
		global $errors, $name, $email, $subject, $message;
		
		// validate name
		if($_POST['name'] != ''){
			$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
			if($name == ''){
				$errors[] = 'Name is not valid';
			}
		}else{
			$errors[] = 'Name is required';
		}
		
		// validate email
		if($_POST['email'] != ''){
			$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
			
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors[] = 'Email is not valid';
			}
		}else{
			$errors[] = 'Email is required';
		}

		// validate subject
		if($_POST['subject'] != ''){
			$subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
			if($subject == ''){
				$errors[] = 'Subject is not valid';
			}
		}else{
			$errors[] = 'Subject is required';
		}
		
		// validate message
		if($_POST['message'] != ''){
			$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
			if($message == ''){
				$errors[] = 'Message is not valid';
			}
		}else{
			$errors[] = 'Message is required';
		}
		
		if(count($errors)){
			return false;
		}else{
			return true;
		}
	}
	
	/**
	 * display field value
	 * @param string $fieldName
	 */
	function display_value($fieldName){
		echo isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
	}
	
	/**
	 * display message to users
	 * @param array $errors array of errors
	 */
	function display_message($errors){
		if(!isset($_POST['submit'])){
			return;
		}
		// 
		if(count($errors) === 0){
		?>
			<div class="alert alert-success">
				<p>Thank you! you message has been sent.</p>
			</div>		
		<?php 	
		}else{
		?>
			<div class="alert alert-block alert-error fade in">
				<p>The following error(s) occurred:</p>
				<ul>
				<?php 
					foreach ($errors as $error) {
						echo "<li>$error</li>";
					}
				?>
				</ul>
			</div>
		<?php
		} 
	}
	
	/**
	 * start form processing
	 */
	function start_form(){
		global $errors, $name, $email, $subject, $message;
		
		$mail_msg = '';
		// if user submitted the form
		if(isset($_POST['submit']))
		{
			// validate form
			if(validate_form())
			{
				$mail_msg .= 'From: ' . $name . "\n";
				$mail_msg .= 'Email: ' . $email . "\n";;
				$mail_msg .= 'Message: ' . $message . "\n";

				// send email to the MAIL_TO email address
				if(!@mail(MAIL_TO, $subject, $mail_msg)){
					$errors[] = 'Error sending email';
				}
			}
		}	
	}

	// start form processing
	start_form();
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<form action="contact.php" method="POST" class="form-horizontal">
		<fieldset>
			<legend>PHP Contact Form Demo</legend>
			<?php
				display_message($errors);
			?>
		<div class="control-group">
			<label for="name" class="control-label">Name:</label> 
			<div class="controls">
				<input type="text" 
					   name="name" 
					   id="name"
					   value="<?php display_value('name')?>" 
					   class="input-xlarge" 
					   placeholder="Name"/>
			</div>
		</div>
		
		<div class="control-group">
			<label for="email" class="control-label">Email:</label>
			<div class="controls">
				<input type="email" 
					   name="email"
					   id="email" 
					   value="<?php display_value('email')?>"
					   class="input-xlarge" 
					   placeholder="Email"/>
			</div>	
		</div>
		
		<div class="control-group">
			<label for="subject" class="control-label">Subject:</label>
			<div class="controls">
				<input type="text" 
				       name="subject"
				       id="subject" 
				       value="<?php display_value('subject')?>" 
				       class="input-xlarge" 
				       placeholder="Subject" />
			</div>	
		</div>
		
		<div class="control-group">
			<label for="message" class="control-label">Message:</label>
			<div class="controls">
				<textarea rows="7" 
				          cols="25" 
				          name="message" 
				          id="message"
				          class="input-xlarge"><?php display_value('message')?></textarea>
			</div>
		</div>
		
		<div class="control-group"> 
			<div class="controls">
				<input type="submit" name="submit" value="Send"	class="btn"> 
				<input type="reset" name="reset" value="Reset"	class="btn">
			</div>
		</div>
		</fieldset>
	</form>
</div>	
</body>
</html>
