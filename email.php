<?php
foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
  // grab recaptcha library
require_once "recaptchalib.php";

$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <html>
<head>
<title>Email</title>
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<meta charset="utf-8">
<meta name=author content="Shreyan Nag">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>
<div class="container">
    <form  action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" name="action" value="submit">
    <label for="exampleInputEmail1">Your name:  </label><input name="name" type="text" value="" size="30" class="form-control"/><br><br>
    <label for="exampleInputPassword1">Your email:  </label><input name="email" type="text" value="" size="30" class="form-control"/><br><br>
    <label for="exampleInputMessage1">Your message: </label><textarea name="message" rows="7" cols="30" class="form-control"></textarea><br><br>
    <div class="g-recaptcha" data-sitekey="6LcsfBMUAAAAAGANU4Xjo2D8bcYQdZVH4X1uPAi-"></div><br><br>
    <input type="submit" value="Send email" class="btn btn-primary"/>
    </div>
    </form><br>
    <p>Your information is safe with us.</p></div></body></html>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{       
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("admin@tas2013batch.esy.es", $subject, $message, $from);
        echo "";
        }
    }

    // your secret key
$secret = "6LcsfBMUAAAAAGlete1FU0AMq3BuKDc-8zepYbTl";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);  

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success) {
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
  } else {

?>
<?php } ?>
