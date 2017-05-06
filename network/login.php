<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta name=author content="Shreyan Nag">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class=container>
<div class="form-group">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" class="form-control" name="username" placeholder="Username" required />
<br>
<input type="password" class="form-control" name="password" placeholder="Password" required />
<br>
<button class="btn btn-primary" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Log In</button>
&nbsp;
</form><br>
<a href="http://www.tas2013batch.esy.es/"><button class="btn btn-standard"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</button></a><br>
<p align="center">Not registered yet? <a href='registration.php'>Register Here</a></p>
<br>
<p align="center">All Rights Reserved. Developed by Shreyan Nag</p>
</div></div>
<br>
<div class=col-xs12>
</div>
<?php } ?>
</body>
</html>
