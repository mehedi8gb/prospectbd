@extends('layouts.app')
@section('title')
<title>About Us</title>
@endsection
@section('content')
@php
session_start();

include("public/php/simple-php-captcha/simple-php-captcha.php");
include("public/php/php-mailer/PHPMailerAutoload.php");

// Step 1 - Enter your email address below.
$to = 'you@domain.com';

if(isset($_POST['emailSent'])) {

	$subject = $_POST['subject'];

	// Step 2 - If you don't want a "captcha" verification, remove that IF.
	if (strtolower($_POST["captcha"]) == strtolower($_SESSION['captcha']['code'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];

		// Step 3 - Configure the fields list that you want to receive on the email.
		$fields = array(
			0 => array(
				'text' => 'Name',
				'val' => $_POST['name']
			),
			1 => array(
				'text' => 'Email address',
				'val' => $_POST['email']
			),
			2 => array(
				'text' => 'Message',
				'val' => $_POST['message']
			),
			3 => array(
				'text' => 'Checkboxes',
				'val' => implode($_POST['checkboxes'], ", ")
			),
			4 => array(
				'text' => 'Radios',
				'val' => $_POST['radios']
			)
		);

		$message = "";

		foreach($fields as $field) {
			$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
		}

		$mail = new PHPMailer;

		$mail->IsSMTP();                                      // Set mailer to use SMTP
		$mail->SMTPDebug = 0;                                 // Debug Mode

		// Step 4 - If you don't receive the email, try to configure the parameters below:

		//$mail->Host = 'mail.yourserver.com';				  // Specify main and backup server
		//$mail->SMTPAuth = true;                             // Enable SMTP authentication
		//$mail->Username = 'username';             		  // SMTP username
		//$mail->Password = 'secret';                         // SMTP password
		//$mail->SMTPSecure = 'tls';                          // Enable encryption, 'ssl' also accepted

		$mail->From = $email;
		$mail->FromName = $_POST['name'];
		$mail->AddAddress($to);
		$mail->AddReplyTo($email, $name);

		$mail->IsHTML(true);

		$mail->CharSet = 'UTF-8';

		$mail->Subject = $subject;
		$mail->Body    = $message;

		// Step 5 - If you don't want to attach any files, remove that code below
		if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
			$mail->AddAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
		}

		if($mail->Send()) {
			$arrResult = array('response'=> 'success');
		} else {
			$arrResult = array('response'=> 'error', 'error'=> $mail->ErrorInfo);
		}

	} else {

		$arrResult['response'] = 'captchaError';

	}

}

@endphp
<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us Advanced</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div class="offset-anchor" id="contact-sent"></div>

                <?php
                if (isset($arrResult)) {
                    if($arrResult['response'] == 'success') {
                    ?>
                    <div class="alert alert-success" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                    <?php
                    } else if($arrResult['response'] == 'error') {
                    ?>
                    <div class="alert alert-danger" id="contactError">
                        <strong>Error!</strong> There was an error sending your message. (<?php echo $arrResult['error'];?>)
                    </div>
                    <?php
                    } else if($arrResult['response'] == 'captchaError') {
                    ?>
                    <div class="alert alert-danger" id="contactError">
                        <strong>Error!</strong> Verificantion failed.
                    </div>
                    <?php
                    }
                }
                ?>

                <h2 class="short"><strong>Contact</strong> Us</h2>
                <form id="contactFormAdvanced" action="<?php echo basename($_SERVER['PHP_SELF']); ?>#contact-sent" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="true" name="emailSent" id="emailSent">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject</label>
                                <select data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject" required>
                                    <option value=""></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Checkboxes</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkbox-group" data-msg-required="Please select at least one option.">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox1" value="option1"> 1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox2" value="option2"> 2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox3" value="option3"> 3
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox2" value="option4"> 4
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox3" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Radios</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="radio-group" data-msg-required="Please select one option.">
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio1" value="option1"> 1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio2" value="option2"> 2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio3" value="option3"> 3
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio2" value="option4"> 4
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio3" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Attachment</label>
                                <input type="file" name="attachment" id="attachment">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Human Verification *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="captcha form-control">
                                    <div class="captcha-image">
                                        <?php
                                        $_SESSION['captcha'] = simple_php_captcha(array(
                                            'min_length' => 6,
                                            'max_length' => 6,
                                            'min_font_size' => 22,
                                            'max_font_size' => 22,
                                            'angle_max' => 3
                                        ));

                                        $_SESSION['captchaCode'] = $_SESSION['captcha']['code'];

                                        echo '<img id="captcha-image" src="' . "php/simple-php-captcha/simple-php-captcha.php/" . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
                                        ?>
                                    </div>
                                    <div class="captcha-refresh">
                                        <a href="#" id="refreshCaptcha"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control input-lg captcha-input" name="captcha" id="captcha" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4 class="push-top">Get in <strong>touch</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

                <hr />

                <h4>The <strong>Office</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>

                <hr />

                <h4>Business <strong>Hours</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
                    <li><i class="fa fa-time"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-time"></i> Sunday - Closed</li>
                </ul>

            </div>
        </div>

    </div>

</div>

@endsection
