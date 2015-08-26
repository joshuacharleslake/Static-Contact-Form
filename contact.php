<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Us - Brisco Williams</title>
<meta name="description" content="This page contains all relevant contact information complete with a enquiry form to request further action" />
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
      <h1>Contact Us</h1>
      <p>For further information regarding our services or products, please fill in your details below and we will contact you as soon as possible.</p>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <?php var_dump( $_POST ); ?>
        <p>Name*</p>
        <input name="name" value="<?php echo $nam ?>" type="text" size="25" maxlength="50" style="width: 550px;" />
        <p>Email Address*</p>
        <input name="email" value="<?php echo $em ?>" type="text" size="25" maxlength="50" style="width: 550px;" />
        <p>Phone Number</p>
        <input name="phone" value="<?php echo $phone ?>" type="text" size="25" maxlength="50" style="width: 550px;" />
        <p>Enquiry Subject</p>
        <input name="sub" value="<?php echo $sub ?>" type="text" size="25" maxlength="50" style="width: 550px;" />
        <p>Location</p>
        <input name="area" value="<?php echo $cou ?>" type="text"  size="25" maxlength="50" style="width: 550px;" />
        <p>Message / Comments *</p>
        <textarea name="message"  class="mainformstyle" rows="6" cols="4" style="width: 550px;"></textarea>
        <br />
        
        <!-- New Captcha Code Update -->
        
        <p><img id="captcha" class="enquriy-contact" src="secure/securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" /></p>
        <p class="blue1"><a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('captcha').src = 'secure/securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="secure/images/refresh.png" alt="Reload Image" onclick="this.blur()" height="20px" width="20px" /></a></p>
        <p>Enter Code *</p>
        <?php echo @$_SESSION['ctform']['captcha_error'] ?>
        <input type="text" name="ct_captcha"/>
        
        <!-- End Captcha Code Update --> 

        <br />
        <p>
          <input type="submit" style="width: 140px;" value="Submit"/>
        </p>
      </form>
      <p>* Denotes mandatory fields.</p>
    </div>
    <div class="right"><img class="headerimg" src="images/contact.jpg" width="70" height="50" alt="contact us" />
      <p class="addressheader">contact us</p>
      <p class="address">Brisco Williams</p>
      <p class="address">Gorseinon Road</p>
      <p class="address">Swansea</p>
      <p class="address">SA4 9GG</p>
      <p class="tel">Tel: 01792 894961</p>
      <p class="where">opening areas</p>
      <p class="address">Monday-Friday: 8.30am-5pm</p>
      <p class="address">Wednesday: 8.30am-7pm</p>
      <p class="address">Saturday: 9am-1pm</p>
      <p class="where">how do i get there?</p>
      <iframe width="261" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=brisco+williams+SA4+9GG&amp;sll=51.667538,-4.025524&amp;sspn=0.010434,0.03268&amp;ie=UTF8&amp;hq=brisco+williams&amp;hnear=Swansea,+SA4+9GG,+UK&amp;cid=16372277397674338462&amp;ll=51.672342,-4.024773&amp;spn=0.031937,0.044632&amp;z=13&amp;iwloc=near&amp;output=embed"></iframe>
      <br />
      <small><a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=brisco+williams+SA4+9GG&amp;sll=51.667538,-4.025524&amp;sspn=0.010434,0.03268&amp;ie=UTF8&amp;hq=brisco+williams&amp;hnear=Swansea,+SA4+9GG,+UK&amp;cid=16372277397674338462&amp;ll=51.672342,-4.024773&amp;spn=0.031937,0.044632&amp;z=13&amp;iwloc=A">View Larger Map</a></small> </div>
    <div class="spacer"></div>
  </div>
</div>
<?php include("includes/footer.php"); ?>
<div id="extra">
  <?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.crearelinks.co.uk/code.php?pageid=350630");
curl_exec($ch);
curl_close($ch);
?>
</div>
</body>
</html>