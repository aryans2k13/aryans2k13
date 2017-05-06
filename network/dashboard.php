<?php
?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
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
<title>Dashboard - View Records</title>
</head>
<br>
<body>
<div class=container>
<div class=col-xs12>
<h3>Classmate Contacts</h3>
<div class="embed-responsive embed-responsive-16by9">
<iframe class=embed-responsive-item src="https://docs.google.com/spreadsheets/d/1ACZbzqRzBvbc1e1p0Q-6mr_1yg_GARCU0B4RyNnLuV0/pubhtml?gid=1738276731&single=true&widget=true&headers=false"></iframe>
</div>
<br>
<div class="embed-responsive embed-responsive-16by9">
	<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScV7DhLXSEIJ1tb6he0MPa1nEe002NBNekZALb2-lhb3aJzKA/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div></div>
<br>
<p align="center"><a href="index.php"><button class="btn btn-primary">Home</button></a></p><br>
<p align="center"><a href="logout.php"><button class="btn btn-primary">Logout</button></a></p></br>
<p align="center">All Rights Reserved. Developed by Shreyan Nag</p>
</div>
</body>
</html>
