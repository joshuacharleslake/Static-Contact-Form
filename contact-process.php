<?php session_start(); ?>
<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/secure/securimage.php');
$valid = new Securimage(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Process - Brisco Williams</title>
<meta name="distribution" content="Global" />
<meta name="rating" content="Safe For Kids" />
<meta name="author" content="Brisco Williams" />
<meta name="copyright" content="Brisco Williams" />
<?php include("includes/doc.php"); ?>
</head>
<body>
<div id="wrap">
  <?php include("includes/header.php"); ?>
  <div class="colwrap">
    <div id="twocol">
      <?php

// Creare Contact Form Version 3.1 Copyright 2007 All Rights Reserved

$youremail = "alan@brisco.co.uk, sian@brisco.co.uk";
@extract($_POST);
$name = stripslashes($name);
$phone = stripslashes($phone);
$email = stripslashes($email);
$subject = stripslashes($sub);
$message = stripslashes($message);
$area = stripslashes($area);
$captcha = @$_POST['ct_captcha'];

//

$date       = (date ("F j, Y"));
$time		= (date ("H:i:s"));
$IPnumber	= getenv("REMOTE_ADDR");

$_POST['phone'] = preg_replace("/[\n\r]+/", "", $_POST['phone']);
$_POST['name'] = preg_replace("/[\n\r]+/", "", $_POST['name']);
$_POST['sub'] = preg_replace("/[\n\r]+/", "", $_POST['sub']);
$_POST['area'] = preg_replace("/[\n\r]+/", "", $_POST['area']);
$_POST['email'] = preg_replace("/[\n\r]+/", "", $_POST['email']);

//
$msg = "

Brisco Williams Enquiry Form


Personnel Details
------------------------------------

Name:
$name

Email:
$email

Phone:
$phone

Location:
$area


Business Details
-----------------------------------

Subject:
$sub

Message:
$message

-----------------------------------

Date of Enquiry: ".$date." at ".$time."

IP Number: ".$IPnumber."

";

$validstring = '^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$';
if (!eregi($validstring,$email)&&$email) {
$emailcorrect = 0;
}
else  {
$emailcorrect = 1;
}

/* New Captcha Update Area */

if ($valid->check($captcha) == false) {
	
        $errors['ct_captcha'] = 'Incorrect security code entered<br />';
		echo "The security code entered was incorrect.<br /><br />";
  		echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
 		
} else {
	  	
	if($email&&$name&&$message&&$emailcorrect) {
	
	/* Captcha Update End */
	
	if(mail($youremail, $subject, $msg, "From: Brisco Williams Enquiry<$email>")) {
	
	echo " <table width='100%' border='0' class='tickpinkbox' cellpadding='10' cellspacing='0'>
							<tr>
							  <td width='10%'><img src='images/tick.gif' alt='tick' width='39' height='33' /></td>
							  <td width='90%'><p><span class='linkcolor'>Your e-mail was sent to our Office. Thank you $name, for your enquiry.<br />You will be contacted shortly regarding your email.</span></p></td>
							</tr>
						  </table></ br>";					  					  
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$autoreply="Thank you for your message $name. 
	
	We will respond to your email as soon as possible.
	
	This is an automated reply.
	
	Thank you for visiting our website http://www.brisco.co.uk/
	";
	$subject="Thank you for your submission $name.";
	
	mail($email, $subject, $autoreply, "From: Brisco Williams - Email Confirmation<$email>");
	
	}
	}
	//
	if(!$email||!$name||!$message) {
	echo  " <table width='100%' border='0' class='tickredbox' cellpadding='10' cellspacing='0'>
							<tr>
							  <td width='10%'><img src='images/cross.gif' alt='cross' width='39' height='33' /></td>
							  <td width='90%'><span class=''>Sorry, $name, <br />your e-mail was not sent<br /> you have forgotten to fill in a detail.</span></td>
							</tr>
						  </table> ";
	}
	if (!$emailcorrect) {
	echo " <table width='100%' border='0' class='tickredbox' cellpadding='10' cellspacing='0'>
							<tr>
							  <td width='10%'><img src='images/cross.gif' alt='tick' width='39' height='33' /></td>
							  <td width='90%'><span class='style3'>Sorry, $name, <br />your e-mail address is not valid.</span></td>
							</tr>
						  </table> ";
	}

} // captcha check
?>
    </div>
    <div class="right"><img class="headerimg" src="images/contact.jpg" width="70" height="50" alt="bbqs" />
      <p class="addressheader">CONTACT US</p>
      <p class="address">Brisco Williams</p>
      <p class="address">Gorseinon Road</p>
      <p class="address">Swansea</p>
      <p class="address">SA4 9GG</p>
      <p class="tel">Tel: 01792 894961</p>
      <p class="where">OPENING HOURS</p>
      <p class="address">Monday-Friday: 8.30am-5pm</p>
      <p class="address">Wednesday: 8.30am-7pm</p>
      <p class="address">Saturday: 9am-1pm</p>
      <p class="where">HOW DO I GET THERE?</p>
      <iframe width="261" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=brisco+williams+SA4+9GG&amp;sll=51.667538,-4.025524&amp;sspn=0.010434,0.03268&amp;ie=UTF8&amp;hq=brisco+williams&amp;hnear=Swansea,+SA4+9GG,+UK&amp;cid=16372277397674338462&amp;ll=51.672342,-4.024773&amp;spn=0.031937,0.044632&amp;z=13&amp;iwloc=near&amp;output=embed"></iframe>
      <br />
      <small><a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=brisco+williams+SA4+9GG&amp;sll=51.667538,-4.025524&amp;sspn=0.010434,0.03268&amp;ie=UTF8&amp;hq=brisco+williams&amp;hnear=Swansea,+SA4+9GG,+UK&amp;cid=16372277397674338462&amp;ll=51.672342,-4.024773&amp;spn=0.031937,0.044632&amp;z=13&amp;iwloc=A">View Larger Map</a></small> </div>
    <div class="spacer"></div>
  </div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>