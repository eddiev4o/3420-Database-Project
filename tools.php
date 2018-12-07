<?php
require_once('connect.php');
require_once('library.php');
?>
<!doctype html>
<html>
<head>
    <title> Green Landscape Database </title>
	<?php loadboot(); ?>
</head>
<body>
  <nav class='navbar navbar-default navbar-fixed-top'>
  	<div class='container'>
  	<div class ='navbar-header'>
      	<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
      		<span class='icon-bar'></span>
      		<span class='icon-bar'></span>
      		<span class='icon-bar'></span>
              <span class='icon-bar'></span>
      	</button>
          <a class='navbar-brand' href='./home.php'>Green Landscape</a>
      </div>
          <div class='collapse navbar-collapse' id='myNavbar'>
      		<ul class='nav navbar-nav navbar-right'>
              <li><a href='home.php'>HOME</a></li>
              <li><a href='manager.php'><span class='glyphicon glyphicon-user'></span>MANAGER</a></li>
              </ul>
          </div>
      </div>
  </nav>
</body>
</html>
