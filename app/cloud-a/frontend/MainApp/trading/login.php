<?php
session_start();
session_regenerate_id(true); 

$error=0;
if (isset($_SESSION['error']) && ($_SESSION['error'] == 1))
{
	$error=1;
}


if ($error==1) 
{
	$error_msg = $_SESSION['error_msg'];
	$style = "";
}
else
{
	$error_msg = "";
	$style = "style='display:none'";	
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Arcadia Finance Login Page</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">


    <link href="css/main.css?version=4.4.0" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo10.png" style="width:256px"></a>
        </div>
        <h4 class="auth-header">
          Login Form
        </h4>
        <form id="myform" action="auth.php" method="post">
          <div class="form-group">
            <label for="">Username</label><input class="form-control" placeholder="Enter your username" name="username"  type="text">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label><input class="form-control" placeholder="Enter your password" name="password"  type="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="form-group" style="color:red" <?php echo $style; ?> >
		  <br>
            <label> <b><?php echo $error_msg; ?></b></label>
            
          </div>		  
          <div class="buttons-w">
            <button class="btn btn-primary">Log me in</button>
          </div>
        </form>
      </div>
    </div>

</body>



</html>