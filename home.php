 <?php
require_once('connect.php');
require_once('library.php');
?>
<!doctype html>
<html lang='en'>
<head>
    <title> Green Landscape Database </title>
	<?php loadboot(); ?>
</head>

<body id='myPage' data-spy='scroll' data-target='.navbar' data-offset='60'>

<nav class='navbar navbar-default navbar-fixed-top'>
	<div class='container'>
	<div class ='navbar-header'>
    	<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
    		<span class='icon-bar'></span>
    		<span class='icon-bar'></span>
    		<span class='icon-bar'></span>
            <span class='icon-bar'></span>
    	</button>
        <a class='navbar-brand' href='#myPage'>Green Landscape</a>
    </div>
        <div class='collapse navbar-collapse' id='myNavbar'>
    		<ul class='nav navbar-nav navbar-right'>
    		<li><a href='#about'>ABOUT</a></li>
    		<li><a href='#services'>SERVICES</a></li>
    		<li><a href='#pricing'>PRICING</a></li>
    		<li><a href='#contact'>CONTACT</a></li>
            <li><a href='manager.php'><span class='glyphicon glyphicon-user'></span>MANAGER</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class = "jumbotron text-center">
    <h1> Green Landscape </h1>
    <p> We specialize in all your landscaping needs </p>
</div>
<!--About -->
<div id='about' class='container-fluid'>
    <div class='row'>
        <div class='col-sm-8'>
        <h2> About Green Landscape </h2>
        <h4> We are a local landscaping business operating within Bakersfield, CA
            Our mission is to provide our customers with the best experience and fulfill
            all their landscaping needs! <h4>
        <p> We specialize in everyday services and complex landscaping projects </p>
        </div>
    </div>
</div>
<div class = 'container-fluid bg-grey'>
    <div class='row'>
        <div class='col-sm-4'>
        <span class='glyphicon glyphicon-globe logo slideanim'></span>
        </div>
    <div class='col-sm-8'>
        <h2>Our Values</h2><br>
        <h4><strong>MISSION:</strong> Our mission is to provide our customers with the best
        experience guaranteed and fulfill all their landscaping needs!</h4><br>
        <p><strong>Vision</strong> Our vision is simple. Cut grass. Eat ass. </p>
    </div>
    </div>
</div>

<!-- Services -->
<div id='services' class='container-fluid text-center'>
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class='row slideanim'>
        <div class='col-sm-4'>
        <span class = 'glyphicon glyphicon-calendar logo-small'></span>
	      <h4>YEAR-ROUND SERVICING</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>FRONT & BACKYARD CARE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-conifer logo-small"></span>
      <h4>TREE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>PLANTS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>FERTILIZER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">SPRINKLER MAINTENANCE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Maintenance Service Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Gold</h1>
        </div>
        <div class="panel-body">
          <p>Lawn Care</p>
          <p>Weeding</p>
          <p>Edging</p>
          <p>Sprinkler Adjustments</p>
          <p>Clean Up</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Platinum</h1>
        </div>
        <div class="panel-body">
          <p>Gold+</p>
          <p>Front & Back Lawn Care</p>
          <p>Sprinkler Maintenance</p>
          <p>Fertilizing</p>
          <p>Pruning & Manicuring</p>
        </div>
        <div class="panel-footer">
          <h3>$69</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Diamond</h1>
        </div>
        <div class="panel-body">
          <p>Platinum+</p>
          <p>Plant Replacement</p>
          <p>Tree Service</p>
          <p>Quarterly Recommendations</p>
          <p>Never Lift A Finger</p>
        </div>
        <div class="panel-footer">
          <h3>$99</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-12 text-center">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bakersfield, CA</p>
      <p><span class="glyphicon glyphicon-phone"></span> (661) 555-5555</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contact@greenlandscape.com</p>
    </div>
  </div>
</div>

<footer class='container-fluid text-center'>
	<a href='#myPage' title='To Top'>
		<span class='glyphicon glyphicon-chevron-up'></span>
	</a>
	<p> Back to the top <p>
</footer>

<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    }
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
