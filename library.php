<?php

function loadboot() {
	echo "<meta charset='UTF-8'>
		<meta name = 'viewport'
		content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='./bootstrap/css/bootstrap.css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<script src ='./jquery.min.js'></script>
		<script type='text/javascript' src='./bootstrap/js/bootstrap.js'></script>
		<link rel='stylesheet' href='./style.css'>";
}

function display() {
	echo "
	<div class='clearfix' id='header'>
		<p> header </p>
	</div>
<div class = 'container-fluid'>
	<div class = 'jumbotron'>
		<h1><b> Green Landscape Database<b> </h1>
	</div>
	<nav class='navbar navbar-inverse'>
	<div class='container-fluid'>
		<div class='class='navbar-header'>
		<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#mynav'>
			<span> class='icon-bar'></span>
			<span> class='icon-bar'></span>
			<span> class='icon-bar'></span>
		</button>
		<a class='navbar-brand' href='home.php'><span class='glyphicon glyphicon-home'></span> Home</a>
	</div>
	<div class='collapse navbar-collapse' id='mynav'>
		<ul class='nav navbar-nav'>
			<li><a href='.php'>Manager</a></li>
			<li><a href='.php'>Employee</a></li>
			<li><a href='.php'>About Us</a></li>
		</ul>
	</div>
	</nav>
</div>";
}
?>
