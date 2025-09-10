<?php
	if(!isset($_GET["fname"]) || $_GET["fname"] =="" )
	{
		$name = "John";
	}
	else{
		
		$name = $_GET["fname"];
	}
	if(!isset($_GET["lname"]) || $_GET["lname"] =="" )
	{
		$lname = "Doe";
	}
	else{
		
		$lname = $_GET["lname"];
	}	
	
	if(!isset($_GET["email"]) || $_GET["email"] =="" )
	{
		$email = "no_email@domain.com";
	}
	else{
		
		$email = $_GET["email"];
	}
?>


<!DOCTYPE html>
<html>
  <body style="background-color: #222533; padding: 20px; font-family: font-size: 14px; line-height: 1.43; font-family: &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;">
    <div style="max-width: 600px; margin: 10px auto 20px; font-size: 12px; color: #A5A5A5; text-align: center;">
      If you are unable to see this message, <a href="#" style="color: #A5A5A5; text-decoration: underline;">click here to send an email to support</a>
    </div>
    <div style="max-width: 600px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);">
      <table style="width: 100%;">
        <tr>
          <td style="background-color: #fff;">
            <img alt="" src="images/logo0.png" style="width: 256px; padding: 20px">
          </td>

        </tr>
      </table><div style="padding: 60px 70px; border-top: 1px solid rgba(0,0,0,0.05);">
        <h1 style="margin-top: 0px;">
          Hi <?php echo $name . "  " . $lname;?> ,
        </h1>
        <div style="color: #636363; font-size: 14px;">
          <p>
            Thank you for getting in touch with us. We have pioritized your request and someone from our team will reach our to you within the next 2 business days. In the meantime you will receive an email to <u><b>(<?php echo $email; ?>)</u></b> with a link to monitor the status of your request.
          </p>
        </div>
        <a href="index.html" style="padding: 8px 20px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 16px; display: inline-block; margin: 20px 0px; margin-right: 20px; text-decoration: none;">Return back to Arcadia</a>
        <h4 style="margin-bottom: 10px;">
          Need Help?
        </h4>
        <div style="color: #A5A5A5; font-size: 12px;">
          <p>
            If you have any questions you can simply reply to this email or find our contact information below. Also contact us at <a href="#" style="text-decoration: underline; color: #4B72FA;">admin@arcadia.io</a>
          </p>
        </div>
      </div><div style="background-color: #F5F5F5; padding: 40px; text-align: center;">
        <div style="margin-bottom: 20px;">
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="trading/img/social-icons/twitter.png" style="width: 28px;"></a><a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="trading/img/social-icons/facebook.png" style="width: 28px;"></a><a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="trading/img/social-icons/linkedin.png" style="width: 28px;"></a><a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="trading/img/social-icons/instagram.png" style="width: 28px;"></a>
        </div>
        <div style="margin-bottom: 20px;">
          <a href="#" style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">Contact Us</a><a href="#" style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">Privacy Policy</a><a href="#" style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">Unsubscribe</a>
        </div>
        <div style="color: #A5A5A5; font-size: 12px; margin-bottom: 20px; padding: 0px 50px;">
          You are receiving this email because you signed up for Light Admin. We use Light Admin to send our emails
        </div>
        <div style="margin-bottom: 20px;">
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="trading/img/market-google-play.png" style="height: 33px;"></a><a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="trading/img/market-ios.png" style="height: 33px;"></a>
        </div>

      </div>
    </div>
  </body>
</html>
