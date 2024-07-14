
<?php require_once '../Connection/conn.php';
   $error="";
   if(isset($_POST['mail_id']))
{
    $user_id = $_POST['mail_id'];
    $sql = "SELECT * FROM admin WHERE email = '$user_id' ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // echo $row['name']."<br>". $row['email'];
    // exit();
    $login_id = $row['name'];
	$password = $row['password'];
	$email_id = $row['email'];
    //   echo $login_id . "<br>" ."<br>" . $password;
    // exit();
	if($user_id == $email_id) {
				// EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = $email_id;
                $email_subject = "Forgot Password";
                $email_message = "Hello Admin\n\n" ."As per your request, here are your Admin Panel Credentials Detail. \n\n";
 
     
                function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
               }
 
     
 
               $email_message .= "USERNAME : " .clean_string($login_id)."\n";
               $email_message .= "PASSWORD : " .clean_string($password)."\n\n" ."Regards\n" ."moneytree.co.in";
               // create email headers
               $email_from = "";
               $headers = 'From: ' .$email_from ."\r\n" 
                          .'Reply-To: ' .$email_from ."\r\n" 
                          .'X-Mailer: PHP/' .phpversion();
                          @mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
          <script>alert('Contact Form Submitted Successfully. ThankYou.');</script>
          <script>window.location='forgot.php?forgot-password';</script>
	  
 
<?php
  
               
    }
    else { ?>
    
  <script>alert('Your Entered Mail ID was wrong, Please Try Again.');</script>
          <script>window.location='forgot.php?Failed';</script>
<?php }}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Super User LogIn</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">
       
        <form class="login-form" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p><strong><?php            echo $error;?></strong></p>
            
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="email" class="form-control" placeholder="User Email Id" name="mail_id" autofocus required>
            </div>
            
            
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit</button>
            <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
        </div>
      </form>
    <div class="text-right">
            
        </div>
    </div>


  </body>
</html>
