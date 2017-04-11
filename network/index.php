<?php

?>

<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Tas2013batch's Dashboard</title>
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
<body><div class=container><div class="jumbotron">
<p align="center">Welcome <?php echo $_SESSION['username']; ?>!</p><br>
<p>To view all batchmates contacts . Click On Explore Dash. </p><br>
<p align="center"><a href="dashboard.php"><button class="btn btn-primary">Explore Dash</button></a></p><br>
<p align="center"><a href="logout.php"><button class="btn btn-primary">Logout</button></a></p>
<br>
<p align="center">All Rights Reserved. Developed by Shreyan Nag</p></div></div>
</body>
</html>
